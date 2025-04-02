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
        @if (session('mensaje'))
        <div class="alert alert-success alert-dismissible fade show">{{ session('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">{{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>
        @endif
        <table id="tabla" class="table " style="width:100%">
            <thead>
                <tr>
                    <th>Nombre del docente</th>
                    <th>Curso</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaciones as $item)
                    <tr>
                        <td>{{$item->perfil->persona->apellido}} {{$item->perfil->persona->nombre}}</td>
                        <td>{{$item->curso->nombre}}</td>
                        <td class="text-center">
                            <label class="label 
                            @if ($item->estado == 'Enviado') label-info @endif
                            @if ($item->estado == 'Visado') label-success @endif
                            @if ($item->estado == 'Observado') label-danger @endif
                            @if ($item->estado == 'Recepcionado') label-primary @endif
                            ">
                                {{$item->estado}}</label>
                        </td>
                        <td class="text-center">
                            @if ($item->estado == 'Recepcionado' || $item->estado == 'Enviado')
                                <a href="{{route('asignacion.revision.listacotejo', $item->id)}}" style="background: #E5B713; color:white" class="btn btn-sm">Evaluar</a>
                            @endif

                            @if($item->estado == 'Observado')
                            <a href="#" style="background: #979796; color:rgb(0, 0, 0)" class="btn btn-sm">Evaluar</a>
                            @endif

                            @if($item->estado == 'Visado')
                            <a target="_blank" href="{{route('silabo.visado',$item->curso->id)}}" alt="silabo observado"><i  style="background: #FC7D7D; color: white; border-radius: 20px;   font-size: 40px" class="fa fa-file-pdf-o"></i></a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection