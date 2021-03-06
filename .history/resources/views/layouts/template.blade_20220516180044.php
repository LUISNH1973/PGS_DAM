<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bodegas NH</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->

        

        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">

                @if (Route::has('login'))
                <li class="nav-item">
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio') }}</a>
                </li>
               @endif

                <a class="navbar-brand" href="#page-top">BODEGAS NH</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Productos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Sobre Nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contacto</a></li>

                          <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesi??n') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img  src="assets\img\img_vinos\BodegasNH.jpg" alt="Bodegas NH">
                <p><h1>Sabores Nuevos</h1></p>
                <!-- Masthead Heading-->
                {{-- <h1 class="masthead-heading text-uppercase mb-0">BODEGAS NH</h1> --}}
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                {{-- <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p> --}}
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                
                <!-- Portfolio Section Heading-->

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Productos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                        <!-- Enlace/ruta con welcome para introducir imagenes de productos nuevos a trav??s de formulario -->
                {{-- @yield('content') --}}



               <!-- Portfolio Item 1-->
                  <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            {{-- <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="..." /> --}}
                            <img class="img-fluid" src="assets\img\img_vinos\Aurora.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets\img\img_vinos\Luisnh.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets\img\img_vinos\Cascajoso.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets\img\img_vinos\La_Atalaya.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets\img\img_vinos\La_Campi??a.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets\img\img_vinos\Los_Eucaliptos.jpg" alt="..." />
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
       
        <body style="background-color: rgb(156, 163, 146)">                    
        </body>

         <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre Nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Bodegas NH nace de un sue??o, crear una bodega rodeada de vi??edos, trasladando as?? el concepto de Ch??teau a mi tierra natal. Al  traspasar sus puertas sentir?? todo lo que me llev?? a construir esta bodega que es mi gran pasi??n por los vinos tintos y la siembra y conservaci??n de los vi??edos. </p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Enmarcado por un gran vi??edo se alza majestuoso el edificio de Bodegas NH, de piedra natural, con un p??rtico con siete arcos de medio punto, voladizos de madera y siller??a, su gran escalinata de pizarra hace que se eleve para contemplar la perfecta fusi??n entre vi??edo y arquitectura. </p></div>
                    <img src="assets\img\img_vinos\Nuestros_vi??edos.jpg" alt="Nuestros vinos" width width="00px" height="500px">
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://www.google.com/maps/uv?pb=!1s0xd4ff85720fa63cb%3A0xc1a58b086695fcab!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipP7vEOYXiugBIjKSx_S_myyfCIGum1Qj6UNcawB%3Dw394-h160-k-no!5sbodegas%20el%20campillo%20-%20Buscar%20con%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipP7vEOYXiugBIjKSx_S_myyfCIGum1Qj6UNcawB&hl=es&sa=X&ved=2ahUKEwjx8Imdi7L3AhUsyIUKHazVBrEQoip6BAhnEAM#">
                        <i class="fas fa-download me-2"></i>
                        BODEGAS NH
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">

            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cont??ctame</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es necesario.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Direcci??n Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">El email es necesario.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">el email no es correcto.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">N??mero de Tel??fono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">El n??mero de tel??fono es necesario.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensage</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es necesario.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Envio de formulario correcto!</div>
                                    Se constestar?? en el menor tiempo posible
                                    <br />
                                    <a href="https://www.bodegascampillo.com/">https://BodegasNH.com</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error de envio de mensaje!</div></div>

                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localizaci??n</h4>
                        <p class="lead mb-0">
                            41430 EL CAMPILLO (SEVILLA)
                            <br />
                            Luis Naranjo Hans
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Informaci??n en la  Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://es-es.facebook.com/"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/iniciarsesion?lang=es"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://es.linkedin.com/"><i class="fab fa-fw fa-linkedin-in"></i></a> 
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Historia BODEGAS NH</h4>
                        <p class="lead mb-0">
                           Somos una pequena empresa dedicada a la elaboraci??n de vinos tintos ecol??gicos en una zona compleja como es la campi??a sevillana
                            <a href="https://www.emiliomoro.com">BODEGAS NH</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; BODEGA NH 2022</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Aurora</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets\img\img_vinos\Aurora.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">El vino Aurora tiene un color rojo cereza muy cubierto, con intensos ribetes p??rpura. En nariz nos sorprende con aromas a uva reci??n fermentada. Es intenso y muy afrutado con los primarios del tempranillo en su versi??n m??s natural, mora y regaliz.</p>
                                    <button  data-bs-dismiss="modal">
                                        <ul class="navbar-nav ms-auto">
                                        <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Cont??ctame</a></li>
                                     </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Luis NH</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets\img\img_vinos\Luisnh.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">El vino rojo rub??, de alta intensidad, limpio, brillante y con presencia de l??grima. Notas de uva negra madura y crianza en barricas nobles, con aromas de pimienta negra, clavo y chocolate. En boca es largo, con peso y presencia del terroir. Compleja retronasal con recuerdos frutales.</p>
                                   
                                    <button  data-bs-dismiss="modal">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px- px-lg-3 rounded" href="#contact">Cont??ctame</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">El Cascajoso</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets\img\img_vinos\Cascajoso.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">El cascajoso es un vino tinto elaborado siguiendo los principios de la agricultura ecol??gica.  Tratamientos de origen vegetal, levaduras aut??ctonas y un proceso de fermentaci??n un tanto peculiar que dieron como resultado un vino afrutado y potente, apto para veganos.</p>
                                    <button  data-bs-dismiss="modal">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px- px-lg-3 rounded" href="#contact">Cont??ctame</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">La Atalaya</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets\img\img_vinos\La_Atalaya.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">La Atalaya es un vino de capa alta, color cereza oscura y un ribete de tonalidad teja. Rico e intense en nariz, predomina la fruta negra con un fondo de aromas de especias, vainilla, chocolate y caja de puros. Es armonioso y equilibrado, con un complejo retrogusto.</p>
                                    <button  data-bs-dismiss="modal">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px- px-lg-3 rounded" href="#contact">Cont??ctame</a></li>
                                        </ul>
                                        
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">La Campi??a</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets\img\img_vinos\La_Campi??a.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">La Campi??a es un vino de color rojo intenso con ribetes morados. En nariz es muy expresivo y fresco apreciando notas de frutas rojas maduras como grosella, mora o ciruela. En la boca se muestra amable y sedoso con una acidez equilibrada, estructura generosa y presentando un tanino goloso.</p>
                                    <button  data-bs-dismiss="modal">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px- px-lg-3 rounded" href="#contact">Cont??ctame</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Los Eucaliptos</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets\img\img_vinos\Los_Eucaliptos.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Vino de color rojo cereza con capa alta. Aromas a mora y regaliz con notas de clavo y grafito. Vivo en boca con sensaci??n de ciruelas, bals??mica y mineral. Compa??ero de ahumados, quesos blandos y comida internacional.</p>
                                    <button  data-bs-dismiss="modal">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px- px-lg-3 rounded" href="#contact">Cont??ctame</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

       
       
       
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
