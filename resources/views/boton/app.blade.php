@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

<title>Tips</title>
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <style>
                        .active{
                            background: #999;
                        }
                    </style>
<div class="container">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand"><strong>Tips</strong></a>
        <br><br><br>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ active('boton') }}" >

                <a href="{{ route('boton') }}" class="nav-link">Inicio</a>
                
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </li>
            <li class="nav-item {{ active('nosotros') }}">

                <a href="{{ route('about') }}" class="nav-link">Nosotros</a>
                

            </li>
            
        </ul>


    </nav>

@yield('content')
<hr>

<p>
    La Ruta es: {{ request()->path() }}
</p>
<p>
    La Ruta completa es: {{ request()->url() }}
</p>
</div>
                    
<div class="main-content"> </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

