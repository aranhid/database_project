<?php

namespace App\Http\Controllers;

use App\Models\CarManufacturer;
use Illuminate\Http\Request;

class CarManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carManufacturers = CarManufacturer::latest()->paginate(5);

        return view('car_manufacturers.index', compact('carManufacturers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        CarManufacturer::create($request->all());

        return redirect()->route('car_manufacturers.index')
            ->with('success', 'Car manufacturer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(CarManufacturer $carManufacturer)
    {
        return view('car_manufacturers.show', compact('carManufacturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(CarManufacturer $carManufacturer)
    {
        return view('car_manufacturers.edit', compact('carManufacturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarManufacturer $carManufacturer)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $carManufacturer->update($request->all());

        return redirect()->route('car_manufacturers.index')
            ->with('success', 'Car manufacturer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarManufacturer $carManufacturer)
    {
        $carManufacturer->delete();

        return redirect()->route('car_manufacturers.index')
            ->with('success', 'Car manufacturer deleted successfully');
    }
}
