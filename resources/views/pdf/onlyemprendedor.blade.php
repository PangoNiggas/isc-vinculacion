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
            <h2>Emprendedor:{{ $emprendedor->Nombre }}</h2>
    </div>

    <div class="emprendedor">
        <div><span style="font-weight:bold;">Nombre: </span>{{ $emprendedor->Nombre }} {{ $emprendedor->ApellidoP }} {{$emprendedor->ApellidoM }}</div>
        <div><span style="font-weight:bold;">Direccion: </span>{{ $emprendedor->Direccion }}</div>
        <div><span style="font-weight:bold;">Colonia: </span>{{ $emprendedor->Colonia }}</div>
        <div><span style="font-weight:bold;">Ciudad: </span>{{ $emprendedor->Ciudad }}</div>
        <div><span style="font-weight:bold;">Municipio: </span>{{ $emprendedor->Municipio }}</div>
        <div><span style="font-weight:bold;">CP: </span>{{ $emprendedor->CodigoPostal }}</div>
        <div><span style="font-weight:bold;">Numero Exterior: </span>{{ $emprendedor->NumeroExterior }}</div>
        <div><span style="font-weight:bold;">Fecha de Nacimiento: </span>{{ $emprendedor->FechaNaci }}</div>
        <div><span style="font-weight:bold;">Edad: </span>{{ $emprendedor->Edad }}</div>
        <div><span style="font-weight:bold;">Sexo: </span>{{ $emprendedor->Sexo }}</div>
        <div><span style="font-weight:bold;">Estado Civil: </span>{{ $emprendedor->EstadoCivil }}</div>
        <div><span style="font-weight:bold;">Tel. Celular: </span>{{ $emprendedor->TelefonoCel }}</div>
        <div><span style="font-weight:bold;">Tel. Casa: </span>{{ $emprendedor->TelefonoCasa }}</div>
        <div><span style="font-weight:bold;">Correo: </span>{{ $emprendedor->Correo }}</div>
        <div><span style="font-weight:bold;">Escolaridad: </span>{{ $emprendedor->Escolaridad }}</div>
        <div><span style="font-weight:bold;">Tipo de Persona: </span>{{ $emprendedor->TipoPersona }}</div>
        <div><span style="font-weight:bold;">CURP: </span>{{ $emprendedor->CURP }}</div>
        <div><span style="font-weight:bold;">INE: </span>{{ $emprendedor->INE }}</div>
        <div><span style="font-weight:bold;">Razon Social: </span>{{ $emprendedor->RazonSocial }}</div>
        <div><span style="font-weight:bold;">Objetivo Social: </span>{{ $emprendedor->ObjetivoSocial }}</div>
        
    </div>
</body>
</html>