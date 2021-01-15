<?php

namespace App\Http\Controllers;

use App\Models\CarDriveType;
use Illuminate\Http\Request;

class CarDriveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carDriveTypes = CarDriveType::latest()->paginate(5);

        return view('car_drive_types.index', compact('carDriveTypes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_drive_types.create');
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

        CarDriveType::create($request->all());

        return redirect()->route('car_drive_types.index')
            ->with('success', 'Car drive type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarDriveType  $carDriveType
     * @return \Illuminate\Http\Response
     */
    public function show(CarDriveType $carDriveType)
    {
        return view('car_drive_types.show', compact('carDriveType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarDriveType  $carDriveType
     * @return \Illuminate\Http\Response
     */
    public function edit(CarDriveType $carDriveType)
    {
        return view('car_drive_types.edit', compact('carDriveType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarDriveType  $carDriveType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarDriveType $carDriveType)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $carDriveType->update($request->all());

        return redirect()->route('car_drive_types.index')
            ->with('success', 'Car drive type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarDriveType  $carDriveType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarDriveType $carDriveType)
    {
        $carDriveType->delete();

        return redirect()->route('car_drive_types.index')
            ->with('success', 'Car drive type deleted successfully');
    }
}
