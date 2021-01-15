<?php

namespace App\Http\Controllers;

use App\Models\CarState;
use Illuminate\Http\Request;

class CarStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carStates = CarState::latest()->paginate(5);

        return view('car_states.index', compact('carStates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_states.create');
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

        CarState::create($request->all());

        return redirect()->route('car_states.index')
            ->with('success', 'Car state created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarState  $carState
     * @return \Illuminate\Http\Response
     */
    public function show(CarState $carState)
    {
        return view('car_states.show', compact('carState'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarState  $carState
     * @return \Illuminate\Http\Response
     */
    public function edit(CarState $carState)
    {
        return view('car_states.edit', compact('carState'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarState  $carState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarState $carState)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $carState->update($request->all());

        return redirect()->route('car_states.index')
            ->with('success', 'Car state updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarState  $carState
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarState $carState)
    {
        $carState->delete();

        return redirect()->route('car_states.index')
            ->with('success', 'Car state deleted successfully');
    }
}
