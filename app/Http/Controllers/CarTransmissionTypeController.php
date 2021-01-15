<?php

namespace App\Http\Controllers;

use App\Models\CarTransmissionType;
use Illuminate\Http\Request;

class CarTransmissionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carTransmissionTypes = CarTransmissionType::latest()->paginate(5);

        return view('car_transmission_types.index', compact('carTransmissionTypes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_transmission_types.create');
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

        CarTransmissionType::create($request->all());

        return redirect()->route('car_transmission_types.index')
            ->with('success', 'Car transmission type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarTransmissionType  $carTransmissionType
     * @return \Illuminate\Http\Response
     */
    public function show(CarTransmissionType $carTransmissionType)
    {
        return view('car_transmission_types.show', compact('carTransmissionType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarTransmissionType  $carTransmissionType
     * @return \Illuminate\Http\Response
     */
    public function edit(CarTransmissionType $carTransmissionType)
    {
        return view('car_transmission_types.edit', compact('carTransmissionType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarTransmissionType  $carTransmissionType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarTransmissionType $carTransmissionType)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $carTransmissionType->update($request->all());

        return redirect()->route('car_transmission_types.index')
            ->with('success', 'Car transmission type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarTransmissionType  $carTransmissionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarTransmissionType $carTransmissionType)
    {
        $carTransmissionType->delete();

        return redirect()->route('car_transmission_types.index')
            ->with('success', 'Car transmission type deleted successfully');
    }
}
