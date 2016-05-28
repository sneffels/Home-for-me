<?php

namespace App\Http\Controllers;

use App\Adoption;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Adoption::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
               'names'=>'required',
                'lastName'=>'required',
                'idPerson'=>'required',
                'birthDate'=>'required',
                'address'=>'required',
                'housingType'=>'required',
                'cellPhone'=>'required',
                'email'=>'required',
                'docs'=>'required',
                'animal_id'=>'required'

            ]);
        $adoption= new Adoption();
        $adoption->names=$request->input('names');

       $adoption->lastName=$request->input('lastName');
        $adoption->idPerson=$request->input('idPerson');
        $adoption->birthDate=$request->input('birthDate');
        $adoption->address=$request->input('address');
        $adoption->housingType=$request->input('housingType');
        $adoption->cellPhone=$request->input('cellPhone');
        $adoption->email=$request->input('email');
        $adoption->docs=$request->input('docs');
        $adoption->animal_id=$request->input('animal_id');
        $adoption->save();


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
