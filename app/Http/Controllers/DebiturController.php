<?php

namespace App\Http\Controllers;

use App\Models\Debitur;

use App\Http\Requests\DebiturUpdateRequest;

use Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DebiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debitur = Debitur::all();
        return view('debitur.index', compact('debitur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = ['L' => 'Laki-laki', 'P' => 'Perempuan'];
        return view('debitur.create', compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DebiturUpdateRequest $request)
    {
        $input = $request->all();
        Debitur::create($input);
        return Redirect::route('admin.debitur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $debitur = Debitur::findOrFail($id);
        return view('debitur.show', compact('debitur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $debitur = Debitur::findOrFail($id);
        $options = ['L' => 'Laki-laki', 'P' => 'Perempuan'];
        return view('debitur.edit', compact('debitur', 'options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DebiturUpdateRequest $request, $id)
    {
        $debitur = Debitur::findOrFail($id);
        $debitur->update($request->all());
        return Redirect::route('admin.debitur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Debitur::findOrFail($id)->delete();
        return Redirect::route('admin.debitur.index');
    }
}
