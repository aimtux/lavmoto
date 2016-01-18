<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Requests\MotorUpdateRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        return view('motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $options = ['Standar' => 'Standar', 'Matic' => 'Matic', 'Sport' => 'Sport'];
        return view('motor.create', compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MotorUpdateRequest $request)
    {
        $input = $request->all();
        Motor::create($input);
        return Redirect::route('admin.motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::findOrFail($id);
        return view('motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::findOrFail($id);
        $options = ['Standar' => 'Standar', 'Matic' => 'Matic', 'Sport' => 'Sport'];

        return view('motor.edit', compact('motor', 'options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MotorUpdateRequest $request, $id)
    {
        $motor = Motor::findOrFail($id);
        $motor->update($request->all());
        return Redirect::route('admin.motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Motor::findOrFail($id)->delete();
        return Redirect::route('admin.motor.index');
    }
}
