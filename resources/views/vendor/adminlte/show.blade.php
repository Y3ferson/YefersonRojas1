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

                    {{ $product->name}}
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-default pull-right">Editar </a>
                    
                        </h2>
<p>
    {{ $product->short}}

</p>

{!! $product->body !!}

</div>
</div>
</div>
</div>
</div>
@endsection

