<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Response;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=Animal::with('species')->with('breed')->with('status')->get();
        return Response::json($data,200,[],JSON_UNESCAPED_SLASHES);

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
        $this->validate($request,
          [
               'name'=>'required',
                'gender'=>'required',
                'arrivalState'=>'required',
                'arrivalDateTime'=>'required',
                'responsiblePerson'=>'required',
                'responsiblePersonContact'=>'required',
                'responsiblePersonType'=>'required',
                'generalDescription'=>'required',
                'foundAddress'=>'required',
                'species_id'=>'required',
                'breed_id'=>'required',
                'foundAddressStreet'=>'required',
                'age'=>'required',
                'height'=>'required',


           ]);


        $animal=new Animal();
        $animal->name=$request->input('name');

        $animal->gender=$request->input('gender');

        $animal->arrivalState=$request->input('arrivalState');
        $animal->arrivalDate=$request->input('arrivalDateTime');
        $animal->responsiblePerson=$request->input('responsiblePerson');
        $animal->responsiblePersonContact=$request->input('responsiblePersonContact');
        $animal->responsiblePersonType=$request->input('responsiblePersonType');
        $animal->generalDescription=$request->input('generalDescription');
        $animal->foundAddress=$request->input('foundAddress');
        $animal->species_id=$request->input('species_id');
        $animal->breed_id=$request->input('breed_id');
        $animal->foundAddressStreet=$request->input('foundAddressStreet');
        $animal->age=$request->input('age');
        $animal->height=$request->input('height');
        $profile_image=$request->file('profile_image');
        $animal->profileimage=$profile_image->getClientOriginalName();
        $animal->save();
        $profile_image->move(public_path(),$profile_image->getClientOriginalName());

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return Animal::with('species')->with('breed')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

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
        $this->validate($request,
            [
                'name'=>'required',
                'gender'=>'required',
                'arrivalState'=>'required',
                'arrivalDate'=>'required',
                'responsiblePerson'=>'required',
                'responsiblePersonContact'=>'required',
                'responsiblePersonType'=>'required',
                'generalDescription'=>'required',
                'foundAddress'=>'required',
                'species_id'=>'required',

            ]);
        $animal=Animal::find($id);
        $animal->name=$request->input('name');
        $animal->gender=$request->input('gender');
        $animal->arrivalState=$request->input('arrivalState');
        $animal->arrivalDate=$request->input('arrivalDate');
        $animal->responsiblePerson=$request->input('responsiblePerson');
        $animal->responsiblePersonContact=$request->input('responsiblePersonContact');
        $animal->responsiblePersonType=$request->input('responsiblePersonType');
        $animal->generalDescription=$request->input('generalDescription');
        $animal->foundAddress=$request->input('foundAddress');
        $animal->species_id=$request->input('species_id');
        $animal->breed_id=$request->input('breed_id');
        $animal->save();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        $animal=Animal::find($request->input('id'));
        $animal->delete();
    }
}
