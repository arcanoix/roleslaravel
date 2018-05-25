@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos</div>
                     @can('products.create')
                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
                     @endcan
                <div class="card-body">

                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($products as $product)

                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td></td>
                                        <td>
                                            @can('products.show')
                                                <a href="{{ route('products.show', $product->id )}}" class="btn btn-sm btn-default">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.edit')
                                                <a href="{{ route('products.edit', $product->id )}}" class="btn btn-sm btn-default">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.destroy')
                                               {!! Form::open(['route' =>  ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                               {!! Form::close !!}
                                            @endcan
                                        </td>
                                           

                                    </tr>

                                @endforeach
                            </tbody>
                        </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
