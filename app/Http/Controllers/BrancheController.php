<?php

namespace App\Http\Controllers;

use App\Branche;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrancheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branche::with('user')->get();
        return  view('branch.branche',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'branche' => 'required|unique:branches'
         ]);
        $branche = new Branche();
        $branche->branche = $request->branche;
        $branche->user_id = Auth::id();
        $branche->save();
        return redirect()->route('branche.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function show(Branche $branche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function edit($branche)
    {
          $branche =  Branche::findOrFail($branche);
        return  view('branch.edit',compact('branche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branche $branche)
    {
        $request->validate([
            'branche' => "required|unique:branches,branche,".$branche->id
        ]);
      $branche =  Branche::findOrFail($branche->id);
      $branche->branche = $request->branche;
      $branche->save();
        return redirect()->route('branche.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branche $branche)
    {
         $branchedelete =  Branche::findOrFail($branche->id);

        $branchedelete->delete();
        return redirect()->route('branche.index');

    }

    public function infoP($id){
       $info = User::findOrFail($id);

        return  view('branch.infoP',compact('info'));
    }
}
