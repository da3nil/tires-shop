<?php

use Illuminate\Database\Seeder;

use App\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $data = [
            ['name' => 'Achilles'],
            ['name' => 'Brasa'],
            ['name' => 'Cooper'],
            ['name' => 'Goodyear'],
            ['name' => 'Headway'],
        ];

        foreach ($data as $item) {
            Brand::create($item)->save();
        }

        $data = [
            ['name' => 'Goodyear UltraGrip Ice Arctic 185/65 R15 88T'],
            ['name' => 'Brasa'],
            ['name' => 'Cooper'],
            ['name' => 'Goodyear'],
            ['name' => 'Headway'],
        ];
    }
}
