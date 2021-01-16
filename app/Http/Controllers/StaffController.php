<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

use App\Models\Position;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::latest()->paginate(5);

        return view('staff.index', compact('staff'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        return view('staff.create', compact('positions'));
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
            'firstname' => 'required',
            'secondname' => 'required',
            'lastname' => 'required',
            'position_id' => 'required',
            'work_phone' => 'required',
            'personal_phone' => 'required',
            'birth_date' => 'required',
        ]);

        Staff::create($request->all());

        return redirect()->route('staff.index')
            ->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $positions = Position::all();
        return view('staff.edit', compact(['staff', 'positions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'firstname' => 'required',
            'secondname' => 'required',
            'lastname' => 'required',
            'position_id' => 'required',
            'work_phone' => 'required',
            'personal_phone' => 'required',
            'birth_date' => 'required',
        ]);
        $staff->update($request->all());

        return redirect()->route('staff.index')
            ->with('success', 'Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index')
            ->with('success', 'Staff deleted successfully');
    }
}
