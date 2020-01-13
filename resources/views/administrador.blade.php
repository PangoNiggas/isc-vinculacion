@extends('layouts.app')
@section('content')
<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('HomeAdmin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users-cog"></i>
            <span>Asesores</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Opciones:</h6>
            <a class="dropdown-item" href="{{ route('asesores.create')}}">Registrar Asesor</a>
            <a class="dropdown-item" href="{{ route('asesores.index') }}">Consultar Asesor</a>
            <a class="dropdown-item"href="{{ route('asignaciones.index')  }}">Asignar Asesor</a>           
          </div>
        </li>

         
        <li class="nav-item">
            <a class="nav-link" href="{{ route('emprendedores.index') }}">
                <i class="fas fa-user-tie"></i>
            <span>Ver Emprendedores</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('historial.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Historial de Proyectos</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('actividades.index') }}">
                <i class="fas fa-chart-line"></i>
            <span>Actividades</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('emails.index') }}">
                <i class="fas fa-envelope"></i>
            <span>Correos Masivos</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('chat.index') }}">
                <i class="fas fa-sms"></i>
            <span>Chat</span></a>
        </li>
      </ul>
      <div class ="container my-3">
        @yield('admin')
      </div>
     

@endsection