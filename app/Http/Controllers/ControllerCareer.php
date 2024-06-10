<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class ControllerCareer extends Controller
{
    /**
     * Display a listing of the resource    .
     */
    public function index()
    {
        //
        $careers=career::all();
        return view('career.index', compact('careers'));
    }

    public function create()
    {
        return view('careers.create');
    }

    public function store(Request $request)
    {
        
        $career = new Career();
        $career->codigo = $request->codigo;
        $career->nombre = $request->nombre;
        $career->descripcion = $request->descripcion;
        $career->save();
        return redirect()->route('careers.index');
    }


    public function show(string $id)
    {
        
        $career = Career::find($id);
        return view('careers.show', compact('career'));
    
    }

    
    public function edit(string $id)
    {
        $career = Career::find($id);
        return view('careers.edit', compact('career'));
    }

    
    public function update(Request $request, string $id)
    {
            $career = Career::find($id);
            $career->codigo = $request->codigo;
            $career->nombre = $request->nombre;
            $career->descripcion = $request->descripcion;
            $career->save();
            return redirect()->route('careers.index');
    }


    public function destroy(string $id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect()->route('careers.index');
    }
}
