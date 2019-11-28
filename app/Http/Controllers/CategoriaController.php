<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categorias = Categoria::all();
      return response()->json($categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
          'nombreCategoria' => 'required|unique:categorias|max:150',
          'descripcion' => 'max:200',
      ]);
      $errors = $validator->errors();
      if ($validator->fails()) {
          return response()->json([
              'error' => true,
              'success' => false,
              'message' => $errors->messages(),
          ], 400);
      } else {
          $categoriaRequest = new Categoria;
          $categoriaRequest->nombreCategoria = $request->input('nombreCategoria');
          $categoriaRequest->descripcion = $request->input('descripcion');
          $categoriaRequest->save();
          return response()->json([
              'error' => false,
              'success' => true,
              'message' => 'Registro creado exitosamente.',
          ], 201);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $categoria = Categoria::find($id);
      return response()->json($categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $categoria = Categoria::find($id);
      if ($categoria) {
        $categoria->nombreCategoria = $request->input('nombreCategoria');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->update();
        return response()->json([
            'error' => false,
            'success' => true,
            'message' => 'Registro actualizado exitosamente.',
            'categoria' => $categoria,
        ], 201);
      } else {
        return response()->json([
            'error' => true,
            'success' => false,
            'message' => 'Categoria no encontrada'
        ], 400);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $categoria = Categoria::find($id);
      if ($categoria) {
          if ($categoria->delete()) {
            return response()->json([
                'error' => false,
                'success' => true,
                'message' => 'Registro eliminado exitosamente.',
                'categoria' => $categoria,
            ], 201);
          } else {
            return response()->json([
                'error' => true,
                'success' => false,
                'message' => 'Error al eliminar categoria'
            ], 400);
          }
      } else{
          return response()->json([
              'error' => true,
              'success' => false,
              'message' => 'Categoria no encontrada'
          ], 400);
      }
    }
}
