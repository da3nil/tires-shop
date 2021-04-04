<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Tire;
use App\TireDiameter;
use App\TireProfile;
use App\TireSeason;
use App\TireWidth;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $tires = Tire::with('brand')->latest()->take(4)->get();

        $tireWidths = TireWidth::all('value', 'id')->sortBy('value');
        $tireDiameters = TireDiameter::all('value', 'id')->sortBy('value');
        $tireProfiles = TireProfile::all('value', 'id')->sortBy('value');
        $tireSeasons = TireSeason::all('value', 'id')->sortBy('value');
        $tireBrands = Brand::all();

        $searchInfo = compact(
            'tireBrands',
            'tireWidths',
            'tireProfiles',
            'tireDiameters',
            'tireSeasons'
        );

        return view('welcome', compact('tires', 'searchInfo'));
    }
}
