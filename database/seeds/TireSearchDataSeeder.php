<?php

use Illuminate\Database\Seeder;

use App\TireWidth;
use App\TireProfile;
use App\TireDiameter;
use App\TireSeason;

class TireSearchDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tires = \App\Tire::all();

        foreach ($tires as $tire) {
            if (!TireWidth::where('value', $tire->width . '')->exists()) {
                TireWidth::create(['value' => $tire->width]);
            }

            if (!TireProfile::where('value', $tire->profile . '')->exists()) {
                TireProfile::create(['value' => $tire->profile]);
            }

            if (!TireDiameter::where('value', $tire->diameter . '')->exists()) {
                TireDiameter::create(['value' => $tire->diameter]);
            }

            if (!TireSeason::where('value', $tire->season . '')->exists()) {
                TireSeason::create(['value' => $tire->season]);
            }
        }
    }
}
