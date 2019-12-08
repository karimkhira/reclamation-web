<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\reclamations;

use App\local;
use App\etats;
use App\User;


class reclamationsController extends Controller
{
    public function index(){
        $recs=reclamations::paginate(5);
        return view ('reclamations.index')->with('breclamation',$recs);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $recs=reclamations::paginate(5);
     //   $tlieu = lieus::all()->pluck('lieu','id');
        $tetat = etats::all()->pluck('etat','id');
        $tuser_cre = User::all()->pluck('name','id');
        $tuser_rep = User::all()->pluck('name','id');
        $tlocal_recl = local::all()->pluck('lieu','id');
        return view ('reclamations.create',compact('tetat','tuser_cre','tuser_rep','tlocal_recl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // id	message	usercreation_id	etat_id	userreparation_id	created_at	updated_at	locals_id
        $this->validate($request,[
            'message' => 'required',
            'usercreation_id' => 'required',
            'etat_id' => 'required',
            'userreparation_id' => 'required',
            'locals_id' => 'required',
            
            
        ]);

        $reclamation = new reclamations;
        $reclamation->message = $request->input('message');
        $reclamation->usercreation_id = $request->input('usercreation_id');
        $reclamation->etat_id = $request->input('etat_id');
        $reclamation->userreparation_id = $request->input('userreparation_id');
        $reclamation->locals_id = $request->input('locals_id');

        
        
       $reclamation->save();
      //  dd($reclamation);
        return redirect('reclamations');
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
        $reclamation = reclamations::find($id);
        return view('reclamations.edit')->with('breclamation',$reclamation);

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
            'message' => 'required',
            
        ]);

        $reclamation = reclamations::find($id);
        $reclamation->message = $request->input('message');
        
        $reclamation->save();
       
        return redirect('reclamations');

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
        $reclamation = reclamations::find($id);
        $reclamation->delete();
        return redirect('reclamations');

    }



    
}
