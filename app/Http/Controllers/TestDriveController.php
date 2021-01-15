<?php

namespace App\Http\Controllers;

use App\Models\TestDrive;
use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Staff;
use App\Models\Car;

class TestDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testDrives = TestDrive::latest()->paginate(5);

        return view('test_drives.index', compact('testDrives'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $managers = Staff::all();
        $cars = Car::all();
        return view('test_drives.create', compact(['clients', 'managers', 'cars']));
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
            'car_id' => 'required',
            'manager_id' => 'required',
            'client_id' => 'required',
            'planned_time' => 'required',
            'status' => 'required',
        ]);

        TestDrive::create($request->all());

        return redirect()->route('test_drives.index')
            ->with('success', 'Test drive created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function show(TestDrive $testDrive)
    {
        return view('test_drives.show', compact('testDrive'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function edit(TestDrive $testDrive)
    {
        $clients = Client::all();
        $managers = Staff::all();
        $cars = Car::all();
        return view('test_drives.edit', compact(['testDrive', 'clients', 'managers', 'cars']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestDrive $testDrive)
    {
        $request->validate([
            'car_id' => 'required',
            'manager_id' => 'required',
            'client_id' => 'required',
            'planned_time' => 'required',
            'status' => 'required',
        ]);
        $testDrive->update($request->all());

        return redirect()->route('test_drives.index')
            ->with('success', 'Test drive updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestDrive $testDrive)
    {
        $testDrive->delete();

        return redirect()->route('test_drives.index')
            ->with('success', 'Test drive deleted successfully');
    }
}
