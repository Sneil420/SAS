@extends('pages.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
@endsection

@section('titulo')
<div class="page-block">
    <div class="row align-items-center">
        <div class="col-md-8">
            <div class="page-header-title">
                <h5 class="m-b-10">Lista de Cotejo</h5>
                <p class="m-b-0">Para la revisión del sílabo por competencias</p>
            </div>
        </div>
        <div class="col-md-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Curso</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
       <h4>Información de la asignatura</h4>
    </div>
    <div class="card-block">
        <form action="{{route('curso.update')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="curso_id" value="{{$curso->id}}">
            <div class="row">
                <div class="col-sm-6">
                    <label for="">Nombre del curso: </label>
                    <input type="text" class="form-control" name="nombre" value="{{$curso->nombre}}" required>
                </div>
                <div class="col-sm-6">
                    <label for="">Escuela: </label>
                    <select name="id_escuela" class="form-control" required>
                        @foreach ($escuelas as $item)
                        @if ($item->id == $curso->id_escuela)
                            <option selected value="{{$item->id}}">{{$item->nombre_escuela}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->nombre_escuela}}</option>
                        @endif
                            
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-4">
                    <label for="">Ciclo: </label>
                    <input type="text" class="form-control" name="ciclo" value="{{$curso->ciclo}}" required>
                </div>
                <div class="col-sm-4">
                    <label for="">Créditos: </label>
                    <input type="text" id="credito" class="form-control" value="{{$curso->creditos}}" name="creditos" readonly required>
                </div>
                <div class="col-sm-4">
                    <label for="">Tipo: </label>
                    <select name="tipo" class="form-control" required>
                        @if($curso->tipo == 'General')
                            <option selected value="General">General</option>
                            <option value="Específico">Específico</option>
                            <option value="Especialidad">Especialidad</option>
                        @endif
                        @if($curso->tipo == 'Específico')
                        <option  value="General">General</option>
                        <option selected value="Específico">Específico</option>
                        <option value="Especialidad">Especialidad</option>
                    @endif
                    @if($curso->tipo == 'Especialidad')
                    <option  value="General">General</option>
                    <option value="Específico">Específico</option>
                    <option selected value="Especialidad">Especialidad</option>
                @endif
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-4">
                    <label for="">Horas Teóricas: </label>
                    <input type="number" id="hteoricas" min="0" onchange="calcular()" value="{{$curso->horas_teoricas}}" class="form-control" name="horas_teoricas" required>
                </div>
                <div class="col-sm-4">
                    <label for="">Horas Prácticas: </label>
                    <input type="number" id="hpracticas" min="0"  onchange="calcular()" class="form-control" value="{{$curso->horas_practicas}}" name="horas_practicas" required>
                </div>
                <div class="col-sm-4">
                    <label for="">Horas Totales: </label>
                    <input type="number" id="htotales" min="0" class="form-control" readonly name="total_horas" value="{{$curso->total_horas}}" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    
                    <input type="radio" name="caracter" value="Obligatorio" required {{ $curso->caracter == 'Obligatorio' ? 'checked' : ''}}> <span>Obligatorio &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>  
                    <input type="radio" name="caracter" value="Electivo" {{ $curso->caracter == 'Electivo' ? 'checked' : ''}}><span>Electivo</span> 
                </div>
                <div class="col-sm-4"></div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12">
                    <label>Cargar Sílabo: </label>
                    <input type="file" name="silabo"  class="dropify"  data-allowed-file-extensions="pdf"
                    data-default-file="{{ asset( '/admin/silabos/'.$curso->silabo ) }}">
                      <span class="help-block">Tipo de archivo permitido: .pdf</span>
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

@section('scripts')

<script src="{{asset('js/dropify.js')}}"></script>
<script>
    $('.dropify').dropify({
    messages: {
        'default': 'Subir su Sílabo',
        'replace': 'Seleccione su Sílabo para reemplazar',
        'remove':  'Remover',
        'error':   'Ooops, ocurrio un error.'
    }
});
</script>

<script>
    function calcular() {
        let hteoricas = document.getElementById("hteoricas").value; 
        let hpracticas = document.getElementById("hpracticas").value;
        let htotales = parseInt(hteoricas) + parseInt(hpracticas);
        let creditos = parseInt(hteoricas) + parseInt(parseInt(hpracticas)/2);
        document.getElementById("htotales").value = htotales;
        document.getElementById("credito").value = creditos;
    }
</script>
@endsection