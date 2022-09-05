<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Front-End <?php echo date('Y-m-d');?> </title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
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
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100" alt="Projetos de e-commerce">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Vamos desenvolver um e-commerce?</h2>
                            <p>Conte com nossa equipe, atendemos mais de 1000 lojas virtuais!</p>
                            <a href="#" class="main-btn">Ver Portifólio</a>
                        </div>    
                    </div>   
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100" alt="Engenharia de Software">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Que tal tirar o projeto do papel?</h2>
                            <p>Nossa equipe está pronta para atendê-lo!</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>    
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100" alt="Manutenção em Software">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Você está buscando manutenção em seu software?</h2>
                            <p>Estamos disponíveis para resolver quaisquer eventualidades!</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>    
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> 
            </div>
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Sobre a Samuel's Agency</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="img/agencia.jpg" alt="Agencia hDC">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Uma Agência futurista!</h3>
                            <p>Nossos projetos são adaptados ao cliente e seu propósito.</p>
                            <p>Alinhamos seus desejos e ideais de forma que seja possível concretizá-los de maneira mais rápida e coerente ao mercado.</p>
                            <p>Buscamos não somente atendê-los com um serviço de exelência, mas também com um valor acessível a qualquer um que deseje entrar no mercado virtual.</p>
                            <p>Veja nossos diferênciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i>Utilização de Machine Learning</li>
                                <li><i class="fas fa-check"></i>Layout responsivo para todos os dispositivos</li>
                                <li><i class="fas fa-check"></i>Integração com diversos sistemas do mercado</li>
                                <li><i class="fas fa-check"></i>Sistema de pagamento próprio</li>
                                <li><i class="fas fa-check"></i>Desenvolvimnto com metodologia ágil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div id ="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nossas Especialidades</h3>
                        </div>
                        <div class="col-md-4 service-box">
                                <i class="fas fa-mobile-alt"></i>
                                <h4>Aplicativos Nativos</h4>
                                <p>Utilizamos o poder dos dispositivos móveis construindo aplicativos nativos.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                            <h4>E-commerces</h4>
                            <p>Nossa plataforma própia de e-commerce, adaptável à qualquer regra de negócio (B2B & B2C).</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-paint-brush"></i>
                            <h4>Design Criativo</h4>
                            <p>Nossos designers são especializados em UI/UX e possuem mais de 5 anos de experiência em mercado.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fab fa-google"></i>
                            <h4>Experts em SEO</h4>
                            <p>Nosso serviço de marketing aprovisionará seu mercado e customizará seus lucros.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-hands-helping"></i>
                            <h4>Suporte 24/7</h4>
                            <p>Você terá direito a equipe de suporte em diferentes plataformas. (chat, email, skype).</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-server"></i>
                            <h4>Experiência em servidores</h4>
                            <p>Garantimos rápido tempo de resposta do seu site para seu cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 circle-box">
                            <div id="circleA"></div>
                            <p>Projetos Entregues</p>                                                     
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleB"></div>
                            <p>Clientes Satisfeitos</p>                                                     
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleC"></div>
                            <p>Colaboradores</p>                                                     
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleD"></div>
                            <p>Projetos em Andamento</p>                                                     
                        </div>
                   </div>
                </div>
            </div>              
        </div> 
    </main>
    <script src="js/script.js"></script>
</body>