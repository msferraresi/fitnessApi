<?php

namespace App\Http\Controllers;

use App\Exercises;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Exercises::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Exercises::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exercises  $exercises
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Exercises::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exercises  $exercises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exercise = Exercises::findOrFail($id);
        $exercise->update($request->all());
        return $exercise;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exercises  $exercises
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercises::findOrFail($id);
        $exercise->delete();
        return 204;
    }
}
