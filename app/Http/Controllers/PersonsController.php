<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('persons.index');
    }

    public function getAll(Request $request)
    {
        if ($request->ajax()) {
            $data = Person::latest()
                ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row)
                {
                    return '<button class="btn btn-outline-dark editBtn" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-id="' . $row->id . '">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger deleteBtn" data-id="' . $row->id . '">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function getPerson(Request $request)
    {
        $person = Person::findOrFail($request->id);
        return response()->json($person);
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $data      = $request->all();
            $validator = \Illuminate\Support\Facades\Validator::make(
                $data,
                [
                    'name'        => 'required',
                    'type'        => 'required',
                    'cpf'         => 'required_with:typeCpf|cpf',
                    'cnpj'        => 'required_with:typeCnpj|cnpj',
                    'rg'          => 'required_with:typeCpf',
                    'birth_date'  => 'required',
                    'person_type' => 'required',
                    'zip_code'    => 'required',
                    'street'      => 'required',
                    'number'      => 'required',
                    'district'    => 'required',
                    'city'        => 'required',
                    'state'       => 'required',
                    'phone_type'  => 'required',
                    'phone'       => 'required',
                ],
                [
                    'name.required'        => 'O campo Nome é obrigatório.',
                    'type.required'        => 'O campo Tipo... é obrigatório.',
                    'cpf.required_with'    => 'O campo CPF é obrigatório.',
                    'cpf.cpf'              => 'Insira um CPF válido.',
                    'cnpj.required_with'   => 'O campo CNPJ é obrigatório.',
                    'cnpj.cnpj'            => 'Insira um CNPJ válido.',
                    'rg.required_with'     => 'O campo RG é obrigatório para pessoas Físicas.',
                    'birth_date.required'  => 'O campo Data de Nascimento é obrigatório.',
                    'person_type.required' => 'O campo Estado Civil é obrigatório.',
                    'zip_code.required'    => 'O campo CEP é obrigatório.',
                    'street.required'      => 'O campo Rua é obrigatório.',
                    'number.required'      => 'O campo Número é obrigatório.',
                    'district.required'    => 'O campo Bairro é obrigatório.',
                    'city.required'        => 'O campo Cidade é obrigatório.',
                    'state.required'       => 'O campo Estado é obrigatório.',
                    'phone_type.required'  => 'O campo Tipo de Telefone é obrigatório.',
                    'phone.required'       => 'O campo Telefone é obrigatório.',
                ]
            );

            if ($validator->fails()) {
                return response()->json([
                    "success" => false,
                    "errors"  => $validator->errors()
                ]);
            } else {
                $data['birth_date'] = Carbon::parse($request['birth_date'])->format('Y-m-d');

                unset($data['typeCpf']);
                unset($data['typeCnpj']);

                return response()->json([
                    'success' => Person::create($data)
                ]);
            }
        }
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $data       = $request->all();

            $validation = [
                'rules'    => [
                    'name'        => 'required',
                    'type'        => 'required',
                    'birth_date'  => 'required',
                    'person_type' => 'required',
                    'zip_code'    => 'required',
                    'street'      => 'required',
                    'number'      => 'required',
                    'district'    => 'required',
                    'city'        => 'required',
                    'state'       => 'required',
                    'phone_type'  => 'required',
                    'phone'       => 'required',
                ],
                'messages' => [
                    'name.required'        => 'O campo Nome é obrigatório.',
                    'type.required'        => 'O campo Tipo... é obrigatório.',
                    'rg.required_with'     => 'O campo RG é obrigatório para pessoas Físicas.',
                    'birth_date.required'  => 'O campo Data de Nascimento é obrigatório.',
                    'person_type.required' => 'O campo Estado Civil é obrigatório.',
                    'zip_code.required'    => 'O campo CEP é obrigatório.',
                    'street.required'      => 'O campo Rua é obrigatório.',
                    'number.required'      => 'O campo Número é obrigatório.',
                    'district.required'    => 'O campo Bairro é obrigatório.',
                    'city.required'        => 'O campo Cidade é obrigatório.',
                    'state.required'       => 'O campo Estado é obrigatório.',
                    'phone_type.required'  => 'O campo Tipo de Telefone é obrigatório.',
                    'phone.required'       => 'O campo Telefone é obrigatório.',
                ]
            ];

            if ($data['cnpj'] != null) {
                $validation['rules']['cnpj']                  = 'required_with:typeCnpj|cnpj';
                $validation['messages']['cnpj.required_with'] = 'O campo CNPJ é obrigatório.';
                $validation['messages']['cnpj.cnpj']          = 'Insira um CNPJ válido.';
            } else {
                $validation['rules']['cpf']                  = 'required_with:typeCnpj|cpf';
                $validation['messages']['cpf.required_with'] = 'O campo CPF é obrigatório.';
                $validation['messages']['cpf.cpf']           = 'Insira um CPF válido.';
                $validation['rules']['rg']                   = 'required_with:typeCpf';
                $validation['messages']['rg.required_with']  = 'O campo RG é obrigatório para pessoas Físicas.';
            }

            $validator = \Illuminate\Support\Facades\Validator::make(
                $data,
                $validation['rules'],
                $validation['messages']
            );

            if ($validator->fails()) {
                return response()->json([
                    "success" => false,
                    "errors"  => $validator->errors()
                ]);
            } else {
                $data['birth_date'] = Carbon::parse($request['birth_date'])->format('Y-m-d');

                unset($data['typeCpf']);
                unset($data['typeCnpj']);

                return response()->json([
                    'success' => Person::where('id', $data['id'])->update($data)
                ]);
            }
        }
    }

    public function delete(Request $request)
    {
        return response()->json([
            'success' => Person::findOrFail($request->id)->delete()
        ]);
    }
}
