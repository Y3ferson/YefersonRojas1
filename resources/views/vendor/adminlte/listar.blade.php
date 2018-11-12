@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                     <h2 class="page-header text-center">

                     Listado de productos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('products.create') }}" class="btn btn-primary pull right">Nuevo</a>
                     </h2>
                     <table class="table table-hover table-striped">
                         
                        <thead>
                            
                            <tr>
                                
                                <th width="20px"> ID</th>
                                <th>Nombre del Producto</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $products)
                            <tr>
                                <td> {{ $products->id  }}</td>
                                <td><strong> {{ $products->name }} </strong>
                                    {{ $products->short }}

                                </td>
                                <td> <a href="{{ route('products.show', $products->id) }}">Ver</a>

                            </td>
                                <td>
                                    <a href="{{ route('products.edit', $products->id) }}">Editar </a>

                                </td>
                                <td>Borrar</td>

                            </tr>
                            @endforeach
                        </tbody>


                     </table>
                    {!! $products->render !!}

</div>
                    
<div class="main-content"> </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

