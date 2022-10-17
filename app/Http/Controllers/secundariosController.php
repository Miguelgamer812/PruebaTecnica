<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secundario;
use Illuminate\Support\Facades\DB;

class secundariosController extends Controller
{
    public function registro(Request $request){
        $secundarios = new Secundario;
        $secundarios->Nombre = $request->Nombre;
        $secundarios->Apellidos = $request->Apellidosuser;
        $secundarios->Cedula = $request->Cedulauser;
        $secundarios->Contraseña = $request->pass;
        $secundarios->FechaNacimiento = $request->Fechauser;
        $secundarios->save();

        return redirect()->route('filas'); // Me redirecciona a Registrar
    }

    public function index(){
        $secunda = Secundario::all();
        return view('secundarios.Registrar', ['variable'=>$secunda]);
    }
    //----------------------------------------------------------------------------------------------------------
    public function show($id){
        $secundar = Secundario::find($id);
        return view('secundarios.show',['variable'=>$secundar]);
        // return redirect()->route('filas');
    }
    public function update(Request $request){
       Secundario::where('id', $request->id)->update(['Nombre'=>$request->Nombre,'Apellidos'=>$request->Apellidosuser,
    'Cedula'=>$request->Cedulauser,'FechaNacimiento'=>$request->Fechauser,'Contraseña'=>$request->pass]);
        return redirect()->route('filas');
    }
    public function destroy($id){
        $destroi = Secundario::find($id);
        $destroi->delete();
        return redirect()->route('filas');
    }
    //----------------------------------------------------------------------------------------------------------
    public function numerosIngreso(){
        $ingreso = Secundario::all();
        return view('secundarios.Registrar', ['variable'=>$ingreso]);
    }
}
