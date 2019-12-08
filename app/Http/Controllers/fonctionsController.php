<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use App\fonctions;
class fonctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nots = fonctions::paginate(5);
        return view ('fonctions.index')->with('bfonctions',$nots);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
       
        return view('fonctions.create');
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
            'fonctions' => 'required',
            
            
        ]);

        $nfonctions = new fonctions;
        $nfonctions->fonction = $request->input('fonctions');
        
        
        $nfonctions->save();
       
        return redirect('fonctions');
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
        $mfonction = fonctions::find($id);
        return view('fonctions.edit')->with('bfonction',$mfonction);
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
            'fonction' => 'required',
            
        ]);

        $mfonction = fonctions::find($id);
        $mfonction->fonction = $request->input('fonction');
        
        $mfonction->save();
       
        return redirect('fonctions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dfonctions = fonctions::find($id);
        $dfonctions->delete();
        return redirect('fonctions');
    }
}
