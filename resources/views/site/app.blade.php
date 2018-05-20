<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecotech</title>
    <meta name="description" content="Aqui seu lixo eletrônico é sustentável!">
    <meta name="keywords" content="tecnologia, lixo, reciclagem, eletrônico, ">
    
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{url('site/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{url('site/css/style.min.css')}}">
    <link rel="stylesheet" href="{{url('site/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="{{url('site/js/vendor/html5shiv.min.js')}}"></script>
      <script src="{{url('site/js/vendor/respond.min.js')}}"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo">Ecotech</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="/">Home</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Conecte-se</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
    <!-- END: header -->
    <div class="probootstrap-main-content">
        <!-- Slides -->
        <section class="probootstrap-slider flexslider">
            <ul class="slides">
                <!-- class="overlay" -->
            <li style="background-image: url(site/img/slider_1.jpg);">
                <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="probootstrap-slider-text text-center">
                        <h1 class="probootstrap-heading probootstrap-animate mb20">Você sabe o que fazer com seus eletrônicos sem uso</h1>
                        <div class="probootstrap-animate probootstrap-sub-wrap mb30">Seja sustentável e consciente com seu lixo eletrônico</div>
                        <p class="probootstrap-animate"><a href="#locate" class="btn btn-ghost btn-ghost-white">Encontre Pontos de Coleta</a></p>
                    </div>
                    </div>
                </div>
                </div>
            </li>
            <!-- class="overlay" -->
            <li style="background-image: url(site/img/slider_5.jpg);">
                <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="probootstrap-slider-text text-center">
                        <h1 class="probootstrap-heading probootstrap-animate mb20">Já pensou em doar o que não precisa mais?</h1>
                        <div class="probootstrap-animate probootstrap-sub-wrap mb30">Ecotech encontra o melhor destino para seu lixo eletrônico</div>
                        <p class="probootstrap-animate"><a href="#" class="btn btn-ghost btn-ghost-white">Encontre Pontos de Coleta</a></p>
                    </div>
                    </div>
                </div>
                </div>
            </li>
            </ul>
        </section>

        <!-- Conteúdo -->
        @yield('content')
        
    </div>

    <div class="probootstrap-footer-spacer"></div>
    <footer class="probootstrap-footer">
      <div class="probootstrap-footer-section">
        <div class="container">
          <div class="row mb80">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
              <h3>Sobre nós</h3>
              <p>Empresa Ecologia e Auto Sustentável que Coleta, Trata e Remove Lixo Eletrônico do meio Ambiente!</p>
              <p><a href="#" class="btn btn-ghost btn-ghost-white btn-sm">Rolar para Cima</a></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-link-wrap probootstrap-footer-widget">
                <h3>Serviços</h3>
                <ul>
                  <li><a href="#">Reciclagem de Eletrônicos</a></li>
                  <li><a href="#">Remoção de Lixo eletrônico do meio ambiente</a></li>
                  <li><a href="#">Revenda de Produtos Reciclados</a></li>
                  <li><a href="#">Projetos Sociais realizados pela Reciclagem de Lixo Eletrônico</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Conecte-se conosco</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <p class="text-center">&copy; Ecotech. Designed w/ <i class="icon-heart2"></i> by <a href="https://ecotech.herokuapp.com/">ecotech.herokuapp.com</a></p>
          </div>
        </div>
      </div>
    </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="{{url('site/js/scripts.min.js')}}"></script>
  <script src="{{url('site/js/main.min.js')}}"></script>
  <script src="{{url('site/js/custom.js')}}"></script>

  </body>
</html>