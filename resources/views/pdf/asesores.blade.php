<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/boots.css">
    <style>
    
    body{
        font-size: 10px;
    }
    .cabecera{
       background-color: slategrey; 
    }
    td {
        border: solid 1px #000000
    }
    </style>
</head>
<body>
    <div class="text-center mb-2">
            <h1>Asesores Registrados en el Sistema</h1>
    </div>
    
    <table class="table table-bordered table-sm">
        <thead class="cabecera" style="text-center">
          <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Dirección</th>
              <th scope="col">Ciudad</th>
              <th scope="col">Telefono</th>
              <th scope="col">RFC</th>
              <th scope="col">CURP</th>
              <th scope="col">Correo</th> 
          </tr>
      </thead>
      <tbody>
        @forelse ($asesores as $asesor)
        <tr>
            <td>{{ $asesor->Nombre}}</td>
            <td> {{ $asesor->ApellidoP}} {{ $asesor->ApellidoM}}</td>
            <td>{{ $asesor->Direccion}}</td>
            <td>{{ $asesor->Ciudad}}</td>
            <td>{{ $asesor->Telefono}}</td>
            <td>{{ $asesor->RFC}}</td>
            <td>{{ $asesor->CURP}}</td>
            <td>{{ $asesor->Correo}}</td>
        
        </tr>
        @empty
        <td colspan="8" style="text-align: center;"><h4>No Hay Asesores Registrados</h4></td>
        @endforelse
          
       </tbody>
    </table></body>
</html>