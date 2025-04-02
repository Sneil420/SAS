<!--
<div class="pcoded-navigation-label">Menú</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="">
            <a href="#" class="waves-effect waves-dark" style="height: 70px !important;">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext">Lista de cotejo para la revisión del sílabo por competencias
                </span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
-->

<div class="pcoded-navigation-label">Menú</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark " style="height: 70px !important;">
                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                <span class="pcoded-mtext">Lista de cotejo para la revisión del sílabo por competencias</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="{{route('lista.cursos')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Asignaturas</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                @if(auth()->user()->perfil->id_rol == 2)
                <li class=" ">
                    <a href="{{route('lista.cursos.revision')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Revisión</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                @endif
            </ul>
        </li>
    </ul>
