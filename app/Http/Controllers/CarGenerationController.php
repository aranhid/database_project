<?php

namespace App\Http\Controllers;

use App\Models\CarGeneration;
use Illuminate\Http\Request;

class CarGenerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carGenerations = CarGeneration::latest()->paginate(5);

        return view('car_generations.index', compact('carGenerations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_generations.create');
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
            'model_id' => 'required',
        ]);

        CarGeneration::create($request->all());

        return redirect()->route('car_generations.index')
            ->with('success', 'Car generation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarGeneration  $carGeneration
     * @return \Illuminate\Http\Response
     */
    public function show(CarGeneration $carGeneration)
    {
        return view('car_generations.show', compact('carGeneration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarGeneration  $carGeneration
     * @return \Illuminate\Http\Response
     */
    public function edit(CarGeneration $carGeneration)
    {
        return view('car_generations.edit', compact('carGeneration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarGeneration  $carGeneration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarGeneration $carGeneration)
    {
        $request->validate([
            'name' => 'required',
            'model_id' => 'required',
        ]);
        $carGeneration->update($request->all());

        return redirect()->route('car_generations.index')
            ->with('success', 'Car generation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarGeneration  $carGeneration
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarGeneration $carGeneration)
    {
        $carGeneration->delete();

        return redirect()->route('car_generations.index')
            ->with('success', 'Car generation deleted successfully');
    }
}
