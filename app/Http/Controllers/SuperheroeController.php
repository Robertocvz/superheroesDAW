<?php

namespace App\Http\Controllers;

use App\Models\superheroe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SuperheroeController;
use Illuminate\Support\Facades\Storage;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['superheroes']=superheroe::paginate(5);
        return view('superheroe.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datossuperheroe=request()->except('_token');

        if($request->hasFile('Foto'))
        {
            $datossuperheroe['Foto']=$request->file('Foto')->store('uploads','public');
        }
        superheroe::insert($datossuperheroe);
        return response()->json($datossuperheroe);
    }

    /**
     * Display the specified resource.
     */
    public function show(superheroe $superheroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $superheroe=superheroe::findOrFail($id);
        return view('superheroe/edit', compact('superheroe'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datossuperheroe=request()->except('_token','_method');
        if($request->hasFile('Foto'))
        {
            $superheroe=superheroe::findOrFail($id);
            Storage::delete('public/'.$superheroe->Foto);
            $datossuperheroe['Foto']=$request->file('Foto')->store('uploads','public');
        }

        superheroe::where('id','=',$id)->update($datossuperheroe);

        $superheroe=superheroe::findOrFail($id);
        return view('superheroe/edit', compact('superheroe'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $superheroe=superheroe::findOrFail($id);

        if(Storage::delete('public/'.$superheroe->Foto))
        {
            superheroe::destroy($id);

            
        }
     
        return redirect('superheroe');

    }
}
