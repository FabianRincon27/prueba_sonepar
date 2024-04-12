<?php

namespace App\Http\Controllers;
use App\Models\MaterialElectrico;
use Validator;

use Illuminate\Http\Request;

class MaterialElectricoController extends Controller
{
    public function index(){
        // Se obtienen todos los registros a mostrar
        $materiales = MaterialElectrico::orderBy('id', 'desc')->get();

        // Se retorna la vista con la información necesaria
        return view('index', compact('materiales'));
    }

    public function store(Request $request){

        // Se establecen las reglas de validación para los campos obligatorios
        $rules = [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ];

        // Se establecen los mensajes para las reglas de validación
        $messages = [
            'name.required' => 'El material debe llevar asignado un nombre',
            'quantity.required' => 'El material debe llevar asignado una cantidad',
            'price.required' => 'El material debe llevar asignado un precio',
        ];

        // Se realiza la validación
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            // Si llega a fallar alguna validación se retornan los errores a la vista anterior con sus mensajes correspondientes
            return back()->withErrors($validator);
        else:
            // Si las validaciones son correctas se inserta el registro en el modelo
            $material = new MaterialElectrico;
            $material->name = $request->name;
            $material->quantity = $request->quantity;
            $material->price = $request->price;
            $material->description = $request->description;
            $material->specifications = $request->specifications;
            $material->save();

            // Se retorna a la vista del listado con el mensaje de que se ha creado correctamente
            return back()->with('type','alert-success')->with('message', 'Material creado correctamente');
        endif;
        
    }

    public function edit(Request $request, $id){

        // Se establecen las reglas de validación para los campos obligatorios
        $rules = [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ];

        // Se establecen los mensajes para las reglas de validación
        $messages = [
            'name.required' => 'El material debe llevar asignado un nombre',
            'quantity.required' => 'El material debe llevar asignado una cantidad',
            'price.required' => 'El material debe llevar asignado un precio',
        ];

        // Se realiza la validación
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            // Si llega a fallar alguna validación se retornan los errores a la vista anterior con sus mensajes correspondientes
            return back()->withErrors($validator);
        else:
            // Si las validaciones son correctas se actualiza el registro en el modelo
            $material = MaterialElectrico::findOrFail($id);
            $material->name = $request->name;
            $material->quantity = $request->quantity;
            $material->price = $request->price;
            $material->description = $request->description;
            $material->specifications = $request->specifications;
            $material->save();

            // Se retorna a la vista del listado con el mensaje de que se ha actualizado correctamente
            return back()->with('type','alert-success')->with('message', 'Material actualizado correctamente');
        endif;
        
    }

    public function delete($id){
        // Se obtiene el material a eliminar
        $material = MaterialElectrico::findOrFail($id);
        $material->delete();
        return back()->with('type','alert-success')->with('message', 'Material eliminado correctamente');

    }
}
