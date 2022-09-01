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
        <div class="conteiner" id="nav-conteiner">
            <nav class="navbar navbr-expand-lg fixed-top">
                    <a href="#" class="navbar-brand">
                    <img src="img/hdcagency_logo.svg" alt="hDC Agency"> Samuel's Agency
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                        aria-controls="navbar-links" aria-expanded="true" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span>
                    </button> 
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a href="nav-item nav-link" id="home-menu">Home</a>
                        <a href="nav-item nav-link" id="about-menu">A agência</a>
                        <a href="nav-item nav-link" id="services-menu">Serviços</a>
                        <a href="nav-item nav-link" id="team-menu">Time</a>
                        <a href="nav-item nav-link" id="portifolio-menu">Projetos</a>
                        <a href="nav-item nav-link" id="contact-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">FUNCIONOU</a>
    <a href="nav-item nav-link" id="home-menu">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <h1> Working! </h1>
    <script src="js/script.js"></script>
</body>
</html>

