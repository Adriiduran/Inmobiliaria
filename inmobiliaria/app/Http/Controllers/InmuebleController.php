<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inmueble;
use Illuminate\Support\Facades\Auth;

class InmuebleController extends Controller
{
    function index()
    {
        $inmuebles = Inmueble::select('inmuebles.*')->paginate(6);
        return view('welcome', compact('inmuebles'));
    }

    function admin(){
        $inmuebles = Inmueble::select('inmuebles.*');
        return view('admin', compact('inmuebles'));
    }

    // function delete(Inmueble $inmueble)
    // {
    //     $inmueble->delete();

    //     return redirect()->route('inmueble.index');
    // }

    // function store(Request $request)
    // {
    //     Inmueble::create($request->all());

    //     return redirect()->back()->with('success', 'inmueble registrado correctamente.');
    // }

    // function update(Inmueble $inmueble, Request $request)
    // {
    //     $inmueble->titulo = $request->titulo;
    //     $inmueble->contenido = $request->contenido;
    //     $inmueble->save();

    //     return view('formUpdate', compact('inmueble'))->with('success','Registro modificado correctamente.');
    // }
}