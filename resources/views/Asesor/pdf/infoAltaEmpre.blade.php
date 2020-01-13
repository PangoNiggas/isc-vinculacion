<div class="container"> 
    
    <div class="row">
        <div class="col">
            
        <div class="row justify-content-md-center">
            <div class=" col-md-10" style="background-color:#0066CC">
                <h4 class="text-center">{{ $emprendedor->Nombre }} {{ $emprendedor->ApellidoP }} {{ $emprendedor->ApellidoM }}</h4>              
            </div>
        </div>

     

    <div class="row justify-content-center">
        <div class="form-group col-md-10">
            <label><b>Nombre Completo:</b> </label>
            <label>{{ $emprendedor->Nombre }}</label>
        </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label><b>Apellido Paterno:</b> </label>
            <label>{{ $emprendedor->ApellidoP }}</label>
        </div>
           
         <div class="form-group col-md-5">
            <label><b>Apellido Materno:</b> </label>
            <label>{{ $emprendedor->ApellidoM }}</label>
         </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label><b>Fecha de Nacimiento:</b> </label>
             <label>{{$emprendedor->FechaNaci}} </label>
            
        </div>
    
        <div class="form-group col-md-5">
            <label><b>Edad:</b> </label>
            <label>{{$emprendedor->Edad}}</label>
        </div>
     </div>
    
     <div class="row justify-content-md-center">
         <div class="form-group col-md-5">           
                <label><b>Sexo:</b> </label>
                <label>{{ $emprendedor->Sexo }}</label>
          </div>
     
      <div class="form-group col-md-5">
             <label><b>Estado civil:</b> </label>
             <label>{{ $emprendedor->EstadoCivil }}</label>
        </div>                

    </div>

      <div class="row justify-content-md-center mt">
        <div class="form-group col-md-5">           
            <label><b>Direccion:</b> </label>
            <label>{{ $emprendedor->Direccion }}</label>
        </div>

        <div class="form-group col-md-5">
            <label><b>Numero Exterior:</b> </label>
            <label>{{$emprendedor->NumeroExterior}}</label>           
        </div>
                  
     </div>

    <div class="row justify-content-md-center mt">
        <div class="form-group col-md-5">           
             <label><b>Numero Interior:</b> </label>
             <label>{{$emprendedor->NumeroInterior}}</label>
        </div>

        <div class="form-group col-md-5">
            <label><b>Colonia:</b> </label>
             <label>{{ $emprendedor->Colonia }}</label>
        </div>
                  
    </div>

    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
           <label><b>Ciudad:</b> </label>
           <label>{{ $emprendedor->Ciudad }}</label>
                    
        </div>
        
        <div class="form-group col-md-5">
            <label><b>Municipio</b></label>
            <label>{{ $emprendedor->Municipio }}</label>
                    
        </div>
    </div>

    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label><b>Codigo Postal:</b> </label>
            <label>{{ $emprendedor->CodigoPostal }}</label>
                    
        </div>
        
        <div class="form-group col-md-5">
            <label><b>Telefono Celular:</b> </label>
            <label>{{ $emprendedor->TelefonoCel }}</label>
        </div>

    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label><b>Telefono de Oficina:</b> </label>
            <label>{{ $emprendedor->TelefonoOfi }}</label>
                     
        </div>
        
        <div class="form-group col-md-5">
            <label><b>Telefono de Casa:</b> </label>
            <label>{{ $emprendedor->TelefonoCasa }}</label>
        </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label><b>Correo Electronico:</b> </label>
            <label>{{ $emprendedor->Correo }}</label>
                         
        </div>

        <div class="form-group col-md-5">
            <label><b>Escolaridad:</b> </label>
            <label>{{ $emprendedor->Escolaridad }}</label>
                          
        </div>
    </div>

        <div class="row justify-content-md-center">
              <div class="form-group col-md-5">
                  <label><b>INE:</b> </label>
                  <label>{{ $emprendedor->INE }}</label>     
            </div>

                <div class="form-group col-md-5">
                    <label><b>Curp:</b> </label>
                    <label>{{ $emprendedor->CURP}}</label>
                 </div>
        </div>

        <div class="row justify-content-md-center">
              <div class="form-group col-md-5">
                  <label><b>Tipo de Empresa:</b> </label>
                   <label>{{ $emprendedor->TipoEmpresa }}</label>
                </div>
                    <div class="form-group col-md-5">
                        <label><b>Otra:</b> </label>
                        <label>{{ $emprendedor->TipoOtra}}</label>
                    </div>
        </div>

    
         <div class="row justify-content-md-center">
                        <div class="form-group col-md-5">
                              <label><b>Tipo de Persona:</b></label>
                              <label>{{ $emprendedor->TipoPersona }}</label>                      
                        </div>
    
    @if($emprendedor->TipoPersona==='Persona Moral') 
                       
                       <div class="form-group col-md-5">
                              <label><b>RFCM:</b> </label>
                              <label>{{ $emprendedor->RFCM }}"</label>                      
                        </div>  
         </div>            

          

        <div class="row justify-content-md-center">
                        <div class="form-group col-md-5">
                            <label><b>Razon social:</b> </label>
                            <label>{{ $emprendedor->RazonSocial }}</label>
            </div>
                        
                        <div class="form-group col-md-5">
                          <label><b>Objetivo Social:</b> </label>
                            <label>{{ $emprendedor->ObjetivoSocial}}</label>
                        </div>
        </div>

    @else
                       <div class="form-group col-md-5">
                             <label><b>RFC:</b> </label>
                           <label>{{ $emprendedor->RFC}}</label> 
                        </div>
        </div>            
    @endif 

 
    
        
    </div> 
    </div>     
   
   <div class="row  justify-content-md-center mt-3">
        <div class="col text-aling-center col-md-10">
           <h1 class="text-center">Tabla de Colaboradores</h1>
     <table class="table table-bordered table-hover table-reponsive mt-4">
               
        <thead class="table-info">
          <tr>  
              <th>Nombre Completo</th>
              <th>Curp</th>
          </tr> 
        </thead>

        <tbody>

          @forelse($colaborador as $colaboradores)
          <tr>
            <td>{{$colaboradores->NombreC}} {{ $colaboradores->ApellidoPC }} {{ $colaboradores->ApellidoMC }}</td>
            <td>{{ $colaboradores->CURPC }}</td>
          </tr> 
             @empty
          <td colspan="6" style="text-align: center;"><h4>No Hay Colaboradores Registrados</h4></td>
          @endforelse
               
        </tbody>

     </table>
  </div>
   </div>

  
  
   </div>