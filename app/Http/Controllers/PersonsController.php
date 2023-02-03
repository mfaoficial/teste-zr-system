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
                    return '<button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
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
                $data['birth_date'] = Carbon::createFromFormat('d/m/Y', $request['birth_date'])->format('Y-m-d');

                return response()->json([
                    'success' => Person::create($data)
                ]);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function delete(Request $request)
    {
        return response()->json([
            'success' => Person::findOrFail($request->id)->delete()
        ]);
    }
}
