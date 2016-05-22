<?php

namespace App\Http\Controllers;

use App\MedicalObservation;
use Illuminate\Http\Request;

use App\Http\Requests;

class MedicalObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MedicalObservation::with('vet')->orderBy('date','desc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    public function create()
    {

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
            'date'=>'required',
            'medicalCares'=>'required',
            'vet_id'=>'required',
            'animal_id'=>'required',
            'pain'=>'required',
            'weight'=>'required',
            'bodycondition'=>'required',
            'eyes'=>'required',
            'mouth'=>'required',
            'abdomen'=>'required',
            'skin'=>'required',
            'ears'=>'required',
            'nosethroat'=>'required',
            'neuro'=>'required',
            'feet'=>'required',
        ]);
        $mo=new MedicalObservation();
        $mo->date=$request->input('date');
        $mo->medicalCares=$request->input('medicalCares');
        $mo->animal_id=$request->input('animal_id');
        $mo->vet_id=$request->input('vet_id');
        $mo->pain=$request->input('pain');
        $mo->weight=$request->input('weight');
        $mo->bodycondition=$request->input('bodycondition');
        $mo->eyes=$request->input('eyes');
        $mo->mouth=$request->input('mouth');
        $mo->abdomen=$request->input('abdomen');
        $mo->skin=$request->input('skin');
        $mo->ears=$request->input('ears');
        $mo->nosenthroat=$request->input('nosethroat');
        $mo->neuro=$request->input('neuro');
        $mo->feet=$request->input('feet');
        $mo->save();
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
