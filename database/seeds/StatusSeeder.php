<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'state' => 'Aguardando pagamento'
        ]);

        DB::table('status')->insert([
            'state' => 'Preparando pedido'
        ]);

        DB::table('status')->insert([
            'state' => 'Aguardando envio'
        ]);

        DB::table('status')->insert([
            'state' => 'Em transporte'
        ]);

        DB::table('status')->insert([
            'state' => 'Entregue'
        ]);

    }
}
