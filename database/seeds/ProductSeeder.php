<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // VINHOS

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Calamares',
            'description' => 'Vinho Calamares',
            'cost_price' => '10.00',
            'sale_price' => '78.00',
            'discount' => '0.00',
            'photo' => '/img/wine/calamares.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Casal Garcia',
            'description' => 'Vinho Casal Garcia',
            'cost_price' => '10.00',
            'sale_price' => '47.00',
            'discount' => '0.00',
            'photo' => '/img/wine/casalgarcia.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Calamares',
            'description' => 'Vinho Calamares',
            'cost_price' => '10.00',
            'sale_price' => '32.75',
            'discount' => '0.00',
            'photo' => '/img/wine/calamares.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Mateus',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '122.00',
            'discount' => '0.00',
            'photo' => '/img/wine/mateus.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Mendes',
            'description' => 'Vinho Mendes',
            'cost_price' => '10.00',
            'sale_price' => '235.00',
            'discount' => '0.00',
            'photo' => '/img/wine/mendes.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Mateus',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '28.00',
            'discount' => '0.00',
            'photo' => '/img/wine/mateus.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Porca',
            'description' => 'Vinho Porca',
            'cost_price' => '10.00',
            'sale_price' => '30.00',
            'discount' => '0.00',
            'photo' => '/img/wine/porca.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Vinho Tannat',
            'cost_price' => '10.00',
            'sale_price' => '34.00',
            'discount' => '0.00',
            'photo' => '/img/wine/tannat.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Porca',
            'description' => 'Vinho Porca',
            'cost_price' => '10.00',
            'sale_price' => '11.00',
            'discount' => '0.00',
            'photo' => '/img/wine/porca.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Calamares',
            'description' => 'Vinho Calamares',
            'cost_price' => '10.00',
            'sale_price' => '8.00',
            'discount' => '0.00',
            'photo' => '/img/wine/calamares.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Casal Garcia',
            'description' => 'Vinho Casal Garcia',
            'cost_price' => '10.00',
            'sale_price' => '5.00',
            'discount' => '0.00',
            'photo' => '/img/wine/casalgarcia.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Vinho Tannat',
            'cost_price' => '10.00',
            'sale_price' => '87.00',
            'discount' => '0.00',
            'photo' => '/img/wine/tannat.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Calamares',
            'description' => 'Vinho Calamares',
            'cost_price' => '10.00',
            'sale_price' => '44.00',
            'discount' => '0.00',
            'photo' => '/img/wine/calamares.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Casal Garcia',
            'description' => 'Vinho Casal Garcia',
            'cost_price' => '10.00',
            'sale_price' => '26.00',
            'discount' => '0.00',
            'photo' => '/img/wine/casalgarcia.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Calamares',
            'description' => 'Vinho Calamares',
            'cost_price' => '10.00',
            'sale_price' => '19.00',
            'discount' => '0.00',
            'photo' => '/img/wine/calamares.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Mateus',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '6.60',
            'discount' => '0.00',
            'photo' => '/img/wine/mateus.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Mendes',
            'description' => 'Vinho Mendes',
            'cost_price' => '10.00',
            'sale_price' => '16.00',
            'discount' => '0.00',
            'photo' => '/img/wine/mendes.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Mateus',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '20.56',
            'discount' => '0.00',
            'photo' => '/img/wine/mateus.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Porca',
            'description' => 'Vinho Porca',
            'cost_price' => '10.00',
            'sale_price' => '20.10',
            'discount' => '0.00',
            'photo' => '/img/wine/porca.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Vinho Tannat',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/wine/tannat.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Porca',
            'description' => 'Vinho Porca',
            'cost_price' => '10.00',
            'sale_price' => '43.00',
            'discount' => '0.00',
            'photo' => '/img/wine/porca.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Calamares',
            'description' => 'Vinho Calamares',
            'cost_price' => '10.00',
            'sale_price' => '28.50',
            'discount' => '0.00',
            'photo' => '/img/wine/calamares.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Casal Garcia',
            'description' => 'Vinho Casal Garcia',
            'cost_price' => '10.00',
            'sale_price' => '13.45',
            'discount' => '0.00',
            'photo' => '/img/wine/casalgarcia.jpg',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Vinho Tannat',
            'cost_price' => '10.00',
            'sale_price' => '22.00',
            'discount' => '0.00',
            'photo' => '/img/wine/tannat.jpg',
            'categories_id' => 1
        ]);

        // CERJEVAS

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol',
            'description' => 'Cerveja Skol',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol',
            'description' => 'Cerveja Skol',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Bud',
            'description' => 'Cerveja Bud',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/bud.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Sahl',
            'description' => 'Cerveja Sahl',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/cervejaasahl.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Corona Pack',
            'description' => 'Cerveja Corona Pack',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/corona.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Sahl',
            'description' => 'Cerveja Sahl',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/cervejaasahl.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Heineken',
            'description' => 'Cerveja Heineken',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/heineken.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol',
            'description' => 'Cerveja Skol',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Bud',
            'description' => 'Cerveja Bud',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/bud.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol',
            'description' => 'Cerveja Skol',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol',
            'description' => 'Cerveja Skol',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Bud',
            'description' => 'Cerveja Bud',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/bud.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Sahl',
            'description' => 'Cerveja Sahl',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/cervejaasahl.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Corona Pack',
            'description' => 'Cerveja Corona Pack',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/corona.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Sahl',
            'description' => 'Cerveja Sahl',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/cervejaasahl.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Heineken',
            'description' => 'Cerveja Heineken',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/heineken.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol',
            'description' => 'Cerveja Skol',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Bud',
            'description' => 'Cerveja Bud',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/bud.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);


        // DESTILADOS

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Absolut',
            'description' => 'Vodca Absolut',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/absolut.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Red Label',
            'description' => 'Vodca Red Label',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/d-04.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Raspberri',
            'description' => 'Vodca Raspberri',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/raspberri.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Smirnoff',
            'description' => 'Vodca Smirnoff',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/smirnoff.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Grey Goose',
            'description' => 'Vodca Grey Goose',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/vodka3.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Jacks Daniels',
            'description' => 'Vodca Jacks Daniels',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whisky.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Gallantry',
            'description' => 'Vodca Gallantry',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whiskey.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Red Label',
            'description' => 'Vodca Red Label',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/d-04.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Raspberri',
            'description' => 'Vodca Raspberri',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/raspberri.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Smirnoff',
            'description' => 'Vodca Smirnoff',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/smirnoff.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Grey Goose',
            'description' => 'Vodca Grey Goose',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/vodka3.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Jacks Daniels',
            'description' => 'Vodca Jacks Daniels',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whisky.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Gallantry',
            'description' => 'Vodca Gallantry',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whiskey.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Grey Goose',
            'description' => 'Vodca Grey Goose',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/vodka3.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Absolut',
            'description' => 'Vodca Absolut',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/absolut.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Red Label',
            'description' => 'Vodca Red Label',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/d-04.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Raspberri',
            'description' => 'Vodca Raspberri',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/raspberri.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Smirnoff',
            'description' => 'Vodca Smirnoff',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/smirnoff.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Grey Goose',
            'description' => 'Vodca Grey Goose',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/vodka3.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Jacks Daniels',
            'description' => 'Vodca Jacks Daniels',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whisky.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Gallantry',
            'description' => 'Vodca Gallantry',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whiskey.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Red Label',
            'description' => 'Vodca Red Label',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/d-04.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Raspberri',
            'description' => 'Vodca Raspberri',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/raspberri.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Smirnoff',
            'description' => 'Vodca Smirnoff',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/smirnoff.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Grey Goose',
            'description' => 'Vodca Grey Goose',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/vodka3.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Jacks Daniels',
            'description' => 'Vodca Jacks Daniels',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whisky.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Gallantry',
            'description' => 'Vodca Gallantry',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/whiskey.jpg',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Grey Goose',
            'description' => 'Vodca Grey Goose',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/distillate/vodka3.png',
            'categories_id' => 3
        ]);


        // NÃO ALCOÓLICOS

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Coca-Cola',
            'description' => 'Lata de Coca-Cola',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/coca.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Lata de Fanta',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/fanta.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Dr Pepper',
            'description' => 'Lata de Dr Pepper',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/soda-04.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Redbull',
            'description' => 'Lata de Redbull',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/redbull.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Coca-Cola',
            'description' => 'Lata de Coca-Cola',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/coca.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Lata de Fanta',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/fanta.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Dr Pepper',
            'description' => 'Lata de Dr Pepper',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/soda-04.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Redbull',
            'description' => 'Lata de Redbull',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/redbull.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Pepsi',
            'description' => 'Lata de Pepsi',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/pepsi.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Lipton',
            'description' => 'Chá Lipton',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-02.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Água',
            'description' => 'Garrafa de Água',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-03.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Pepsi',
            'description' => 'Lata de Pepsi',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/pepsi.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Lipton',
            'description' => 'Chá Lipton',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-02.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Água',
            'description' => 'Garrafa de Água',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-03.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Lata de Fanta',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/fanta.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Dr Pepper',
            'description' => 'Lata de Dr Pepper',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/soda-04.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Redbull',
            'description' => 'Lata de Redbull',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/redbull.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Coca-Cola',
            'description' => 'Lata de Coca-Cola',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/coca.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Lata de Fanta',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/fanta.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Dr Pepper',
            'description' => 'Lata de Dr Pepper',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/soda-04.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Redbull',
            'description' => 'Lata de Redbull',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/redbull.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Coca-Cola',
            'description' => 'Lata de Coca-Cola',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/coca.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Lata de Fanta',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/fanta.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Dr Pepper',
            'description' => 'Lata de Dr Pepper',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/soda-04.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Redbull',
            'description' => 'Lata de Redbull',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/redbull.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Pepsi',
            'description' => 'Lata de Pepsi',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/pepsi.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Lipton',
            'description' => 'Chá Lipton',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-02.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Água',
            'description' => 'Garrafa de Água',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-03.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Pepsi',
            'description' => 'Lata de Pepsi',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/pepsi.jpg',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Lipton',
            'description' => 'Chá Lipton',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-02.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Água',
            'description' => 'Garrafa de Água',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/nd-03.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Lata de Fanta',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/fanta.jng',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Dr Pepper',
            'description' => 'Lata de Dr Pepper',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/soda-04.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Redbull',
            'description' => 'Lata de Redbull',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'photo' => '/img/non-alcoholic/redbull.jpg',
            'categories_id' => 4
        ]);


        // 


    }
}
