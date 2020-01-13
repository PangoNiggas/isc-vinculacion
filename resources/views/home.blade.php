@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        

        @if (Auth::user()->hasRole('administrador'))

        @include('Administrador/dashboard')

        @elseif (Auth::user()->hasRole('asesor'))

         @include('Asesor/inicio')    

        @elseif (Auth::user()->hasRole('emprendedor'))

        @include('Emprendedor/dashboard')
            
        @endif
       
    </div>
</div>
@endsection
