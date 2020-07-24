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
            'name' => 'Vinho Tannat seco 750ml',
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
            'name' => 'Vinho Branco Casal Garcia Vinho Verde 750ml',
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
            'name' => 'Vinho Português Rosé MATEUS 750ml ',
            'description' => 'MATEUS ROSÉ é um vinho leve, fresco, jovem e ligeiramente «pétillant». A sua qualidade, extrema versatilidade e estilo consistente tornam-o o vinho ideal para acompanhar os bons momentos da vida. É um vinho rosé de cor muito apelativa e brilhante. Globalmente, é um vinho fresco e sedutor com boa intensidade aromática e toda a jovialidade dos vinhos jovens. Na boca, é um vinho muito equilibrado e tentador, brilhantemente complementado por um final suave e ligeiramente pétillant. ',
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
            'name' => 'Vinho Tannat seco 750ml',
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
            'name' => 'Vinho Branco CALAMARES 750ml',
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
            'name' => 'Vinho Casal Garcia Vinho Verde 750ml',
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
            'description' => 'MATEUS ROSÉ é um vinho leve, fresco, jovem e ligeiramente «pétillant». A sua qualidade, extrema versatilidade e estilo consistente tornam-o o vinho ideal para acompanhar os bons momentos da vida. É um vinho rosé de cor muito apelativa e brilhante. Globalmente, é um vinho fresco e sedutor com boa intensidade aromática e toda a jovialidade dos vinhos jovens. Na boca, é um vinho muito equilibrado e tentador, brilhantemente complementado por um final suave e ligeiramente pétillant. ',
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
            'name' => 'Vinho Tannat seco 750ml',
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
            'name' => 'Vinho Português CALAMARES Garrafa 750ml',
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
            'name' => 'Vinho Branco Casal Garcia Vinho Verde 750ml',
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
            'name' => 'Vinho Português Rosé MATEUS Garrafa 750ml ',
            'description' => 'MATEUS ROSÉ é um vinho leve, fresco, jovem e ligeiramente «pétillant». A sua qualidade, extrema versatilidade e estilo consistente tornam-o o vinho ideal para acompanhar os bons momentos da vida. É um vinho rosé de cor muito apelativa e brilhante. Globalmente, é um vinho fresco e sedutor com boa intensidade aromática e toda a jovialidade dos vinhos jovens. Na boca, é um vinho muito equilibrado e tentador, brilhantemente complementado por um final suave e ligeiramente pétillant. ',
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
            'name' => 'Vinho Tannat 750ml',
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
            'name' => 'Vinho Português CALAMARES Garrafa 750ml',
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
            'name' => 'Vinho Casal Garcia Vinho Verde Garrafa 750ml',
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
            'name' => 'Vinho Português Rosé MATEUS Garrafa 750ml ',
            'description' => 'MATEUS ROSÉ é um vinho leve, fresco, jovem e ligeiramente «pétillant». A sua qualidade, extrema versatilidade e estilo consistente tornam-o o vinho ideal para acompanhar os bons momentos da vida. É um vinho rosé de cor muito apelativa e brilhante. Globalmente, é um vinho fresco e sedutor com boa intensidade aromática e toda a jovialidade dos vinhos jovens. Na boca, é um vinho muito equilibrado e tentador, brilhantemente complementado por um final suave e ligeiramente pétillant. ',
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
            'name' => 'Vinho Tannat garrafa 750ml',
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
            'name' => 'Skol Pilsen',
            'description' => 'Skol Pilsen é uma típica cerveja clara, com aroma refinado e sabor leve e suave. Seu teor de amargor é menos acentuado e seu teor alcoólico é médio.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/pngbarn.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma Chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/heineken.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Chopp Chiltern',
            'description' => 'O Chopp Chiltern é a nossa Cerveja não pasteurizada. Ou seja: está sempre fresco no bar ou em Casa. Seu sabor é encorpado, o aroma neutro e seu teor de amargor é menos acentuado. ',
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
            'name' => 'Budweiser',
            'description' => 'A cerveja Budweiser é uma standard American lager de sabor leve, cor clara e aroma discreto. Maturada com madeira Beechwood, pra um sabor marcante no começo e suave no final. Garanta sua Budweiser em lata, long neck ou garrafa.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/pack_bud.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Asahi',
            'description' => 'A cerveja Asahi Super Dry é uma cerveja japonesa, de coloração amarelo palha, límpida, com boa formação de espuma branca. No aroma, apresenta notas de pão, fermento e toques florais. Possui corpo leve, alta carbonatação, baixo amargor e final refrescante.',
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
            'description' => 'A cerveja Corona Extra é uma das melhores e mais vendidas cervejas mexicanas. Popularmente conhecida a Corona Extra é uma das mais comercializadas no mundo, disponível em mais de 150 países. Fabricada pela primeira vez em 1925 pela Cerveceria Modelo, atualmente pertence ao grupo AB InBev. Comumente consumida com uma fatia de limão no gargalo, é uma cerveja leve, resfrescante, com 4.50% de teor alcoólico.',
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
            'name' => 'Asahi',
            'description' => 'A cerveja Asahi Super Dry é uma cerveja japonesa, de coloração amarelo palha, límpida, com boa formação de espuma branca. No aroma, apresenta notas de pão, fermento e toques florais. Possui corpo leve, alta carbonatação, baixo amargor e final refrescante.',
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
            'description' => 'Criada na Holanda em 1873, Heineken é uma cerveja super premium puro malte, elaborada com ingredientes 100% naturais e sem adição de conservantes. Permanece 35 dias em processo de maturação e fermentação, ou seja, mais do dobro de tempo da maioria das cervejas. Todo esse cuidado se reflete no perfeito equilíbrio de sabores e aromas.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/heineken.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma Chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol Pilsen',
            'description' => 'Skol Pilsen é uma típica cerveja clara, com aroma refinado e sabor leve e suave. Seu teor de amargor é menos acentuado e seu teor alcoólico é médio.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Budweiser',
            'description' => 'A cerveja Budweiser é uma standard American lager de sabor leve, cor clara e aroma discreto. Maturada com madeira Beechwood, pra um sabor marcante no começo e suave no final. Garanta sua Budweiser em lata, long neck ou garrafa.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/bud.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma Chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol Pilsen',
            'description' => 'Skol Pilsen é uma típica cerveja clara, com aroma refinado e sabor leve e suave. Seu teor de amargor é menos acentuado e seu teor alcoólico é médio.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma Chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol Pilsen',
            'description' => 'Skol Pilsen é uma típica cerveja clara, com aroma refinado e sabor leve e suave. Seu teor de amargor é menos acentuado e seu teor alcoólico é médio.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Budweiser',
            'description' => 'A cerveja Budweiser é uma standard American lager de sabor leve, cor clara e aroma discreto. Maturada com madeira Beechwood, pra um sabor marcante no começo e suave no final. Garanta sua Budweiser em lata, long neck ou garrafa.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/bud.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma Chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Asahi',
            'description' => 'A cerveja Asahi Super Dry é uma cerveja japonesa, de coloração amarelo palha, límpida, com boa formação de espuma branca. No aroma, apresenta notas de pão, fermento e toques florais. Possui corpo leve, alta carbonatação, baixo amargor e final refrescante.',
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
            'description' => 'A cerveja Corona Extra é uma das melhores e mais vendidas cervejas mexicanas. Popularmente conhecida a Corona Extra é uma das mais comercializadas no mundo, disponível em mais de 150 países. Fabricada pela primeira vez em 1925 pela Cerveceria Modelo, atualmente pertence ao grupo AB InBev. Comumente consumida com uma fatia de limão no gargalo, é uma cerveja leve, resfrescante, com 4.50% de teor alcoólico.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/corona.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Asahi',
            'description' => 'A cerveja Asahi Super Dry é uma cerveja japonesa, de coloração amarelo palha, límpida, com boa formação de espuma branca. No aroma, apresenta notas de pão, fermento e toques florais. Possui corpo leve, alta carbonatação, baixo amargor e final refrescante.',
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
            'description' => 'Criada na Holanda em 1873, Heineken é uma cerveja super premium puro malte, elaborada com ingredientes 100% naturais e sem adição de conservantes. Permanece 35 dias em processo de maturação e fermentação, ou seja, mais do dobro de tempo da maioria das cervejas. Todo esse cuidado se reflete no perfeito equilíbrio de sabores e aromas.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/heineken.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma Chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/brahma600.png',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Skol Pilsen',
            'description' => 'Skol Pilsen é uma típica cerveja clara, com aroma refinado e sabor leve e suave. Seu teor de amargor é menos acentuado e seu teor alcoólico é médio.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/skol.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Budweiser',
            'description' => 'A cerveja Budweiser é uma standard American lager de sabor leve, cor clara e aroma discreto. Maturada com madeira Beechwood, pra um sabor marcante no começo e suave no final. Garanta sua Budweiser em lata, long neck ou garrafa.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/beer/bud.jpg',
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Brahma Chopp',
            'description' => 'Não é à toa que a Brahma Chopp tem esse nome. Tanto ela quanto o Chopp Brahma nascem da mesma fonte, têm o mesmo processo de fabricação e só são separados no envasamento. Por isso ela é tão saborosa e refrescante, como o verdadeiro chopp.',
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
            'description' => 'Coca-Cola é um refrigerante carbonado vendido em lojas, restaurantes, mercados e máquinas de venda automática em todo o mundo. Ele é produzido pela The Coca-Cola Company, sediada em Atlanta, Estados Unidos, e é muitas vezes referido apenas como Coca-Cola (a marca registrada da empresa Coca-Cola nos Estados Unidos desde 27 de março de 1944). Originalmente concebida como um remédio patenteado quando foi inventada no final do século XIX por John Pemberton, a Coca-Cola foi comprada pelo empresário Asa Griggs Candler, cujas táticas publicitárias levaram a bebida ao domínio do mercado de refrigerantes no mundo ao longo do século XX.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/coca.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'A marca Fanta foi criada na Alemanha, nos anos 40, e hoje é vendida em 187 países, sendo líder entre os refrigerantes dos sabores Laranja e Uva. Em 2012, o portfólio brasileiro foi diversificado com o sabor Maracujá, após uma pesquisa realizada com consumidores.
            Para quem procura as opções com zero açúcar, elas estão disponíveis nos sabores laranja e uva.            
            Disponível em garrafas PET, garrafas de vidro e em lata; em tamanhos que variam de 250 ml a PET 3L, e na versão Zero em lata 350 ml e garrafa PET 2L.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/fanta.jpg',
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
            'description' => 'Coca-Cola é um refrigerante carbonado vendido em lojas, restaurantes, mercados e máquinas de venda automática em todo o mundo. Ele é produzido pela The Coca-Cola Company, sediada em Atlanta, Estados Unidos, e é muitas vezes referido apenas como Coca-Cola (a marca registrada da empresa Coca-Cola nos Estados Unidos desde 27 de março de 1944). Originalmente concebida como um remédio patenteado quando foi inventada no final do século XIX por John Pemberton, a Coca-Cola foi comprada pelo empresário Asa Griggs Candler, cujas táticas publicitárias levaram a bebida ao domínio do mercado de refrigerantes no mundo ao longo do século XX.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/coca.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Fanta é uma marca de refrigerantes, que detém uma linha variada de produtos e que pertence à The Coca-Cola Company. Criada e lançada na Alemanha Nazi, durante a Segunda Guerra Mundial, atualmente é comercializada em 188 países.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/fanta.jpg',
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
            'description' => 'Fanta é uma marca de refrigerantes, que detém uma linha variada de produtos e que pertence à The Coca-Cola Company. Criada e lançada na Alemanha Nazi, durante a Segunda Guerra Mundial, atualmente é comercializada em 188 países.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/fanta.jpg',
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
            'description' => 'Coca-Cola é um refrigerante carbonado vendido em lojas, restaurantes, mercados e máquinas de venda automática em todo o mundo. Ele é produzido pela The Coca-Cola Company, sediada em Atlanta, Estados Unidos, e é muitas vezes referido apenas como Coca-Cola (a marca registrada da empresa Coca-Cola nos Estados Unidos desde 27 de março de 1944). Originalmente concebida como um remédio patenteado quando foi inventada no final do século XIX por John Pemberton, a Coca-Cola foi comprada pelo empresário Asa Griggs Candler, cujas táticas publicitárias levaram a bebida ao domínio do mercado de refrigerantes no mundo ao longo do século XX.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/coca.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Fanta é uma marca de refrigerantes, que detém uma linha variada de produtos e que pertence à The Coca-Cola Company. Criada e lançada na Alemanha Nazi, durante a Segunda Guerra Mundial, atualmente é comercializada em 188 países.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/fanta.jpg',
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
            'description' => 'Coca-Cola é um refrigerante carbonado vendido em lojas, restaurantes, mercados e máquinas de venda automática em todo o mundo. Ele é produzido pela The Coca-Cola Company, sediada em Atlanta, Estados Unidos, e é muitas vezes referido apenas como Coca-Cola (a marca registrada da empresa Coca-Cola nos Estados Unidos desde 27 de março de 1944). Originalmente concebida como um remédio patenteado quando foi inventada no final do século XIX por John Pemberton, a Coca-Cola foi comprada pelo empresário Asa Griggs Candler, cujas táticas publicitárias levaram a bebida ao domínio do mercado de refrigerantes no mundo ao longo do século XX.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/coca.png',
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'available' => '1',
            'name' => 'Fanta',
            'description' => 'Fanta é uma marca de refrigerantes, que detém uma linha variada de produtos e que pertence à The Coca-Cola Company. Criada e lançada na Alemanha Nazi, durante a Segunda Guerra Mundial, atualmente é comercializada em 188 países.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/fanta.jpg',
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
            'description' => 'Fanta é uma marca de refrigerantes, que detém uma linha variada de produtos e que pertence à The Coca-Cola Company. Criada e lançada na Alemanha Nazi, durante a Segunda Guerra Mundial, atualmente é comercializada em 188 países.',
            'cost_price' => '10.00',
            'sale_price' => '20.00',
            'discount' => '0.00',
            'featured' => '0',
            'photo' => '/img/non-alcoholic/fanta.jpg',
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
