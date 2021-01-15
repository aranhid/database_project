<?php

namespace App\Http\Controllers;

use App\Models\CarBodyColor;
use Illuminate\Http\Request;

class CarBodyColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carBodyColors = CarBodyColor::latest()->paginate(5);

        return view('car_body_colors.index', compact('carBodyColors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_body_colors.create');
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

        CarBodyColor::create($request->all());

        return redirect()->route('car_body_colors.index')
            ->with('success', 'Car body color created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarBodyColor  $carBodyColor
     * @return \Illuminate\Http\Response
     */
    public function show(CarBodyColor $carBodyColor)
    {
        return view('car_body_colors.show', compact('carBodyColor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarBodyColor  $carBodyColor
     * @return \Illuminate\Http\Response
     */
    public function edit(CarBodyColor $carBodyColor)
    {
        return view('car_body_colors.edit', compact('carBodyColor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarBodyColor  $carBodyColor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarBodyColor $carBodyColor)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $carBodyColor->update($request->all());

        return redirect()->route('car_body_colors.index')
            ->with('success', 'Car body color updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarBodyColor  $carBodyColor
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarBodyColor $carBodyColor)
    {
        $carBodyColor->delete();

        return redirect()->route('car_body_colors.index')
            ->with('success', 'Car body color deleted successfully');
    }
}
