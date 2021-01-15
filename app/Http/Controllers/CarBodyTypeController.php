<?php

namespace App\Http\Controllers;

use App\Models\CarBodyType;
use Illuminate\Http\Request;

class CarBodyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carBodyTypes = CarBodyType::latest()->paginate(5);

        return view('car_body_types.index', compact('carBodyTypes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_body_types.create');
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

        CarBodyType::create($request->all());

        return redirect()->route('car_body_types.index')
            ->with('success', 'Car body type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function show(CarBodyType $carBodyType)
    {
        return view('car_body_types.show', compact('carBodyType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function edit(CarBodyType $carBodyType)
    {
        return view('car_body_types.edit', compact('carBodyType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarBodyType $carBodyType)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $carBodyType->update($request->all());

        return redirect()->route('car_body_types.index')
            ->with('success', 'Car body type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarBodyType  $carBodyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarBodyType $carBodyType)
    {
        $carBodyType->delete();

        return redirect()->route('car_body_types.index')
            ->with('success', 'Car body type deleted successfully');
    }
}
