<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\CarManufacturer;
use App\Models\CarModel;
use App\Models\CarGeneration;
use App\Models\CarBodyType;
use App\Models\CarBodyColor;
use App\Models\CarDriveType;
use App\Models\CarTransmissionType;
use App\Models\FuelType;
use App\Models\CarState;
use App\Models\CarStatus;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::latest()->paginate(5);

        return view('cars.index', compact('cars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = CarManufacturer::all();
        $models = CarModel::all();
        $generations = CarGeneration::all();
        $bodyTypes = CarBodyType::all();
        $bodyColors = CarBodyColor::all();
        $driveTypes = CarDriveType::all();
        $transmissionTypes = CarTransmissionType::all();
        $fuelTypes = FuelType::all();
        $states = CarState::all();
        $statuses = CarStatus::all();
        return view('cars.create', compact([
            'manufacturers',
            'models',
            'generations',
            'bodyTypes',
            'bodyColors',
            'driveTypes',
            'transmissionTypes',
            'fuelTypes',
            'states',
            'statuses',
            ]));
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
            'model_id' => 'required',
            'generation_id' => 'required',
            'body_type_id' => 'required',
            'body_color_id' => 'required',
            'drive_type_id' => 'required',
            'transmission_type_id' => 'required',
            'fuel_type_id' => 'required',
            'assembly_date' => 'required',
            'price' => 'required',
            'status_id' => 'required',
            'state_id' => 'required',
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')
            ->with('success', 'Car body type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $manufacturers = CarManufacturer::all();
        $models = CarModel::all();
        $generations = CarGeneration::all();
        $bodyTypes = CarBodyType::all();
        $bodyColors = CarBodyColor::all();
        $driveTypes = CarDriveType::all();
        $transmissionTypes = CarTransmissionType::all();
        $fuelTypes = FuelType::all();
        $states = CarState::all();
        $statuses = CarStatus::all();
        return view('cars.edit', compact([
            'car',
            'manufacturers',
            'models',
            'generations',
            'bodyTypes',
            'bodyColors',
            'driveTypes',
            'transmissionTypes',
            'fuelTypes',
            'states',
            'statuses',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'manufacturer_id' => 'required',
            'model_id' => 'required',
            'generation_id' => 'required',
            'body_type_id' => 'required',
            'body_color_id' => 'required',
            'drive_type_id' => 'required',
            'transmission_type_id' => 'required',
            'fuel_type_id' => 'required',
            'assembly_date' => 'required',
            'price' => 'required',
            'status_id' => 'required',
            'state_id' => 'required',
        ]);
        $car->update($request->all());

        return redirect()->route('cars.index')
            ->with('success', 'Car body type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')
            ->with('success', 'Car body type deleted successfully');
    }
}
