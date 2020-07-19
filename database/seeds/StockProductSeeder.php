<?php

use Illuminate\Database\Seeder;

class StockProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vinhos

        DB::table('stock_products')->insert([
            'id' => '1',
            'amount' => '10',
            'products_id' => '1'
        ]);

        DB::table('stock_products')->insert([
            'id' => '2',
            'amount' => '10',
            'products_id' => '2'
        ]);

        DB::table('stock_products')->insert([
            'id' => '3',
            'amount' => '10',
            'products_id' => '3'
        ]);

        DB::table('stock_products')->insert([
            'id' => '4',
            'amount' => '10',
            'products_id' => '4'
        ]);

        DB::table('stock_products')->insert([
            'id' => '5',
            'amount' => '10',
            'products_id' => '5'
        ]);

        DB::table('stock_products')->insert([
            'id' => '6',
            'amount' => '10',
            'products_id' => '6'
        ]);

        DB::table('stock_products')->insert([
            'id' => '7',
            'amount' => '10',
            'products_id' => '7'
        ]);

        DB::table('stock_products')->insert([
            'id' => '8',
            'amount' => '10',
            'products_id' => '8'
        ]);

        // Beers

        DB::table('stock_products')->insert([
            'id' => '9',
            'amount' => '10',
            'products_id' => '25'
        ]);

        DB::table('stock_products')->insert([
            'id' => '10',
            'amount' => '10',
            'products_id' => '26'
        ]);

        DB::table('stock_products')->insert([
            'id' => '11',
            'amount' => '10',
            'products_id' => '27'
        ]);

        DB::table('stock_products')->insert([
            'id' => '12',
            'amount' => '10',
            'products_id' => '28'
        ]);

        DB::table('stock_products')->insert([
            'id' => '13',
            'amount' => '10',
            'products_id' => '29'
        ]);

        DB::table('stock_products')->insert([
            'id' => '14',
            'amount' => '10',
            'products_id' => '30'
        ]);

        DB::table('stock_products')->insert([
            'id' => '15',
            'amount' => '10',
            'products_id' => '31'
        ]);

        DB::table('stock_products')->insert([
            'id' => '16',
            'amount' => '10',
            'products_id' => '32'
        ]);

        // Destilados

    }
}
