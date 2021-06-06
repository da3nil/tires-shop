<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Tire;
use App\TireDiameter;
use App\TireProfile;
use App\TireSeason;
use App\TireWidth;
use Illuminate\Http\Request;

class TireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $tires = Tire::with('brand')->paginate(16)->appends(request()->query());;

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

        return view('tires', compact('tires', 'searchInfo'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|int
     */
    public function search(Request $request)
    {
        $brand_id = $request->get('brand');
        $width_id = $request->get('width');
        $profile_id = $request->get('profile');
        $diameter_id = $request->get('diameter');
        $season_id = $request->get('season');

        $brand_val = Brand::find($brand_id);
        $width_val = TireWidth::find($width_id);
        $profile_val = TireProfile::find($profile_id);
        $diameter_val = TireDiameter::find($diameter_id);
        $season_val = TireSeason::find($season_id);

        $query = Tire::query();

        if ($brand_val !== null) {
            $query->where('brand_id', $brand_id);
        }

        if ($profile_val !== null) {
            $query->where('profile', $profile_val->value);
        }

        if ($width_val !== null) {
            $query->where('width', $width_val->value);
        }

        if ($diameter_val !== null) {
            $query->where('diameter', $diameter_val->value);
        }

        if ($season_val !== null) {
            $query->where('season', $season_val->value);
        }

        $tires = $query->with('brand')->paginate(16)->appends(request()->query());

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

        return view('tires', compact('tires', 'searchInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $item = Tire::findOrFail($id);

        return view('tires.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
