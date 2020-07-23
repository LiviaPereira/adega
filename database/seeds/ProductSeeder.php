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
            'name' => 'Tannat',
            'description' => 'Tannat é uma uva tinta da família da Vitis vinifera originária do sul da França. É usualmente utilizada em assemblage com merlot, para suavizar o vinho. É a grande uva adotada pelo Uruguai, que possui uma extensa área de vinhedos dessa casta.',
            'cost_price' => '10.00',
            'sale_price' => '46.99',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/tannat.jpg',
                'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Enoport',
                'volume' => '750ml',
                'alcohol_content' => '9%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Branco',
            'description' => 'Fundada em 1870 na região dos vinhos verdes, a Aveleda é uma vinícola 100% familiar, dirigida hoje pela 5ª geração da família Guedes. Líder mundial na produção de vinho verde, a Aveleda é especialista na produção de vinhos brancos, especialmente com a nobre uva alvarinho. seus vinhos estão presente em mais de 100 países.',
            'cost_price' => '10.00',
            'sale_price' => '37.50',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/calamares.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Aveleda',
                'volume' => '750ml',
                'alcohol_content' => '9,5%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Rosé',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '122.00',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/mateus.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Rosé',
                'brand' => 'Bairrada',
                'volume' => '750ml',
                'alcohol_content' => '6%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinha Casal Mendes Verde',
            'description' => 'Um legítimo Vinho Verde português, original da região de mesmo nome. Este exemplar traz uma combinação entre as variedades de uva Azal, Perdeña, Trajadura e Loureiro, resultando em um vinho de coloração amarelo-palha com reflexos esverdeados. Seu aroma apresenta-se notavelmente frutado com notas cítricas e florais, seguido por um paladar ligeiramente acídulo, o que lhe confere um frescor com final de boca suave. Algumas combinações de harmonização com este vinho ficam a cargo de mariscos, carnes brancas, saladas leves ou massas',
            'cost_price' => '10.00',
            'sale_price' => '35.00',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/mendes.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Branco',
                'brand' => 'Aliança',
                'volume' => '750ml',
                'alcohol_content' => '10%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Porca de Murça',
            'description' => 'Cor vermelha granada e profunda, com traços violáceos. Aromas de morangos e framboesa dominam o nariz, com sutil baunilha e notas de chocolate ao fundo. Sabor arredondado e macio, sustentado por doces taninos. Preenche agradavelmente a boca com seu generoso frutado, fazendo deste um excelente vinho.',
            'cost_price' => '10.00',
            'sale_price' => '30.00',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/porca.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Tinto',
                'brand' => 'Real Cia. Velha',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Tannat é uma uva tinta da família da Vitis vinifera originária do sul da França. É usualmente utilizada em assemblage com merlot, para suavizar o vinho. É a grande uva adotada pelo Uruguai, que possui uma extensa área de vinhedos dessa casta.',
            'cost_price' => '10.00',
            'sale_price' => '34.00',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/tannat.jpg',
            'country' => 'França',
                'type' => 'Vinho Tinto',
                'brand' => 'Merlot',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Branco',
            'description' => 'Vinho português branco, elaborado com uvas delicadas. Possui aspecto límpido, amarelo muito claro, quase transparente, com leves raios esverdeados, e aroma muito frutado. Vinho verde branco meio seco, jovem, fresco, suave e frutado. Aconselhamos ainda como complemento de mariscos e frutos do mar, e todos os tipos de refeições de peixe. ',
            'cost_price' => '10.00',
            'sale_price' => '46.99',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/calamares.jpg',
                'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Enoport',
                'volume' => '750ml',
                'alcohol_content' => '9%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Branco',
            'description' => 'Fundada em 1870 na região dos vinhos verdes, a Aveleda é uma vinícola 100% familiar, dirigida hoje pela 5ª geração da família Guedes. Líder mundial na produção de vinho verde, a Aveleda é especialista na produção de vinhos brancos, especialmente com a nobre uva alvarinho. seus vinhos estão presente em mais de 100 países.',
            'cost_price' => '10.00',
            'sale_price' => '37.50',
            'discount' => '0.00',
            'featured' => '1',
            'photo' => '/img/wine/casalgarcia.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Aveleda',
                'volume' => '750ml',
                'alcohol_content' => '9,5%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Rosé MATEUS Garrafa 750ml ',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '122.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/mateus.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Rosé',
                'brand' => 'Bairrada',
                'volume' => '750ml',
                'alcohol_content' => '6%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinha Casal Mendes Verde',
            'description' => 'Um legítimo Vinho Verde português, original da região de mesmo nome. Este exemplar traz uma combinação entre as variedades de uva Azal, Perdeña, Trajadura e Loureiro, resultando em um vinho de coloração amarelo-palha com reflexos esverdeados. Seu aroma apresenta-se notavelmente frutado com notas cítricas e florais, seguido por um paladar ligeiramente acídulo, o que lhe confere um frescor com final de boca suave. Algumas combinações de harmonização com este vinho ficam a cargo de mariscos, carnes brancas, saladas leves ou massas',
            'cost_price' => '10.00',
            'sale_price' => '35.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/mendes.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Branco',
                'brand' => 'Aliança',
                'volume' => '750ml',
                'alcohol_content' => '10%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Porca de Murça',
            'description' => 'Cor vermelha granada e profunda, com traços violáceos. Aromas de morangos e framboesa dominam o nariz, com sutil baunilha e notas de chocolate ao fundo. Sabor arredondado e macio, sustentado por doces taninos. Preenche agradavelmente a boca com seu generoso frutado, fazendo deste um excelente vinho.',
            'cost_price' => '10.00',
            'sale_price' => '30.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/porca.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Tinto',
                'brand' => 'Real Cia. Velha',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Tannat é uma uva tinta da família da Vitis vinifera originária do sul da França. É usualmente utilizada em assemblage com merlot, para suavizar o vinho. É a grande uva adotada pelo Uruguai, que possui uma extensa área de vinhedos dessa casta.',
            'cost_price' => '10.00',
            'sale_price' => '34.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/tannat.jpg',
            'country' => 'França',
                'type' => 'Vinho Tinto',
                'brand' => 'Merlot',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Branco',
            'description' => 'Vinho português branco, elaborado com uvas delicadas. Possui aspecto límpido, amarelo muito claro, quase transparente, com leves raios esverdeados, e aroma muito frutado. Vinho verde branco meio seco, jovem, fresco, suave e frutado. Aconselhamos ainda como complemento de mariscos e frutos do mar, e todos os tipos de refeições de peixe. ',
            'cost_price' => '10.00',
            'sale_price' => '46.99',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/calamares.jpg',
                'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Enoport',
                'volume' => '750ml',
                'alcohol_content' => '9%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Branco',
            'description' => 'Fundada em 1870 na região dos vinhos verdes, a Aveleda é uma vinícola 100% familiar, dirigida hoje pela 5ª geração da família Guedes. Líder mundial na produção de vinho verde, a Aveleda é especialista na produção de vinhos brancos, especialmente com a nobre uva alvarinho. seus vinhos estão presente em mais de 100 países.',
            'cost_price' => '10.00',
            'sale_price' => '37.50',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/casalgarcia.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Aveleda',
                'volume' => '750ml',
                'alcohol_content' => '9,5%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Rosé',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '122.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/mateus.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Rosé',
                'brand' => 'Bairrada',
                'volume' => '750ml',
                'alcohol_content' => '6%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinha Casal Mendes Verde',
            'description' => 'Um legítimo Vinho Verde português, original da região de mesmo nome. Este exemplar traz uma combinação entre as variedades de uva Azal, Perdeña, Trajadura e Loureiro, resultando em um vinho de coloração amarelo-palha com reflexos esverdeados. Seu aroma apresenta-se notavelmente frutado com notas cítricas e florais, seguido por um paladar ligeiramente acídulo, o que lhe confere um frescor com final de boca suave. Algumas combinações de harmonização com este vinho ficam a cargo de mariscos, carnes brancas, saladas leves ou massas',
            'cost_price' => '10.00',
            'sale_price' => '35.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/mendes.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Branco',
                'brand' => 'Aliança',
                'volume' => '750ml',
                'alcohol_content' => '10%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Porca de Murça',
            'description' => 'Cor vermelha granada e profunda, com traços violáceos. Aromas de morangos e framboesa dominam o nariz, com sutil baunilha e notas de chocolate ao fundo. Sabor arredondado e macio, sustentado por doces taninos. Preenche agradavelmente a boca com seu generoso frutado, fazendo deste um excelente vinho.',
            'cost_price' => '10.00',
            'sale_price' => '30.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/porca.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Tinto',
                'brand' => 'Real Cia. Velha',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Tannat é uma uva tinta da família da Vitis vinifera originária do sul da França. É usualmente utilizada em assemblage com merlot, para suavizar o vinho. É a grande uva adotada pelo Uruguai, que possui uma extensa área de vinhedos dessa casta.',
            'cost_price' => '10.00',
            'sale_price' => '34.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/tannat.jpg',
            'country' => 'França',
                'type' => 'Vinho Tinto',
                'brand' => 'Merlot',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Branco CALAMARES',
            'description' => 'Vinho português branco, elaborado com uvas delicadas. Possui aspecto límpido, amarelo muito claro, quase transparente, com leves raios esverdeados, e aroma muito frutado. Vinho verde branco meio seco, jovem, fresco, suave e frutado. Aconselhamos ainda como complemento de mariscos e frutos do mar, e todos os tipos de refeições de peixe. ',
            'cost_price' => '10.00',
            'sale_price' => '46.99',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/calamares.jpg',
                'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Enoport',
                'volume' => '750ml',
                'alcohol_content' => '9%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Branco',
            'description' => 'Fundada em 1870 na região dos vinhos verdes, a Aveleda é uma vinícola 100% familiar, dirigida hoje pela 5ª geração da família Guedes. Líder mundial na produção de vinho verde, a Aveleda é especialista na produção de vinhos brancos, especialmente com a nobre uva alvarinho. seus vinhos estão presente em mais de 100 países.',
            'cost_price' => '10.00',
            'sale_price' => '37.50',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/casalgarcia.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Verde',
                'brand' => 'Aveleda',
                'volume' => '750ml',
                'alcohol_content' => '9,5%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Português Rosé',
            'description' => 'Vinho Mateus',
            'cost_price' => '10.00',
            'sale_price' => '122.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/mateus.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Rosé',
                'brand' => 'Bairrada',
                'volume' => '750ml',
                'alcohol_content' => '6%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinha Casal Mendes Verde',
            'description' => 'Um legítimo Vinho Verde português, original da região de mesmo nome. Este exemplar traz uma combinação entre as variedades de uva Azal, Perdeña, Trajadura e Loureiro, resultando em um vinho de coloração amarelo-palha com reflexos esverdeados. Seu aroma apresenta-se notavelmente frutado com notas cítricas e florais, seguido por um paladar ligeiramente acídulo, o que lhe confere um frescor com final de boca suave. Algumas combinações de harmonização com este vinho ficam a cargo de mariscos, carnes brancas, saladas leves ou massas',
            'cost_price' => '10.00',
            'sale_price' => '35.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/mendes.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Branco',
                'brand' => 'Aliança',
                'volume' => '750ml',
                'alcohol_content' => '10%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Vinho Porca de Murça',
            'description' => 'Cor vermelha granada e profunda, com traços violáceos. Aromas de morangos e framboesa dominam o nariz, com sutil baunilha e notas de chocolate ao fundo. Sabor arredondado e macio, sustentado por doces taninos. Preenche agradavelmente a boca com seu generoso frutado, fazendo deste um excelente vinho.',
            'cost_price' => '10.00',
            'sale_price' => '30.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/porca.jpg',
            'country' => 'Portugal',
                'type' => 'Vinho Tinto',
                'brand' => 'Real Cia. Velha',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Tannat',
            'description' => 'Tannat é uma uva tinta da família da Vitis vinifera originária do sul da França. É usualmente utilizada em assemblage com merlot, para suavizar o vinho. É a grande uva adotada pelo Uruguai, que possui uma extensa área de vinhedos dessa casta.',
            'cost_price' => '10.00',
            'sale_price' => '34.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/wine/tannat.jpg',
            'country' => 'França',
                'type' => 'Vinho Tinto',
                'brand' => 'Merlot',
                'volume' => '750ml',
                'alcohol_content' => '13%',
            'categories_id' => 1
        ]);


        // CERJEVAS

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Cerveja Radler',
            'description' => 'Cerveja Radler',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/pngbarn.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'cerveja heineken',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/heineken.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Chop Chiltern',
            'description' => 'Chop Chiltern Brewery Gold',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/chopao.png',
            'categories_id' => 2
        ]);
//4
        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Pack Bud',
            'description' => 'Fardinho de cerveja Budweiser',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/pack_bud.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma',
            'description' => 'Cerveja Brahma',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
            'photo' => '/img/beer/corona.png',
            'categories_id' => 2
        ]);
//8
        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Sahl',
            'description' => 'Cerveja Sahl',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
            'photo' => '/img/distillate/absolut.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Red Label',
            'description' => 'Whisky Red Label',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/distillate/redlabel.png',
            'categories_id' => 3
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Raspberri',
            'description' => 'Vodca Raspberri',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
            'photo' => '/img/non-alcoholic/coca.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Laranja do Bem',
            'description' => 'Suco de Laranja',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/laranja.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Dr Pepper',
            'description' => 'Lata de Dr Pepper',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
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
            'featured' => '0',
            'photo' => '/img/non-alcoholic/redbull.jpg',
            'categories_id' => 4
        ]);


        // 


    }
}
