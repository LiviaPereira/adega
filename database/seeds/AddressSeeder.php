<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            'address' => 'Rua da Alice',
            'number' => 100,
            'complement' => 'apto 10',
            'zip_code' => '02000-00',
            'district' => 'Jardim Alice',
            'city' => 'São Paulo',
            'users_id' => '2',
        ]);

        DB::table('deliveries')->insert([
            'address' => 'Avenida Helena',
            'number' => 101,
            'complement' => 'apto 7',
            'zip_code' => '02000-00',
            'district' => 'Vila Nova Helena',
            'city' => 'São Paulo',
            'users_id' => '3',
        ]);
    }
}
