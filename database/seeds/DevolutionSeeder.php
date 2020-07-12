<?php

use Illuminate\Database\Seeder;

class DevolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devolutions')->insert([
            'reasons' => 'Produto incorreto'
        ]);

        DB::table('devolutions')->insert([
            'reasons' => 'Produto danificado'
        ]);

        DB::table('devolutions')->insert([
            'reasons' => 'Produto vencido'
        ]);

        DB::table('devolutions')->insert([
            'reasons' => 'Arrependimento'
        ]);

        DB::table('devolutions')->insert([
            'reasons' => 'Solicitação de troca'
        ]);

        DB::table('devolutions')->insert([
            'reasons' => 'Compra cancelada'
        ]);
    }
}
