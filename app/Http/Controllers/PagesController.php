<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        $notas = App\Nota::all();
        return view('welcome', compact('notas'));
    }
    public function detalle($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }
    public function crear(Request $request){
    //nos permite ener una vista previa de nuestros datos ademas verifica que se manden los datos   // return $request->all();
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);
        
        $notanueva = new App\Nota;
        $notanueva->nombre = $request->nombre;
        $notanueva->descripcion = $request->descripcion;
        if($request->status){
            $notanueva->status = 1;
        }
        else{
            $notanueva->status = 0;
        }
  
        
        $notanueva->save();
        return back();
    }
    public function editar($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));  
    }
    public function update(Request $request, $id){
        $notaupdate = App\Nota::findOrFail($id);
        $notaupdate->nombre = $request->nombre;
        $notaupdate->descripcion = $request->descripcion;
        $notaupdate->save();
        return back()->with('mensaje', 'nota actualizada');
    }
    public function fotos(){
        return view('fotos');
    }
    public function noticias(){
        return view('blog');
    }
    public function nosotros($nombre = null){
        $equipo = ['ignacio','juan','pedro'];
        return view('nosotros', compact('equipo','nombre'));
    }
}
