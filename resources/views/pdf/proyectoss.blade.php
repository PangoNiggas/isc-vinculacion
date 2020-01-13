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
    .color{
        background-color: aliceblue;
        text-align: center;
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
    <div class="text-center mb-5">
            <h1>Proyectos Registrados en el Sistema</h1>
    </div>
    
    <table class="table table-bordered table-sm">
        <thead class="cabecera" style="text-center">
          <tr>
              <th scope="col">Numero de Proyecto</th>
              <th scope="col">Razon Social</th>
              <th scope="col">Nombre Producto o Servicio</th>
              <th scope="col">Tipo de Sector</th>
              <th scope="col">Telefono</th>
              <th scope="col">Dirección</th>
              <th scope="col">Nombre del Director</th>
              <th scope="col">Descripción</th> 
          </tr>
      </thead>
      <tbody>
        @forelse ($asesor->asignaciones as $idea)
        <tr>
            <td>{{ $idea->proyecto->id}}</td>
            <td>{{ $idea->proyecto->Razonsocial}}</td>
            <td>{{ $idea->proyecto->NombreProd}}</td>
            <td>{{ $idea->proyecto->Actividad}}</td>
            <td>{{ $idea->proyecto->Telefonoemp}}</td>
            <td>{{ $idea->nombreasentamiento}}</td>
            <td>{{ $idea->proyecto->NombreDirector}}</td>
            <td>{{ $idea->proyecto->Descripcion}}</td>
        
        </tr>
        @empty
        <td colspan="8" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
        @endforelse
          
       </tbody>
    </table>
</body>
</html>