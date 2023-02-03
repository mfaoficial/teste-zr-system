<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
            'name'        => 'Isabela Daiane Isabela Cavalcanti',
            'type'        => 'Pessoa Física',
            'cpf'         => '757.778.430-34',
            'rg'          => '26.013.545-8',
            'birth_date'  => Carbon::createFromFormat('d/m/Y', '16/04/1992')->format('Y-m-d'),
            'person_type' => 'Solteiro',
            'zip_code'    => '69316-226',
            'street'      => 'Rua João Ferreira Mota',
            'number'      => '531',
            'district'    => 'Nova Cidade',
            'complement'  => '',
            'city'        => 'Boa Vista',
            'state'       => 'RR',
            'phone_type'  => 'Celular',
            'cell_phone'  => '(95) 99180-9088',
        ]);
        DB::table('persons')->insert([
            'name'        => 'Isabela Joana Bruna Nunes',
            'type'        => 'Pessoa Física',
            'cpf'         => '153.698.933-90',
            'rg'          => '50.027.551-8',
            'birth_date'  => Carbon::createFromFormat('d/m/Y', '03/02/1974')->format('Y-m-d'),
            'person_type' => 'Solteiro',
            'zip_code'    => '57082-170',
            'street'      => 'Rua Nossa Senhora de Fátima',
            'number'      => '479',
            'district'    => 'Santa Lúcia',
            'complement'  => '',
            'city'        => 'Maceió',
            'state'       => 'AL',
            'phone_type'  => 'Fixo',
            'phone'       => '(82) 3507-7988',
        ]);
        DB::table('persons')->insert([
            'name'        => 'Emanuel José da Rocha',
            'type'        => 'Pessoa Física',
            'cpf'         => '976.749.702-13',
            'rg'          => '21.901.638-0',
            'birth_date'  => Carbon::createFromFormat('d/m/Y', '23/01/1953')->format('Y-m-d'),
            'person_type' => 'Casado',
            'zip_code'    => '72916-015',
            'street'      => 'Quadra Quadra 31',
            'number'      => '356',
            'district'    => 'Jardim Pérola da Barragem I',
            'complement'  => '',
            'city'        => 'Águas Lindas de Goiás',
            'state'       => 'GO',
            'phone_type'  => 'Fixo',
            'phone'       => '(61) 3715-0500',
        ]);
        DB::table('persons')->insert([
            'name'        => 'Diego Jorge Gabriel Viana',
            'type'        => 'Pessoa Física',
            'cpf'         => '114.711.186-30',
            'rg'          => '15.433.284-7',
            'birth_date'  => Carbon::createFromFormat('d/m/Y', '02/02/1950')->format('Y-m-d'),
            'person_type' => 'Solteiro',
            'zip_code'    => '69018-095',
            'street'      => 'Rua 16',
            'number'      => '275',
            'district'    => 'Lago Azul',
            'complement'  => '',
            'city'        => 'Manaus',
            'state'       => 'AM',
            'phone_type'  => 'Celular',
            'cell_phone'  => '(92) 99307-2944',
        ]);
        DB::table('persons')->insert([
            'name'        => 'Sara Rita Cláudia Galvão',
            'type'        => 'Pessoa Física',
            'cpf'         => '608.720.003-70',
            'rg'          => '28.724.840-9',
            'birth_date'  => Carbon::createFromFormat('d/m/Y', '02/02/1990')->format('Y-m-d'),
            'person_type' => 'Solteiro',
            'zip_code'    => '59094-110',
            'street'      => 'Rua Praia do Sagi',
            'number'      => '524',
            'district'    => 'Ponta Negra',
            'complement'  => '',
            'city'        => 'Natal',
            'state'       => 'RN',
            'phone_type'  => 'Celular',
            'cell_phone'  => '(84) 99870-8188',
        ]);
    }
}
