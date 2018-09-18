<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Propietario;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index(Request $request)
    {
    	$data = Auto::orderBy('id','DESC')->paginate(12);
        return view('auto.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {   

        $propietarios = Propietario::all();

    	return view('auto.create', compact('propietarios'));
    }

    public function store(Request $request)
    {   

    	$store =  new Auto;
        $store->nombre = $request->nombre;    
    	$store->placa = $request->placa; 	
        $store->color = $request->color;    
    	$store->fecha_compra = $request->fecha; 	
        $store->propietario_id = $request->propietario;    
    	$store->estado = $request->estado; 	
    	$store->save();
    	return redirect()->route('auto.index')
                        ->with('success','Auto Registrado Exitosamente');
    }

    public function show($id)
    {
    	$data = Auto::find($id);
    	return view('auto.show',compact('data'));
    }

    public function edit($id)
    {
    	 $data = Auto::find($id);
         $propietarios = Propietario::all();
    	 return view('auto.edit',compact('data','propietarios'));

    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

    	$update = Auto::find($id);

        // dd($update);
        $update->nombre = $request->nombre;    
        $update->placa = $request->placa;    
        $update->color = $request->color;    
        $update->fecha_compra = $request->fecha;     
        $update->propietario_id = $request->propietario;    
        $update->estado = $request->estado;    
        $update->save();
    	return redirect()->route('auto.index')
                        ->with('success','Auto Editado Exitosamente');
    	
    }


    public function destroy($id)
    {
    	$delete = Auto::find($id)->delete();
    	return redirect()->route('auto.index')
                        ->with('error','Auto borrado Satisfactoriamente');
    }

}
