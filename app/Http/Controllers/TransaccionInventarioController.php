<?php

namespace App\Http\Controllers;
use App\Models\TransaccionInventario;
use App\Models\MaterialElectrico;
use Illuminate\Http\Request;
use Validator;

class TransaccionInventarioController extends Controller
{
    public function index(){
        // Se obtienen todos los registros a mostrar
        $transactions = TransaccionInventario::orderBy('id', 'desc')->get();

        // Se retorna la vista con la información necesaria
        return view('transactions', compact('transactions'));
    }

    public function store(Request $request){
        // Se establecen las reglas de validación para los campos obligatorios
        $rules = [
            'material' => 'required',
            'type' => 'required',
            'quantity' => 'required',
        ];

        // Se establecen los mensajes para las reglas de validación
        $messages = [
            'material.required' => 'Debe seleccionar un material para realizar la transacción',
            'type.required' => 'Debe seleccionar el tipo de transacción',
            'quantity.required' => 'Debe ingresar una cantidad para la transacción',
        ];

        // Se realiza la validación
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            // Si llega a fallar alguna validación se retornan los errores a la vista anterior con sus mensajes correspondientes
            return back()->withErrors($validator);  
        else:
            $material = MaterialElectrico::findOrFail($request->material);
            $transaction = new TransaccionInventario;
            if($request->type == 0) {
                $material->quantity = $material->quantity + $request->quantity;
            } else {
                $material->quantity = $material->quantity - $request->quantity;
            }
            $transaction->tipo = $request->type;
            $transaction->quantity = $request->quantity;
            $transaction->material_electrico_id = $request->material;
            $transaction->save();
            $material->save();
            return back()->with('type','alert-success')->with('message', 'Transacción realizada correctamente');
        endif;
    }
}
