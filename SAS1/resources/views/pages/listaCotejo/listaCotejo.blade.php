@extends('pages.layouts.app')

@section('titulo')
<div class="page-block">
    <div class="row align-items-center title-top">
        <div class="col-md-8">
            <div class="page-header-title">
                <h5 class="m-b-10">Lista de cotejo para la revisión del sílabo por competencias</h5>
            </div>
        </div>
        <div class="col-md-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Lista de cotejo </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
       <h4><strong>ESCUELA PROFESIONAL DE: {{auth()->user()->perfil->escuela->nombre_escuela}} </strong></h4>
    </div>

    <div class="card-block">
        <div class="row">
            <div class="col-sm-6">
                <iframe src="{{asset('/admin/silabos/'.$asignacion->curso->silabo)}}" style="width:100%; height:2000px;" frameborder="0" ></iframe>
            </div>
            <div class="col-sm-6" id="app">
                <lista-cotejo-component :asignacion="{{json_encode($asignacion)}}"></lista-cotejo-component>
            </div>
        </div>
    </div>


</div>
@endsection
@section('scriptsinicial')
<script src="{{asset('js/app.js')}}"></script>
@endsection