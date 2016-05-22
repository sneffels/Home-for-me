<?php

namespace App\Http\Controllers;

use App\BehaviorObservation;
use Illuminate\Http\Request;

use App\Http\Requests;

class BehaviorObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BehaviorObservation::with('volunteer')->orderBy('datetime','desc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'datetime'=>'required',
            'temperamentWithAnimals'=>'required',
            'attitudeWithAnimals'=>'required',
            'temperamentWithPeople'=>'required',
            'attitudeWithPeople'=>'required',
            'recommendations'=>'required',
            'volunteer_id'=>'required',
            'animal_id'=>'required'
        ]);

        $bo=new BehaviorObservation();
        $bo->datetime=$request->input('datetime');
        $bo->temperamentWithAnimals=$request->input('temperamentWithAnimals');
        $bo->attitudeWithAnimals=$request->input('attitudeWithAnimals');
        $bo->temperamentWithPeople=$request->input('temperamentWithPeople');
        $bo->attitudeWithPeople=$request->input('attitudeWithPeople');
        $bo->recommendations=$request->input('recommendations');
        $bo->volunteer_id=$request->input('volunteer_id');
        $bo->animal_id=$request->input('animal_id');
        $bo->save();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
