<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tire;
use Faker\Generator as Faker;

$factory->define(
    Tire::class,
    function (Faker $faker) {
        $data = [
            ['name' => 'UltraGrip Ice Arctic', 'brand_id' => 4],
            ['name' => 'Ventus V12', 'brand_id' => 5],
            ['name' => 'Ecopia EP150', 'brand_id' => 3],
            ['name' => 'Blizzak Revo GZ', 'brand_id' => 3],
            ['name' => 'MP 30 Sibir Ice 2', 'brand_id' => 3],
        ];

        $seasons = ['Лето', 'Зима', 'Зима липучка'];

        $rnd = random_int(1, 3);

        /*
    <select name="width">
    <option value="" selected="selected">---</option>

    </select>
         */

        $profile = [
            '9.5',
            '10.5',
            '11.5',
            '12.5',
            '25',
            '30',
            '35',
            '40',
            '45',
            '50',
            '55',
            '60',
            '65',
            '70',
            '75',
            '80',
            '85',
        ];

        $width = [
            '30',
            '31',
            '32',
            '33',
            '35',
            '37',
            '135',
            '145',
            '155',
            '165',
            '175',
            '185',
            '195',
            '205',
            '215',
            '225',
            '235',
            '245',
            '255',
            '265',
            '275',
            '285',
            '295',
            '305',
            '315',
            '325',
            '335',
            '345',
            '355',
        ];

        if ($faker->numberBetween(0, 1) === 1) {
            $b = "C";
        } else {
            $b = "";
        }

        $brand_id = $faker->numberBetween(1, 5);
        $brand_name = \App\Brand::findOrFail($brand_id)->name;
        $name = $data[$rnd - 1]['name'];
        $qwidth = $faker->randomElement($width);
        $qprofile = $faker->randomElement($profile);
        $diameter = 'R'.$faker->numberBetween(12, 23).$b;

        $content = [
            "Российская компания $brand_name уверенно занимает прочные позиции в мире автобизнеса. Она предлагает недорогие шины, сохраняя конкурентоспособное качество. Модель $name $qwidth/$qprofile $diameter не стала исключением. Эти покрышки неизменно пользуются популярностью. Их часто выбирают и  в Уфе, что доказывают отзывы.",
            "Самые современные технологии и материалы применяются при производстве резины $name в Уфе. Благодаря специально разработанному рисунку протектора и определенному составу резины, шины $name отлично держат дорогу.
                Кроме этого, резина $name $qwidth/$qprofile $diameter способствует подавлению шума и обеспечению высокого уровня безопасности.",
            "Асимметричный дизайн обновленной линейки автопокрышек $name российского бренда $brand_name улучшает ходовые характеристики автомобиля. Стабилизированы скоростные параметры и прямолинейная курсовая устойчивость на влажном или скользком дорожном полотне. За сцепление с покрытием, разгон и торможение отвечают продуманные и усовершенствованные компоненты резиновой смеси.",
            "Высокоэффективная резина $name $qwidth/$qprofile $diameter в Уфе предназначена для автовладельцев, которые любят скорость. Функциональные шины американского производителя демонстрируют ультравысокую производительность при любых летних климатических условиях. Производитель гарантирует полную безопасность движения, как на сухом, так и мокром покрытии."

        ];


        return [
            'name' => $name,
            'content' => $faker->randomElement($content),
            'brand_id' => $brand_id,
            'width' => $qwidth,
            'profile' => $qprofile,
            'diameter' => $diameter,
            'season' => $seasons[$faker->numberBetween(0, 2)],
            'price' => $faker->numberBetween(3000, 10000),
            'img' => 'images/tire'.$faker->numberBetween(1, 3).'.jpg'
        ];
    }
);
