@extends('layouts.app')
@section('content')
<div id="wrapper">

      <!-- Sidebar -->
      
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('Empren-home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span>
          </a>
        </li>
         @if (empty($empre))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Registro.create') }}">
            <i class="fas fa-users"></i>
            <span>Registrar Emprendedor</span></a>
        </li>
        @else 
         <li class="nav-item">
          <a class="nav-link" href="{{ route('Emprendedor.create')}}">
            <i class="fas fa-users"></i>
            <span>Editar Emprendedor</span>
          </a>
        </li>
         @endif
         
      
        @if (!empty($empre))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Registrar Proyectos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Registra tus Proyectos:</h6>
            <a class="dropdown-item" href="{{ route('AlProyecto.create') }}">Alta de Proyectos</a>
          </div>
        </li>

         
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Lista.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Proyectos</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('chat.index') }}">
                <i class="fas fa-sms"></i>
            <span>Chat</span></a>
        </li>
        @endif
      </ul>

       <div class ="container my-3">
        @yield('empren')
      </div>
@endsection