<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'vinhos'
        ]);

        DB::table('categories')->insert([
            'category' => 'cervejas'
        ]);

        DB::table('categories')->insert([
            'category' => 'destilados'
        ]);

        DB::table('categories')->insert([
            'category' => 'não alcoólicos'
        ]);

        DB::table('categories')->insert([
            'category' => 'kits'
        ]);

        DB::table('categories')->insert([
            'category' => 'promoções'
        ]);

    }
}
