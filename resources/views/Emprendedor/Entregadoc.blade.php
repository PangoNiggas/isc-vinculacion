@extends('emprendedor')

@section('empren')

<div id="page-content-wrapper" class="form-group" >
    <div class="container-fluid">
           
                <div class="container">
                    <h2>Entrega de Actividades</h2>
                    <br>
                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#home">Entrega 1</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu1">Entrega 2</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu2">Entrega 3</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                             @if (session()->has('infor1'))
                            <div class="alert alert-success">{{ session('infor1')}}</div>
                            @endif
                            @if (session()->has('infor2'))
                                <div class="alert alert-success">{{ session('infor2')}}</div>
                                 @endif
                            @if (session()->has('infor3'))
                                <div class="alert alert-success">{{ session('infor3')}}</div>
                                 @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">{{ session('error')}}</div>
                                 @endif
                            @if (session()->has('error1'))
                                <div class="alert alert-danger">{{ session('error1')}}</div>
                                 @endif
                                 
                             @if (session()->has('error2'))
                                <div class="alert alert-danger">{{ session('error2')}}</div>
                                 @endif
                             <form class="form-group" method="post" action="{{ route('Enviar.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <h3>Entrega 1</h3>
                                <p>Subir un archivo Word con las actividades solicitas en la fase en curso. Recuerda que solo puedes subier el archvio word solo una vez</p>
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Fase</th>
                                                    <th scope="col">Proyectos</th>
                                                    <th scope="col">Entregas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="fase" class="custom-select">
                                                                <option value="{{ $fase->id}}">{{ $fase->NombreFase}}</option>
                                                        </select>
                                                    
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="proyecto" class="custom-select">
                                                                <option value="{{ $proyectos->id }}">{{ $proyectos->NombreProd }}</option>
                                                               
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="numeroentrega" class="custom-select">
                                                                <option value="1">Primera Entrega</option>
                                                               
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        @if (empty($avance))
                                                        <div class="form-group">
                                                            <label for="fileEnvio">Documento</label>
                                                        <input type="file" name="documento1" class="form-control" id="fileEnvio" onchange="validarExt()">
                                                        {!! $errors->first('documento1', '<span class=errores>:message</span>') !!}
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        @else
                                                        <div class="alert alert-success">   <p>Ya realizaste la primera entrega</p>
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                        </div>

                        <div id="menu1" class="container tab-pane fade"><br>
                            <h3>Entrega 2</h3>
                                <p>Subir un archivo Word con las actividades solicitas en la fase en curso. Recuerda que solo puedes subier el archvio word solo una vez</p>
                                @if (session()->has('infor2'))
                                <div class="alert alert-success">{{ session('infor2')}}</div>
                                @endif
                                 <form class="form-group" method="post" action="{{ route('Enviar.entregados')}}
                                 " enctype="multipart/form-data">
                                {{ csrf_field() }}
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Fase</th>
                                                    <th scope="col">Proyectos</th>
                                                    <th scope="col">Entregas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="fase2" class="custom-select">
                                                                <option value="{{ $fase->id}}">{{ $fase->NombreFase}}</option>
                                                        </select>
                                                    
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="proyecto2" class="custom-select">
                                                                <option value="{{ $proyectos->id }}">{{ $proyectos->NombreProd }}</option>
                                                               
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="numeroentrega2" class="custom-select">
                                                                <option value="2">Segunda Entrega</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        @if (!empty($avancedos))
                                                        <div class="alert alert-success">   <p>Ya enviaste tu segunda entrega</p>
                                                        </div>
                                                        @elseif (!empty($avance))
                                                        <div class="form-group">
                                                            <label for="fileEnvio">Documento</label>
                                                            <input type="file"  name="documento2" class="form-control" id="fileEnvio" onchange="validarExt()">
                                                             {!! $errors->first('documento2', '<span class=errores>:message</span>') !!}
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        @else
                                                        <div class="alert alert-success">   <p>Envia tu primer entrega</p>
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                           <h3>Entrega 3</h3>
                                <p>Subir un archivo Word con las actividades solicitas en la fase en curso. Recuerda que solo puedes subier el archvio word solo una vez</p>
                                @if (session()->has('infor3'))
                                <div class="alert alert-success">{{ session('infor3')}}</div>
                                 @endif
                                 <form class="form-group" method="post" action="{{ route('Enviar.entregatres')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Fase</th>
                                                    <th scope="col">Proyectos</th>
                                                    <th scope="col">Entregas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="fase3" class="custom-select">
                                                                <option value="{{ $fase->id}}">{{ $fase->NombreFase}}</option>
                                                        </select>
                                                    
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="proyecto3" class="custom-select">
                                                                <option value="{{ $proyectos->id }}">{{ $proyectos->NombreProd }}</option>
                                                               
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="numeroentrega3" class="custom-select">
                                                                <option value="3">Tercer Entrega</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        
                                                        
                                                       @if ( !empty($avancetres))
                                                       <div class="alert alert-success">    <p>Ya enviaste tu tercer entrega</p>
                                                        </div>
                                                       
                                                        @elseif ( (!empty($avance)) && (!empty($avancedos)) )
                                                        <div class="form-group">
                                                            <label for="fileEnvio">Documento</label>
                                                            <input type="file" name="documento3" class="form-control" id="fileEnvio" onchange="validarExt()">
                                                             {!! $errors->first('documento3', '<span class=errores>:message</span>') !!}
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        @else
                                                        <div class="alert alert-success">    <p>Tienes que enviar la segunda entrega </p>
                                                        </div>
                                                        
                                                         @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script type="text/javascript">
    function validarExt() {
    var archivoInput = document.getElementById('fileEnvio');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.docx|.DOCX|.doc|.DOC|.Docx)$/i;

      if (!extPermitidas.exec(archivoRuta))
      {

        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text:'Elije una extencion de Word (.Docx)',

          })

       // alert('Elije una extencion de Word (.Docx)')
        archivoInput.value='';
        return false;
      }
  }

</script>
@endsection