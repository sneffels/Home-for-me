<?php

namespace App\Http\Controllers;

use App\StatusAnimal;
use Illuminate\Http\Request;

use App\Http\Requests;

class StatusAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StatusAnimal::all();
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
        $this->validate($request,
            [
                'animal_id'=>'required',
                'status'=>'required',
                'date'=>'required',
                'state'=>'required'
            ]);
        $statusanimal=new StatusAnimal();
        $statusanimal->animal_id=$request->input('animal_id');
        $statusanimal->status=$request->input('status');
        $statusanimal->date=$request->input('date');
        $statusanimal->state=$request->input('state');

        //$result=StatusAnimal::where('animal_id','=',$statusanimal->animal_id)
                        //  ->where('status','=',$statusanimal->status)->first();


        StatusAnimal::where('animal_id','=',$statusanimal->animal_id)
                              ->where('state','=',1)->update(['state'=>0]);

        $statusanimal->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
