@extends('asesor')

@section('contenido')

  <header>
      
  </header>


  <main>
    <div class="container">
      <!-- Seccion Portafolio -->
      <div class="row jumbotron border rounded-top shadow">
        <div class="col">
           <div class="row justify-content-center">
             <div class="col">
               <h2 class="text-center bg-primary rounded"> Bienvenido asesor {{ auth()->user()->name }}</h2> 
             </div>
           </div>

           <div class="row mt-5">
             <div class="col-12 col-sm-8">
               <div class="card">
                  <div class="card-body shadow bg-info rounded" style="opacity:0.9">
                      <p>En el panel lateral izquierdo encuntras las opciones que necesitas para llevar a cabo la asesoria.</p>

                      <ul>
                        <li><p><b>Perfil: </b> Aqui encuentras toda la informacion relevante a tu perfil</p></li>
                        <li><p><b>Consultar Proyectos:</b> Podras ver los proyectos que estas asesorando, consultar los avances de entrega y ver los datos con los cuales se dio de alta el emprendedor que desarroya el proyecto.<p></p></li>
                        <li><p><b>Chat: </b> Esta es la mensajeria instantanea de la plataforma web, te puedes comunicar con cualquier usuario registrado.</p></li> 
                        <li><p><b>Historial de Proyectos: </b>En esta vista podra ver los proyectos que estan siendo cursado, los que se han aprobado y los que no fueron aprobados.</p></li> 
                      </ul>

                  </div>
                </div>
             </div>

             <div class="col-12 col-sm-4 col-md">
               <div class="card rounded" style="width: 18rem;">
                  <img class="rounded-circle" src="img/platon.jpg" height="180px"  alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">"La educación y la enseñanza mejoran a los buenos y hacen buenos a los malos."<blockquote class="blockquote text-center"> <cite title="Platon">Platón</cite></p></blockquote>
                    </div>
                    <div class="card-footer text-center">Filosofo Griego <small>(427 AC - 347 AC)</small></div>
              </div>
             </div>
           </div>  
        </div>
    </div>
         
</div>
     
 
  </main>

 

@endsection