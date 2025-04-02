@extends('layouts.app')


@section('contenido')
<div class="card">
    <div class="card-header">
       <h4>Información de la la asignacion</h4>
    </div>
    <div class="card-block">
        <table id="tabla" class="table " style="width:100%">
            <thead>
                <tr>
                    <th>Nombre del curso</th>
                    <th>Escuela</th>
                    <th>Docente</th>
                    <th>Correo</th>
                    <th>Codigo</th>
                    <th class="text-center">Vista previa</th>
                    <th class="text-center">Sílabo Visado</th>
                    <th class="text-center">Cambiar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaciones as $item)
                    <tr>
                        <td>{{$item->curso->nombre}}</td>
                        <td>{{$item->curso->escuela->nombre_escuela}}</td>
                        <td>{{$item->perfil->persona->apellido}} {{$item->perfil->persona->nombre}} </td>
                        <td>{{$item->perfil->persona->correo_institucional}}</td>
                        <td>{{$item->perfil->persona->codigo}}</td>
                        <td class="text-center"><a target="_blank" href="{{asset('/admin/silabos/'.$item->curso->silabo)}}" alt="silabo vista previa">Ver</a></td>
                        <td class="text-center">
                            @if ($item->estado == 'Visado')
                            <a target="_blank" href="{{route('silabo.visado',$item->curso->id)}}" alt="silabo observado"><i  style="background: #FC7D7D; color: white; border-radius: 20px;   font-size: 40px" class="fa fa-file-pdf-o"></i></a>
    
                            @else
                                <i  style="background: #A0BBC6;  color: white; border-radius: 20px;   font-size: 40px" class="fa fa-file-pdf-o"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            <form action="{{route('correcion.silabo.interno')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$item->id_curso}}" name="curso_id">
                                <input type="file" name="silabo" id="" required>
                                <button type="submit" class="btn btn-success btn-sm">OK</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

