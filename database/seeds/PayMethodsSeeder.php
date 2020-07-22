<?php

use Illuminate\Database\Seeder;

class PayMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pay_methods')->insert([
            'method' => 'Cartão de Crédito'
        ]);

        DB::table('pay_methods')->insert([
            'method' => 'Boleto'
        ]);

    }
}
