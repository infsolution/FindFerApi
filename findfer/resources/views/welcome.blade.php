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

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"-->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/modern-business.css" rel="stylesheet">

        <!-- Styles -->
        <!--style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style-->
    </head>
      <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
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

      <h1 class="my-4">Bem vindo à FindFer</h1>

      <!-- Marketing Icons Section -->
      <!--div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div-->
      <!-- /.row -->

      <!-- Portfolio Section -->
      <!--h2>Portfolio Heading</h2-->

      <div class="row">
        @if(isset($posts))
            @foreach($posts as $post)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                    <a href="/post/{{$post->id}}"><img class="card-img-top" src="{{$post->url_image}}" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="/post/{{$post->id}}">{{$post->title}}</a>
                      </h4>
                      <p class="card-text">{{$post->content}}</p>
                    </div>
                    <!--div class="card-footer">
                      <a href="#" class="btn btn-primary">Learn More</a>
                    </div-->
                  </div>
                </div>
            @endforeach
        @endif 
     </div>          
        <!--div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://i.imgur.com/UrCRzSN.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Mapa com localização das Feiras</a>
              </h4>
              <p class="card-text">O app FindFer dispõe de uma sistema de mapas onde o cliente pode encontrar as feiras mais próximas de sua localização , além de todas as feiras cadastradas na plataforma, facilitando a localização de bancas e produtos.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://i.imgur.com/XkHeQWo.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Opções de negociação para o cliente</a>
              </h4>
              <p class="card-text">O app FindFer permite que os clientes enviem à plataforma solicitações de PROMOÇÕES, que é uma forma de o cliente negociar com os feirantes, pedindo que os mesmos disponibilizem produtos do seu interesse a um preço específico.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://i.imgur.com/fx4FDwl.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Fidelização e aumento nas vendas</a>
              </h4>
              <p class="card-text">A partir da divulgação de seus produtos os feirantes podem atrair mais clientes para as feiras livres e seus estabelecimentos, pois quando o cliente está bem informado sobre produtos e sua localização exata, surge maior interesse em comprar.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://i.imgur.com/urZUMYl.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Vendas pela plataforma</a>
              </h4>
              <p class="card-text">A plataforma FindFer permite que os feirantes comercializem seus produtos direto do aplicativo, gerando comodidade para clientes que podem pagar com cartão de crédito ou débito.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://i.imgur.com/hzcW8mA.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">O cliente recebe seu produto em casa</a>
              </h4>
              <p class="card-text">O cliente pode escolher em ir buscar o produto na banca ou receber em casa de forma cômoda e segura,  em um tempo determinado e a qualidade dos produtos garantida.</p>
            </div>
          </div>
        </div>
      </div-->
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Plataforma Marketing e Vendas</h2>
          <p>A FindFer disponiliza uma gama de soluções para os feirantes e seus cliente</p>
          <ul>
            <li>
              <strong>Divulgação de produtos</strong>
            </li>
            <li>
              <strong>Localização de Feiras e cada banca</strong>
            </li>
            <li>
              <strong>Negociação com cliente</strong>
            </li>
            <li>
              <strong>Vendas na plataforma</strong>
            </li>
            <li>
              <strong>Entra com rapidez e gualidade garantida</strong>
            </li>
            <li>
              <strong>Marketing direto</strong>
            </li>
          </ul>
          <p>Uma plataforma completa para ajudar os feirantes a aumentarem suas vendas e satisfazer as mais variadas necessidades de seus clientes.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="https://i.imgur.com/D94aOo1.png" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <!--div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
      </div>

    </div-->
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

  </body>
</html>
