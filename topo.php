<!DOCTYPE html>
<?php
    $HOST = '/glossMakeup/';
?>
<html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154870734-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-154870734-1');
        </script>

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
        <link href="css/multislider.css" rel="stylesheet">
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
                    <?php
                            $array_uri = explode('/', $_SERVER['SCRIPT_NAME'].'/');
                            if (in_array('index.php', $array_uri)) {
                                $HOST = '';
                            }
                            ?>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" id="my-navigation" data-in="fadeInDown" data-out="fadeOutUp">
                            <li  class="scroll"><a href="<?php echo $HOST ?>#home">Home</a></li>
                            <li class="scroll"><a href="<?php echo $HOST ?>#produtos">Top 10</a></li>
                            <li class="scroll"><a href="<?php echo $HOST ?>#sobre">Quem somos</a></li>
                            <li class="scroll"><a href="<?php echo $HOST ?>#contact">Contato</a></li>
                            <li class="scroll"><a href="<?php echo $HOST ?>loja.php">Loja</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>   
            </nav>
            <!-- End Navigation -->
<?php 