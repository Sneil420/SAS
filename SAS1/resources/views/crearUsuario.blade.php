@extends('layouts.app')


@section('contenido')
<div class="card">
    <div class="card-header">
       <h4>Información de la asignatura</h4>
    </div>
    <div class="card-block">
        <form action="{{route('store.usuario.interno')}}" method="POST">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-sm-6">
                    <label for="">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="col-sm-6">
                    <label for="">Apellido: </label>
                    <input type="text" class="form-control" name="apellido" required>
                </div>
                <div class="col-sm-6">
                    <label for="">Departamento: </label>
                    <select name="id_departamento" class="form-control" required>
                        <option value="">--Seleccione--</option>
                        @foreach ($departamentos as $item)
                            <option value="{{$item->id}}">{{$item->nombre_departamento}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="">Correo unitru: </label>
                    <input type="email" class="form-control" name="correo" required>
                </div>
                <div class="col-sm-6">
                    <label for="">Telefono: </label>
                    <input type="text" class="form-control" name="telefono" required>
                </div>
                <div class="col-sm-6">
                    <label for="">Codigo: </label>
                    <input type="text" class="form-control" name="codigo" required>
                </div>
            </div>

            

            <div class="row mt-3">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-success">GUARDAR</button>
                </div>
                <div class="col-sm-5"></div>
            </div>
        </form>
    </div>
</div>
@endsection

