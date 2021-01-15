<?php

namespace App\Http\Controllers;

use App\Models\CarStatus;
use Illuminate\Http\Request;

class CarStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carStatuses = CarStatus::latest()->paginate(5);

        return view('car_statuses.index', compact('carStatuses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_statuses.create');
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

        CarStatus::create($request->all());

        return redirect()->route('car_statuses.index')
            ->with('success', 'Car status created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function show(CarStatus $carStatus)
    {
        return view('car_statuses.show', compact('carStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(CarStatus $carStatus)
    {
        return view('car_statuses.edit', compact('carStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarStatus $carStatus)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $carStatus->update($request->all());

        return redirect()->route('car_statuses.index')
            ->with('success', 'Car status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarStatus $carStatus)
    {
        $carStatus->delete();

        return redirect()->route('car_statuses.index')
            ->with('success', 'Car status deleted successfully');
    }
}
