<?php

namespace App\Http\Controllers;

use App\ProgramOfServices;
use Illuminate\Http\Request;

class ProgramOfServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProgramOfServices::all();
    }

    public function getByService($services_id)
    {
        return ProgramOfServices::where('services_id','=',$services_id)->get();
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=$request->id;
        if($id > 0){
            $program= ProgramOfServices::where('id','=',$id)->update($request->all());
            $service= ProgramOfServices::find($id);
        }
        else{
            $program = ProgramOfServices::create($request->all());
        }       
        
        return $program;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramOfServices  $programOfServices
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramOfServices $programOfServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramOfServices  $programOfServices
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramOfServices $programOfServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramOfServices  $programOfServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramOfServices $programOfServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramOfServices  $programOfServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramOfServices $programOfServices)
    {
        //
    }
}
