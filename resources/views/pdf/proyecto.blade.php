<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/boots.css">
    <style>
    
    .color{
        background-color:  #666b6d;
        text-align: center;
    }
    .proyecto{
        background-color: #bbbcbd;
        margin-bottom: 20px;
    }

    .emprendedor{
        background-color: #bbbcbd;
        margin-bottom: 20px;
    }
    .asesor{
        background-color: #bbbcbd;
    }
    td {
        border: solid 1px #000000
    }
    </style>
</head>
<body>
    <div class="bg-light text-center">
            <h2>Datos del Proyecto Numero: {{ $proyecto->id }}</h2>
    </div>
    <div class="proyecto">
        <div><span style="font-weight:bold;">Nombre del proyecto: </span>{{ $proyecto->NombreProd }}</div>
        <div><span style="font-weight:bold;">Actividad: </span> {{ $proyecto->Actividad }}</div>
        <div><span style="font-weight:bold;">Descripcion: </span> {{ $proyecto->Descripcion }}</div>
        <div><span style="font-weight:bold;">Nombre del director: </span>{{ $proyecto->NombreDirector }}</div>
        <div><span style="font-weight:bold;">Organizacion: </span>
             @if ($proyecto->Organizacion === "Si")
             {{ $proyecto->Cual }} 
             @elseif($proyecto->Organizacion === "No")
             No tiene
            @endif
        </div>
        <div><span style="font-weight:bold;">RFC: </span>{{ $proyecto->RFC }}</div>
        <div><span style="font-weight:bold;">Razon social: </span>{{ $proyecto->Razonsocial }}</div>
        <div><span style="font-weight:bold;">Telefono de la empresa: </span>{{ $proyecto->Telefonoemp }}</div>
        <div><span style="font-weight:bold;">Correo empresarial: </span>{{ $proyecto->CorreoEmp }}</div>
        <div><span style="font-weight:bold;">Propuesta: </span>{{ $proyecto->Propuesta }}</div>
    </div>

    <div class="emprendedor">
        <div><span style="font-weight:bold;">Proyecto realizado por: </span>{{ $proyecto->Emprendedor->Nombre }} {{ $proyecto->Emprendedor->ApellidoP }} {{ $proyecto->Emprendedor->ApellidoM }}</div>
        <div><span style="font-weight:bold;">Direccion: </span>{{ $proyecto->Emprendedor->Direccion }}</div>
        <div><span style="font-weight:bold;">Colonia: </span>{{ $proyecto->Emprendedor->Colonia }}</div>
        <div><span style="font-weight:bold;">Ciudad: </span>{{ $proyecto->Emprendedor->Ciudad }}</div>
        <div><span style="font-weight:bold;">Municipio: </span>{{ $proyecto->Emprendedor->Municipio }}</div>
        <div><span style="font-weight:bold;">CP: </span>{{ $proyecto->Emprendedor->CodigoPostal }}</div>
        <div><span style="font-weight:bold;">Numero Exterior: </span>{{ $proyecto->Emprendedor->NumeroExterior }}</div>
        <div><span style="font-weight:bold;">Fecha de Nacimiento: </span>{{ $proyecto->Emprendedor->FechaNaci }}</div>
        <div><span style="font-weight:bold;">Edad: </span>{{ $proyecto->Emprendedor->Edad }}</div>
        <div><span style="font-weight:bold;">Sexo: </span>{{ $proyecto->Emprendedor->Sexo }}</div>
        <div><span style="font-weight:bold;">Estado Civil: </span>{{ $proyecto->Emprendedor->EstadoCivil }}</div>
        <div><span style="font-weight:bold;">Tel. Celular: </span>{{ $proyecto->Emprendedor->TelefonoCel }}</div>
        <div><span style="font-weight:bold;">Tel. Casa: </span>{{ $proyecto->Emprendedor->TelefonoCasa }}</div>
        <div><span style="font-weight:bold;">Correo: </span>{{ $proyecto->Emprendedor->Correo }}</div>
        <div><span style="font-weight:bold;">Escolaridad: </span>{{ $proyecto->Emprendedor->Escolaridad }}</div>
        <div><span style="font-weight:bold;">Tipo de Persona: </span>{{ $proyecto->Emprendedor->TipoPersona }}</div>
        <div><span style="font-weight:bold;">CURP: </span>{{ $proyecto->Emprendedor->CURP }}</div>
        <div><span style="font-weight:bold;">INE: </span>{{ $proyecto->Emprendedor->INE }}</div>
        <div><span style="font-weight:bold;">Razon Social: </span>{{ $proyecto->Emprendedor->RazonSocial }}</div>
        <div><span style="font-weight:bold;">Objetivo Social: </span>{{ $proyecto->Emprendedor->ObjetivoSocial }}</div>
        
    </div>

    <div class="asesor">
        @if ($proyecto->Asignacion)
              
        <div><span style="font-weight:bold;">Asesor del proyecto: </span>{{ $proyecto->Asignacion->Asesor->Nombre }} {{ $proyecto->Asignacion->Asesor->ApellidoP }} {{ $proyecto->Asignacion->Asesor->ApellidoM }}</div>
        <div><span style="font-weight:bold;">Dirección: </span>{{ $proyecto->Asignacion->Asesor->Direccion }}</div>
        <div><span style="font-weight:bold;">Ciudad: </span>{{ $proyecto->Asignacion->Asesor->Ciudad }} </div>
        <div><span style="font-weight:bold;">Estado: </span>{{ $proyecto->Asignacion->Asesor->Estado }} </div>
        <div><span style="font-weight:bold;">Colonia: </span>{{ $proyecto->Asignacion->Asesor->Colonia }} </div>
        <div><span style="font-weight:bold;">CP: </span>{{ $proyecto->Asignacion->Asesor->CP }} </div>
        <div><span style="font-weight:bold;">RFC: </span>{{ $proyecto->Asignacion->Asesor->RFC }} </div>
        <div><span style="font-weight:bold;">Escolaridad: </span>{{ $proyecto->Asignacion->Asesor->Escolaridad }} </div>
        <div><span style="font-weight:bold;">CURP: </span>{{ $proyecto->Asignacion->Asesor->CURP }} </div>
        <div><span style="font-weight:bold;">Telefono: </span>{{ $proyecto->Asignacion->Asesor->Telefono }} </div>
        <div><span style="font-weight:bold;">Estado Civil: </span>{{ $proyecto->Asignacion->Asesor->EstadoCivil }} </div>
        <div><span style="font-weight:bold;">Fecha de nacimiento: </span>{{ $proyecto->Asignacion->Asesor->FechaNacimiento }} </div>
        <div><span style="font-weight:bold;">Sexo: </span>{{ $proyecto->Asignacion->Asesor->Sexo }} </div>
        <div><span style="font-weight:bold;">Correo: </span>{{ $proyecto->Asignacion->Asesor->Correo }} </div>
        @else
            <div><span style="font-weight:bold;">No hay asesor relacionado</span></div>
        @endif
    </div>

    
 
    
       
         
 
</body>
</html>