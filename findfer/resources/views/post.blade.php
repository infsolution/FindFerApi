<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="FindFer, plataforma de marketing e vendas para feiras livres">
        <meta name="keywords" content="Feiras livres, Feiras, localização de feiras, vendas online, solicitar desconto em feiras, FindFer, app de feiras"/>
        <meta name="robots" content="index, follow">
        <meta name="author" content="FindFer.com.br">

        <title>FindFer</title>

        <!-- Fonts -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/modern-business.css" rel="stylesheet">
    </head>
      <body>

    <!-- Navigation -->
       <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">FindFer</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/aboult') }}">O que é a FindFer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/services') }}"">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contacts') }}">Contatos</a>
            </li>
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
              </div>
            </li-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                FindFer nas Redes
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" target="_blank" href="https://www.facebook.com/findfer/">Facebook</a>
                <a class="dropdown-item" target="_blank" href="https://www.youtube.com/channel/UC2yIqqTy7E6HO6fQm9ehxPw">You Tube</a>
                <!--a class="dropdown-item" href="404.html">Instagran</a>
                <a class="dropdown-item" href="pricing.html">Twiter</a-->
                <a class="dropdown-item" href="faq.html">FAQ</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://i.imgur.com/FTrYP2Q.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>FindFer</h3>
              <p>Conectando feirantes e cliente</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://i.imgur.com/VMzsBTc.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Pesquisa de Campo</h3>
              <p>FindeFer em pesquisa de campo sabendo a opnião de feirantes</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://i.imgur.com/nHQIL9Y.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <!--h3>Third Slide</h3>
              <p>This is a description for the third slide.</p-->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

       @yield('conteudo')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; {{ config('app.name') }} 2017 - {{date('Y')}}</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'description' );
    </script>

  </body>
</html>
