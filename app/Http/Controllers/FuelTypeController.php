<?php

namespace App\Http\Controllers;

use App\Models\FuelType;
use Illuminate\Http\Request;

class FuelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuelTypes = FuelType::latest()->paginate(5);

        return view('fuel_types.index', compact('fuelTypes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fuel_types.create');
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

        FuelType::create($request->all());

        return redirect()->route('fuel_types.index')
            ->with('success', 'Fuel type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function show(FuelType $fuelType)
    {
        return view('fuel_types.show', compact('fuelType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function edit(FuelType $fuelType)
    {
        return view('fuel_types.edit', compact('fuelType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuelType $fuelType)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $fuelType->update($request->all());

        return redirect()->route('fuel_types.index')
            ->with('success', 'Fuel type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuelType $fuelType)
    {
        $fuelType->delete();

        return redirect()->route('fuel_types.index')
            ->with('success', 'Fuel type deleted successfully');
    }
}
