<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tire;
use Faker\Generator as Faker;

$factory->define(Tire::class, function (Faker $faker) {
    $data = [
        ['name' => 'UltraGrip Ice Arctic', 'brand_id' => 4],
        ['name' => 'Ventus V12', 'brand_id' => 5],
        ['name' => 'Ecopia EP150', 'brand_id' => 3],
        ['name' => 'Blizzak Revo GZ', 'brand_id' => 3],
        ['name' => 'MP 30 Sibir Ice 2', 'brand_id' => 3],
    ];

    $seasons = ['Лето', 'Зима'];

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

    if ($faker->numberBetween(0,1) === 1) {
        $b = "C";
    } else {
        $b = "";
    }

    return [
        'name'      => $data[$rnd - 1]['name'],
        'brand_id'  => $faker->numberBetween(1,5),
        'width'     => $faker->randomElement($width),
        'profile'   => $faker->randomElement($profile),
        'diameter'  => 'R' . $faker->numberBetween(12, 23) . $b,
        'season'    => $seasons[$faker->numberBetween(0, 1)],
        'price'     => $faker->numberBetween(3000, 10000),
        'img'       => 'images/tire' . $faker->numberBetween(1,3) . '.jpg'
    ];
});
