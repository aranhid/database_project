<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carModels = CarModel::latest()->paginate(5);

        return view('car_models.index', compact('carModels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_models.create');
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
            'manufacturer_id' => 'required',
            'name' => 'required',
        ]);

        CarModel::create($request->all());

        return redirect()->route('car_models.index')
            ->with('success', 'CarModel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $car_model
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $car_model)
    {
        return view('car_models.show', compact('car_model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModel  $car_model
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $car_model)
    {
        return view('car_models.edit', compact('car_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarModel  $car_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModel $car_model)
    {
        $request->validate([
            'manufacturer_id' => 'required',
            'name' => 'required',
        ]);
        $car_model->update($request->all());

        return redirect()->route('car_models.index')
            ->with('success', 'CarModel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $car_model)
    {
        $car_model->delete();

        return redirect()->route('car_models.index')
            ->with('success', 'Car model deleted successfully');
    }
}
