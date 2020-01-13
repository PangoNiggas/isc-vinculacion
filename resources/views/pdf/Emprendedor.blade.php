<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    .color{
        background-color: #28b463;
    }
    .cabecera{
       background-color: slategrey; 
    }

    th {
        border: solid 1px #000000
    }

    td {
        border: solid 1px #000000
    }
     
    </style>
</head>
<body>
    <div class="color">
            <h1>Emprendedor</h1>
    </div>
    
    <table class="table">
          <tbody>
        @forelse ($empreId as $empre)
      
          <tr class="color">
              <th scope="col">Numero </th>
              <th scope="col">Nombre </th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              <th scope="col">Fecha de Nacimiento</th>
          </tr>
          
        <tr>
            <td>{{ $empre->id}}</td>
            <td>{{ $empre->Nombre}}</td>
            <td>{{ $empre->ApellidoP}}</td>
            <td>{{ $empre->ApellidoM}}</td>
            <td> {{ $empre->FechaNaci}}</td>
        </tr>
        

          <tr class="color">
            <th scope="col">Edad</th>
              <th scope="col">Sexo</th>
              <th scope="col">Estado Civil</th>
              <th scope="col">Direccion</th>
              <th scope="col">Numero Exterior</th>
          </tr>
        
        <tr>
            <td>{{ $empre->Edad}}</td>
            <td>{{ $empre->Sexo}}</td>
            <td>{{ $empre->EstadoCivil}}</td>
            <td>{{ $empre->Direccion}}</td>
            <td> {{ $empre->NumeroExterior}}</td>
        </tr>
        

          <tr class="color">
             <th scope="col">Numero Interior</th>
              <th scope="col">Colonia</th>
              <th scope="col">Ciudad</th>
              <th scope="col">Municipio</th>
              <th scope="col">Codigo Postal</th>
             
          </tr>

          <tr>
            <td>{{ $empre->NumeroInterior}}</td>
            <td>{{ $empre->Colonia}}</td>
            <td>{{ $empre->Ciudad}}</td>
            <td>{{ $empre->Municipio}}</td>
            <td> {{ $empre->CodigoPostal}}</td>
        </tr>

          <tr class="color">
             <th scope="col">Telefono Celular</th>
              <th scope="col">Telefono de Oficina</th>
              <th scope="col">Telefono de Casa</th>
              <th scope="col">Correo Eletronico</th>
              <th scope="col">Escolaridad</th>
              
          </tr>
          <tr>
            <td>{{ $empre->TelefonoCel}}</td>
            <td>{{ $empre->TelefonoOfi}}</td>
            <td>{{ $empre->TelefonoCasa}}</td>
            <td>{{ $empre->Correo}}</td>
            <td> {{ $empre->Escolaridad}}</td>
        </tr>

        <tr class="color">
             <th scope="col">CURP</th>
              <th scope="col">INE</th>
              <th scope="col">RFC Fisica</th>
              <th scope="col">RFC Moral</th>
              <th scope="col">Razon Social</th>
              
          </tr>
          <tr>
            <td>{{ $empre->CURP}}</td>
            <td>{{ $empre->INE}}</td>
            <td>{{ $empre->RFC}}</td>
            <td>{{ $empre->RFCM}}</td>
            <td> {{ $empre->RazonSocial}}</td>
        </tr>

        <tr class="color"> 
             <th scope="col">Tipo Empresa</th>
              <th scope="col">Otra</th>
              
          </tr>
          <tr>
            <td>{{ $empre->TipoEmpresa}}</td>
            <td>{{ $empre->TipoOtra}}</td>
            
        </tr>
       </tbody>
       @empty
        <td colspan="8" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
        @endforelse
    </table></body>
</html>