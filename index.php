<!DOCTYPE html>
<html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Appley is a Responsive HTML5 CSS3 Theme perfect for your business and presentation of your application.">
        <meta name="keywords" content="Software, Html5, Responsive Template, Landing Page, Landing Template, Bootstrap Responsive Template, Bottstrap Design, App, App Template">
        <meta name="robots" content="index,follow">

        <title>Gloss Makeup</title>

        <!-- All Plugins Css -->
        <link href="css/plugins.css" rel="stylesheet">

        <!-- Custom style -->
        <link href="css/overwrite.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="wrapper">  
            <!-- Start Navigation -->
            <nav class="navbar navbar-default navbar-fixed white bootsnav on no-full">

                <div class="container">            
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand"><img src="img/logo.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Begin: Navbar Section -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" id="my-navigation" data-in="fadeInDown" data-out="fadeOutUp">
                            <li  class="active scroll"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#produtos">Top 20</a></li>
                            <!--<li class="scroll"><a href="#services">Services</a></li>-->
                            <!--<li class="scroll"><a href="#pricing">Pricing</a></li>-->
                            <li class="scroll"><a href="#sobre">Quem somos</a></li>
                            <li class="scroll"><a href="#contact">Contato</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>   
            </nav>
            <!-- End Navigation -->

            <div class="clearfix"></div>
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="banner" id="home" style="background:url(img/banner.png) no-repeat;">  
                <!-- Wrapper for carousel items -->
                <div class="container">
                    <div class="banner-caption">		
                        <div class="col-md-5">
                            <section class="contact dark" id="Contato">
                                <div class="row">
                                    <div class="row-heading">
                                        <h2>Se Cadastre <span>Aqui!</span></h2>
                                        <p>Ganhe desconto em sua primeira compra!</p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="row contact-form">
                                            <form name="cadastroForm" id="cadastroForm" novalidate>
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Seu nome *" id="name" required data-validation-required-message="Please enter your name.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <input type="tel" class="form-control" placeholder="Telefone (WhatsApp)*" id="phone" required data-validation-required-message="Please enter your phone number.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"  placeholder="Qual sua idade? *" id="subject">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div id="success"></div>
                                                    <button type="submit" class="btn btn-success btn-caption submit">Cadastrar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>	
                                </div>
                            </section>
                            <!--<img src="img/iphone.png" class="img-responsive" alt="iphone" />-->
                        </div>
                        <div class="col-md-7 col-sm-12 banner-text hidden-sm hidden-xs">
                            <h1>No lançamento do nosso site.</h1>
                            <h1>&nbsp;</h1>
                            <h1>Faça seu cadastro, ganhe descontos e venha nos visitar.</h1>
                        </div>
                    </div>
                </div>
            </div>


            <section class="screen" id="produtos">
                <div class="row">
                    <div id="app-screen" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="img/screen-1.png" class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="img/screen-2.png" class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="img/screen-3.png" class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="img/screen-4.png" class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="img/screen-5.png" class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="img/screen-2.png" class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="img/screen-1.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="customNavigation">
                        <a class="btn prev"><i class="fa fa-arrow-left"></i></a>
                        <a class="btn next"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>
            <!-- app screen-->
            <section class="screen" id="sobre">
                <div class="container">
                    <div class="row">
                        <div class="row-heading">
                            <h2>Sobre a <span>Gloss</span>Makeup</h2>
                            <p>Preciso de um texto para colocar aqui, falar um pouco sobre a loja.</p>
                        </div>
                    </div>

                </div>
            </section>
            <!--.End app sreen-->

            <!-- contact form-->
            <section class="contact dark" id="contact">
                <div class="row">
                    <div class="row-heading">
                        <h2>Entre em <span>Contato</span></h2>
                        <p>Retornaremos o mais breve possível</p>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-10 col-sm-12 col-md-offset-1">
                        <div class="row contact-form">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Assunto *" id="subject">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Sua Mensagem *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-success btn-caption submit">Enviar Mensagem</button>
                                </div>
                            </form>
                        </div>
                    </div>	
                </div>
            </section>
            <!--./End contact form-->

            <!-- footer -->
            <footer>
                <div class="container">
                    <div class="footer-widget">
                        <div class="footer-social">
                            <ul class="footer-social-pro">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <!--<li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                                <!--<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                <!--<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <ul class="footer-navi">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#produtos">Produtos</a></li>
                                <li><a href="#sobre">Sobre</a></li>
                                <li><a href="#contact">Contato</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-copy">
                            <p>Copyright@ <?php echo date('Y') ?> Desenovlvido por <a href="https://mdmarketindigital.com.br">MD Marketing digital</a></p>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Video Popup -->
            <div class="modal fade" id="my-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/JNF0moyNw_A" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Video Popup --> 



            <!-- START JAVASCRIPT -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/owl.carousel.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- Place this tag in your head or just before your close body tag. -->
            <!-- contact js-->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>

            <script async="" defer="" src="js/buttons.js"></script>
            <script src="js/bootsnav.js"></script>
            <script src="js/custom.js"></script>

            <script type="text/javascript">
                $('.navbar-nav a').click(function () {
                    $('html, body').animate({
                        scrollTop: $($(this).attr('href')).offset().top
                    }, 800);
                    return false;
                });
            </script>
            <script type="text/javascript">
                $('.footer-navi a').click(function () {
                    $('html, body').animate({
                        scrollTop: $($(this).attr('href')).offset().top
                    }, 800);
                    return false;
                });
            </script>
        </div>
    </body>
</html>