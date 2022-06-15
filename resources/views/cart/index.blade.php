@extends('layouts.principal')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="cyan-text text-darken-3">Carrito de compras</h1>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <table class="centered highlight responsive-table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!session('cart'))
                            <tr>
                                <td>No hay items en el carrito.</td>
                            </tr>   
                        @else
                            @foreach(session('cart') as $index => $producto)
                                <tr>
                                    <td>{{ $producto[0]['nombre_prod'] }}</td>
                                    <td>{{ $producto[0]['cantidad'] }}</td>
                                    <td>{{ $producto[0]['precio'] }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

          <div class="row">
              <form action="{{ route('cart.destroy', 1) }}" method="POST">
                @method('DELETE')
                @csrf
                    <button class="btn waves-effect waves-light" type="submit">
                        Vaciar contenido
                    </button>
              </form>
          </div>

        </div>
    </div>

@endsection