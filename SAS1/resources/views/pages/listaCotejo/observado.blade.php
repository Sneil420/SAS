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
    <div class="card-header text-center">
       <h4 style="color: #438AFE;
">Detalle de Observaciones encontradas</h4>
    </div>
    <div class="card-block">
        <table id="tabla" class="table " style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>N°</th>
                    <th>ITEM</th>
                    <th>OBSERVACIÓN</th>
                    <th class="text-center">VER SÍLABO OBSERVADO</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalObservaciones = count($listaCotejoRevision); $c = 0; ?>
                @foreach ($listaCotejoRevision as $value => $item)
                    <tr class="text-center" style="background: #FFDE6A;
                    !important">
                        <td>{{$value = $value + 1}}</td>
                       <td>{{$item->listaCotejo->item}}</td>
                       <td>{{$item->observacion}}</td>
                       @if ($c == 0)<td style="vertical-align: middle;
                       text-align: center;"
                       rowspan="{{$totalObservaciones}}"
                       ><a target="_blank" href="{{asset('/admin/silabos/'.$asignacion->curso->silabo)}}" alt="silabo observado"><i  style="color: grey; font-size: 40px" class="fa fa-file-pdf-o"></i></a></td>
                       @endif 
                    </tr>
                    <?php $c++; ?>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4 style="color: #438AFE;
                ">Adjuntar sílabo corregido</h4>
            </div>
        </div>
        <form action="{{route('silabo.corregido')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row mt-3">
                <input type="hidden" name="id_asignacion" value="{{$asignacion->id}}">
                <div class="col-sm-12">
                    <label>Cargar Sílabo: </label>
                    <input type="file" name="silabo"  class="dropify" required data-allowed-file-extensions="pdf">
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

</script>
@endsection