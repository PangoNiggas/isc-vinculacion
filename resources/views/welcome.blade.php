<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenido</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700" rel="stylesheet"> 
    </head>

  <body id="page-top">
  <div id="app"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
      @if (Route::has('login'))
          <ul class="navbar-nav text-uppercase ml-auto">
              @auth
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link btn">Home</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link btn" data-toggle="modal" data-target="#login">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn" data-toggle="modal" data-target="#register">Registrarse</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link btn" href="#services">Beneficios</a>
            </li>
            @endauth  
          </ul>
       @endif
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Preincubación de Planes de Negocio</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Cuentame mas</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Beneficios</h2>
            <h3 class="section-subheading text-muted">Algunas de las ventajas de esta plataforma: </h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Crecimiento</h4>
            <p class="text-muted" style="text-align : justify;">Esta plataforma ayuda a mejorar el índice de rentabilidad y crecimiento de tus proyectos, ademas te brinda capacitación con ayuda de asesores especializados</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Diseño Responsivo</h4>
            <p class="text-muted">Este sistema esta pensado para poder utilizarlo en tu computadora y hasta desde cualquier dispositivo movil.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Privacidad</h4>
            <p class="text-muted">Podras acceder a la plataforma con tu correo y contraseña y tus datos siempre estaran protegidos.</p>
          </div>
        </div>
      </div>
    </section>

   <!-- Modal de Inicio de sesion-->
  <div class="container">    
    <div class="row">
    <!-- The Modal -->
     <div class="modal fade" id="login">
         <div class="modal-dialog">
             <div class="modal-content">
                  
                <!-- Modal Header -->
                     <div class="modal-header input-group-text">
                       <h4 class="modal-title">Bienvenido</h4>
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     
                     <!-- Modal body -->
                     <div class="modal-body">
                       <div class="container-fluid">
                                 <div class="row">
                                     <div class="col">
                                         <form method="POST" action="{{ route('login') }}">
                                             {{ csrf_field() }}
                                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                 <label for="email" class="col-md-8 control-label">Correo Electronico</label>
                     
                                                 <div class="col-md-6">
                                                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                     
                                                     @if ($errors->has('email'))
                                                         <span class="help-block">
                                                             <strong>{{ $errors->first('email') }}</strong>
                                                         </span>
                                                     @endif
                                                 </div>
                                             </div>
                     
                                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                 <label for="password" class="col-md-4 control-label">Contraseña</label>
                     
                                                 <div class="col-md-6">
                                                     <input id="password" type="password" class="form-control" name="password" required>
                     
                                                     @if ($errors->has('password'))
                                                         <span class="help-block">
                                                             <strong>{{ $errors->first('password') }}</strong>
                                                         </span>
                                                     @endif
                                                 </div>
                                             </div>
                     
                                             <div class="form-group">
                                                 <div class="col-md-6 col-md-offset-4">
                                                     <div class="checkbox">
                                                         <label>
                                                             <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                                                         </label>
                                                     </div>
                                                 </div>
                                             </div>
                     
                                             <div class="form-group">
                                                 <div class="col-md-8 col-md-offset-4">
                                                     <button type="submit" class="btn btn-primary">
                                                         Entrar
                                                     </button>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                         </div>
                     </div>
                     
                     <!-- Modal footer -->
                     <div class="modal-footer">
                       <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>-->
                          <div class="col-12 text-center">
                              <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu Contraseña?</a>
                     </div>
                     
                   </div> 
                    
             </div>
         </div>
     </div>
  </div>
  
    <div class="row">
    <!-- The Modal -->
      <div class="modal fade" id="register">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header input-group-text">
                   <h4 class="modal-title">Registro</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
                
                    <!-- Modal body -->
                      <div class="modal-body">
                        <div class="container">
                          <div class="row">
                              <div class="col">
                                  <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                      @csrf
              
                                      <div class="form-group row">
                                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
              
                                          <div class="col-md-6">
                                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre de usuario">
              
                                              @if ($errors->has('name'))
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('name') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>
              
                                      <div class="form-group row">
                                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>
              
                                          <div class="col-md-6">
                                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
              
                                              @if ($errors->has('email'))
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('email') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>
              
                                      <div class="form-group row">
                                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
              
                                          <div class="col-md-6">
                                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              
                                              @if ($errors->has('password'))
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('password') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>
              
                                      <div class="form-group row">
                                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
              
                                          <div class="col-md-6">
                                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                          </div>
                                      </div>
              
                                      <div class="form-group row mb-0">
                                          <div class="col-md-6 offset-md-4">
                                              <button type="submit" class="btn btn-primary">
                                                  {{ __('Registrarse') }}
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                       </div>
                      </div>             
                       <div class="modal-footer">
                           <div class="col-12 text-center">
                               {{-- <a class="text-center" href="">¿Olvidaste tu Contrasena?</a> --}}
                           </div>
                       </div>   
                 </div>
            </div>
        </div>
   </div>
</div>






    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; 2019 - Instituto Tecnológico de Tuxtla Gutierrez, Chiapas, México.  All rights reserved</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.twitter.com">
                    <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com">
                    <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.likedin.com">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#"  style="color:black">Politicas de privacidad</a>
              </li>
              <li class="list-inline-item">
                <a href="#"  style="color:black">Terminos de uso</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

   
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/agency.js')}}"></script>

  </body>

</html>
