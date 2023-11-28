<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequestCreate;
use App\Http\Requests\CategoriaRequestUpdate;
use App\Models\Categoria;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categoria::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaRequestCreate $request)
    {
        $event = Categoria::create($request->all());
        return response()->json(['categoria' => $event], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        $categoria->load('libros');
        return response()->json(['categoria' => $categoria], Response::HTTP_OK);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaRequestUpdate $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return response()->json(['categoria' => $categoria], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->update(['estado_categoria' => false]);
        return response()->json(['categoria' => $categoria], Response::HTTP_ACCEPTED);
    }
}
