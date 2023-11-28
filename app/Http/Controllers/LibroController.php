<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibroRequestCreate;
use App\Http\Requests\LibroRequestUpdate;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Libro::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LibroRequestCreate $request)
    {
        $libro = Libro::create($request->all());
        return response()->json(['libro' => $libro], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        $libro->load('categorias');
        return response()->json(['libro' => $libro], Response::HTTP_OK);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LibroRequestUpdate $request, Libro $libro)
    {
        $libro->update($request->all());
        return response()->json(['libro' => $libro], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return response()->json(['libro' => $libro], Response::HTTP_ACCEPTED);
    }
}
