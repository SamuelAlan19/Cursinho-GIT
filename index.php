<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Front-End <?php echo date('Y-m-d');?> </title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    <!-- Script -->
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>   
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/22bd473149.js" crossorigin="anonymous"></script>
   <!-- Progress Bar-->
    <script src="js/progressbar.min.js"></script>
    <!--Parallax-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>
<body>
    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                    <a href="#" class="navbar-brand">
                        <img class="logo" src="img/hdcagency_logo.svg" alt="hDC Agency"> Samuel's Agency
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                        aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu">Home</a>
                        <a class="nav-item nav-link" id="about-menu">A agência</a>
                        <a class="nav-item nav-link" id="services-menu">Serviços</a>
                        <a class="nav-item nav-link" id="team-menu">Time</a>
                        <a class="nav-item nav-link" id="portifolio-menu">Projetos</a>
                        <a class="nav-item nav-link" id="contact-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class ="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100" alt="Projetos de e-commerce" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Vamos criar um e-commerce?</h2>
                            <p>Conte com nossa equipe, atendemos mais de 1000 lojas virtuais!</p>
                            <a href="#" class="main-btn">Ver Portifólio</a>
                        </div>    
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100" alt="Engenharia de Software" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Que tal tirar o projeto do papel?</h2>
                            <p>Nossa equipe está pronta para atendê-lo!</p>
                            <a href="#" class="main-btn">Entre em contato!</a>
                        </div>    
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100" alt="Manutenção em Software" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Você está buscando manutenção em seu software?</h2>
                            <p>Estamos disponíveis para resolver quaiquer eventualidades!</p>
                            <a href="#" class="main-btn">Entre em contato!</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>