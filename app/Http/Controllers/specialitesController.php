<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use App\specialites;
class specialitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nots = specialites::paginate(5);
        return view ('specialites.index')->with('bspecialites',$nots);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
       
        return view('specialites.create');
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
            'specialites' => 'required',
            
            
        ]);

        $nspecialites = new specialites;
        $nspecialites->specialite = $request->input('specialites');
        
        
        $nspecialites->save();
       
        return redirect('specialites');
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
        $mspecialite = specialites::find($id);
        return view('specialites.edit')->with('bspecialite',$mspecialite);
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
        $this->validate($request,[
            'specialite' => 'required',
            
        ]);

        $mspecialite = specialites::find($id);
        $mspecialite->specialite = $request->input('specialite');
        
        $mspecialite->save();
       
        return redirect('specialites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dspecialites = specialites::find($id);
        $dspecialites->delete();
        return redirect('specialites');
    }
}
