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
                     @include('products.info')
                     <table class="table table-hover table-striped">
                         
                        <thead>
                            
                            <tr>
                                
                                <th width="20px"> ID</th>
                                <th>Nombre del Producto</th>
                                <th colspan="2">&nbsp;</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $products)
                            <tr>
                                <td> {{ $products->id  }}</td>
                                <td><strong> {{ $products->name }} </strong>
                                    {{ $products->short }}

                                </td>
                                <td> <a href="{{ route('products.show', $products->id) }}" class="btn btn-link"><i class="glyphicon glyphicon-eye-open" title="Mostrar"></i></a>

                            </td>
                                <td>
                                    <a href="{{ route('products.edit', $products->id) }}" class="btn btn-link"><i class="fa fa-edit" title="Editar"></i> </a>

                                </td>
                                <td>
                                    <form action="{{ route('products.destroy', $products->id) }}" method="POST">

                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-link"> <i class="fa fa-trash" title="Eliminar"></i></button>
                                </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>


                     </table>
                    {!! $products->render !!}

</div>
<div class="col-sm-4">
    @include('products.aside')
</div>
                    
<div class="main-content"> </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

