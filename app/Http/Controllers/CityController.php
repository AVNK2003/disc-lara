<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Traits\MainTrait;
use Illuminate\Http\Request;

class CityController extends Controller
{
    use MainTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.city.cities', [
            'cities' => City::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.city.city-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city = new City();
        $city->fill($request->all())->save();
        return redirect()->route('city.index')->withSuccess('Город успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return view('admin.city.city-edit', [
            'city' => $city,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
/*        $city->name = $request->name;
        $city->eng = $request->eng;
        $city->save();*/
        $city->fill($request->all())->save();

        return redirect()->route('city.index')->with('success', 'Город был успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('city.index')->with('success', 'Город был успешно удален');
    }

    public function showCity(City $city)
    {
        $companies=$city->companies->where('active');
        return view('index', [
            'title' => '- '.$city->name,
            'companies' => $companies,
            'mapData' => $this->mapData($city),
        ]);
    }
}
