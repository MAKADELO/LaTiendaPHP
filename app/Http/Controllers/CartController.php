<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Persistir los datos en una sesión.
        $producto = [[
            "prod_id" => $request->prod_id,
            "cantidad" => $request->cantidad,
            "precio" => $request->precio,
            "nombre_prod" => Producto::find($request->prod_id)->nombre
        ]];

        // 2. Primer producto del carrito.
        if ( !session('cart')) {

            $aux[] = $producto;

            session(['cart' => $aux]);
        } else {

            // Extraer los datos del carrito de la variable se sesión.
            $aux = session('cart');

            // Eliminar una variable de sesión.
            session()->forget('cart');

            // Agregar nuevo producto al existente.
            $aux [] = $producto;

            // Volver a crear la variable de sesión.
            session(['cart' => $aux]);
        }

        // Redirección al catálogo de productos con mensaje de éxito.

        return redirect('productos')->with("mensajito", "Producto añadido al carrito con éxito.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->forget('cart');
        return redirect('cart');
    }
}
