<?php

namespace App\Http\Controllers;



use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Inmueble;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InmuebleController extends Controller
{
    function index()
    {
        $inmuebles = Inmueble::select('inmuebles.*');
        return compact('inmuebles');
    }

     function destroy($id): RedirectResponse
     {
        DB::table('inmuebles')->delete($id);
         return redirect("/");
     }

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


        function store(Request $request)
     {

        Inmueble::create($request->all());
         return redirect("/");
     }
}