@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

<title>Editar</title>
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                     <h2 class="page-header text-center">

                    Editar Producto
                    <br>
                    <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado </a>
                    
                        </h2>

                         @include('products.error')
{!! Form::model($product, ['route' =>['products.update', $product->id], 'method' => 'PUT', 'files => true']) !!}

@include('products.form')

{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>

@endsection

