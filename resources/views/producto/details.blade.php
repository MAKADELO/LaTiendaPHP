@extends('layouts.principal')

@section('contenido')

    
<div class="container">
    <div class="row">
        <div class="col s12">
            <h1 class="cyan-text text-darken-3">Detalles de Producto: {{ $producto->nombre }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col s8">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('img/producto/'.$producto->imagen) }}" width='500px' height='400px'>
                    <span class="card-title black">{{ $producto->nombre }}</span>
                </div>
                <div class="card-content grey lighten-4">
                    <div id="test1"><strong>Descripción :</strong> {{ $producto->descripcion }}</div>
                    <div id="test2"><strong>Precio :</strong> {{ $producto->precio }}</div>
                    <div id="test3"><strong>Marca :</strong> {{ $producto->marca->nombre }}</div>
                    <div id="test4"><strong>Categoría :</strong> {{ $producto->categoria->nombre }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card-content grey lighten-4">
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <div class="row">
                    <h3>Añadir al carrito</h3>
                </div>
                <input type="hidden" name="prod_id" value="{{ $producto->id }}">
                <input type="hidden" name="precio" value="{{ $producto->precio }}">
                <div class="row">
                    <div class="col s4 input-field">
                        <select name="cantidad" id="cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="cantidad">Cantidad:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4 input-field">
                        <button class="btn waves-effect waves-light" type="submit">Añadir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
