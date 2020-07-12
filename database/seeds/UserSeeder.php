<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Administrador',
            'surname' => 'do Sistema',
            'email' => 'admin@admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // senha = password
            'cpf' => '11111111111',
            'birth' => '11111111',
            'gender' => 'M',
            'cellphone' => '11111111111',
            'phone' => null,
            'access_level' => 1,    // 1 = administrador
            'news' => 0,            // 0 = não recebe newsletters
            'created_at' => '2020-07-10 20:22:26',
            'updated_at' => '2020-07-10 20:22:26'
        ]);

        DB::table('users')->insert([
            'name' => 'Alice',
            'surname' => 'da Silva',
            'email' => 'alice@email',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'cpf' => '46730586830',
            'birth' => '19041989',
            'gender' => 'F',
            'cellphone' => '11998765656',
            'phone' => null,
            'access_level' => 0,
            'news' => 1,
            'created_at' => '2020-07-10 20:22:26',
            'updated_at' => '2020-07-10 20:22:26'
        ]);

        DB::table('users')->insert([
            'name' => 'Helena',
            'surname' => 'da Silva',
            'email' => 'helena@email',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'cpf' => '46734586830',
            'birth' => '19041989',
            'gender' => 'F',
            'cellphone' => '11998765656',
            'phone' => null,
            'access_level' => 0,
            'news' => 1,
            'created_at' => '2020-07-10 20:22:26',
            'updated_at' => '2020-07-10 20:22:26'
        ]);

        DB::table('users')->insert([
            'name' => 'José',
            'surname' => 'da Silva',
            'email' => 'jose@email',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'cpf' => '46430586830',
            'birth' => '19041989',
            'gender' => 'M',
            'cellphone' => '11998765656',
            'phone' => null,
            'access_level' => 0,
            'news' => 1,
            'created_at' => '2020-07-10 20:22:26',
            'updated_at' => '2020-07-10 20:22:26'
        ]);
    }
}
