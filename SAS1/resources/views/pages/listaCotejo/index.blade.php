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
                    <a href="#"> <i class="fa fa-home"></i> </a>
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
    <div class="card-block">
        <div class="row">
                @if(Auth::user()->habilitado == 1)
                    <a class="btn btn-success" href="{{route('curso.create')}}"> AGREGAR ASIGNATURA</a>
                @endif
        </div> <br>
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

                    <th>Nombre del curso</th>
                    <th>Escuela</th>
                    <th>Ciclo</th>
                    <th class="text-center">Vista previa</th>
                    <th class="text-center">Sílabo Visado</th>
                    <th class="text-center">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaciones as $item)
                    <tr>
                        <td>{{$item->curso->nombre}}</td>
                        <td>{{$item->curso->escuela->nombre_escuela}}</td>
                        <td>{{$item->curso->ciclo}}</td>
                        <td class="text-center"><a target="_blank" href="{{asset('/admin/silabos/'.$item->curso->silabo)}}" alt="silabo vista previa">Ver</a></td>
                        <td class="text-center">
                            @if ($item->estado == 'Visado')
                            <a target="_blank" href="{{route('silabo.visado',$item->curso->id)}}" alt="silabo observado"><i  style="background: #FC7D7D; color: white; border-radius: 20px;   font-size: 40px" class="fa fa-file-pdf-o"></i></a>
    
                            @else
                                <i  style="background: #A0BBC6;  color: white; border-radius: 20px;   font-size: 40px" class="fa fa-file-pdf-o"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            <label class="label 
                            @if ($item->estado == 'Enviado') label-info @endif
                            @if ($item->estado == 'Visado') label-success @endif
                            @if ($item->estado == 'Observado') label-danger @endif
                            @if ($item->estado == 'Recepcionado') label-primary @endif
                            ">
                            @if ($item->estado == 'Observado')
                                <a href="{{route('detalle.observacion', $item->id)}}" style="color: white">{{$item->estado}}</a>
                            @else
                                {{$item->estado}}
                            @endif
                                </label>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection