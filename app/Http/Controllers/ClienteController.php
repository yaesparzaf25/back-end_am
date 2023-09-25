<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request) //añadir a la BDD
    {
        $request->validate([
            'nombre' => 'required', 'apellido' => 'required', 'edad' => 'required', 'genero' => 'required'
        ]);
        // Crea un nuevo registro de cliente
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->edad = $request->edad;
        $cliente->genero = $request->genero;
        $cliente->created_at=null;
        $cliente->updated_at=null;
        $cliente->save();
        // Log::info('Nuevo cliente agregado: ' . $cliente->nombre . ' ' . $cliente->apellido);
        return response()->json(['nombre' => $cliente->nombre, 'response' => 'ok']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }


    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'fecha' => 'required', 'hora' => 'required'
        ]);
        $cliente->fecha = $request->fecha;
        $cliente->hora = $request->hora;
        $cliente->save();
        return $cliente;
    }

    public function login(Cliente $cliente)
    {
        return $cliente;
    }
    public function destroy(Cliente $cliente)
    {
        $cliente->fecha = "SF";
        $cliente->hora = "SF";
        $cliente->save();
        Log::info('Lo que se regresa es: ' . $cliente);
        return response()->json(['response' => 'ok', 'datos' => $cliente]);
    }
    
}
