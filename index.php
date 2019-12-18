<?php
include_once './topo.php';
?>

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
                            <h2>Cadastre-se <span>Aqui!</span></h2>
                            <p> Receba mais informações via e-mail e sms e 
                                ganhe desconto em sua primeira compra!</p>
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
                                        <button type="submit" class="btn btn-success btn-caption btn-cadastro submit">Enviar Cadastro</button>
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
                <h1>Faça seu cadastro, ganhe descontos e venha nos visitar em nossa loja fisica.</h1>
            </div>
            <div class="col-md-7 col-sm-12">
                <ul class="footer-social-pro">
                    <li class="facebook"><a href="https://www.facebook.com/glossmakeupbr/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/glossmakeupbr/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="whatsapp"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5514997408549" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                    <li class="marker"><a href="https://www.google.com/maps/search/?api=1&query=47.5951518,-122.3316393" =target="_blank"><i class="fa fa-map-marker"></i></a></li>
                </ul>
            </div>
            <div class="col-md-7 col-sm-12">
                <h5><p>Endereço Loja fisica : Praça Coronel Cardoso Frango 1A, Piratininga - Sp</p></h5>

            </div>
        </div>
    </div>

</div>

<?php include 'dados_produtos.php'; ?>
<section class="screen" id="produtos">
    <div class="row">
        <div id="mixedSlider">
            <div class="MS-content">
                <?php
                foreach ($produtos as $key => $produto) {
                    extract($produto);
                    ?>
                    <div class="item">
                        <div class="imgTitle">
                            <h4 class="blogTitle"><?php echo $titulo ?></h4>
                            <img src="img/produtos/<?php echo $img ?>" class="tamanho-img" alt="<?php echo $titulo ?>" />
                        </div>
                        <div class="detalhes"><?php echo substr($descricao, 0, 60) ?>...<a href="produto.php?id=<?php echo $key ?>"><i class="ver-mais">Ver mais <i class="fa fa-angle-double-right"></i></i></a></div>
                    </div>
                    <?php
                }
                ?>


            </div>
            <div class="MS-controls">
                <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
</section>
<!-- app screen-->
<section class="screen" id="sobre">
    <div class="container">
        <div class="row">
            <div class="row-heading">
                <h2>Sobre a <span >Gloss</span> <span class="font-black">Makeup</span></h2>
                <p>A Gloss Makeup nasceu de um sonho em 2019 com o intuito de satisfazer todas as clientes com os melhores produtos, prazo de entrega, atendimento e o melhor, PREÇO ÚNICO. 
                    Desde então a gente tenta ser a loja de maquiagem que você sempre sonhou em encontrar. <i class="fa fa-heart"></i>
                </p><p>                                
                <h2>Missão</h2> 
            </p><p> 

            A nossa missão é levar maquiagem com qualidade e o melhor, preço único até você com todo amor em forma de caixinha.

            Seja muito bem vinda a nossa loja! <i class="fa fa-heart"></i></p>
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
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-success btn-caption btn-contact submit pull-right">Enviar Mensagem</button>
                </form>
            </div>
        </div>	
    </div>
</section>
<!--./End contact form-->
<?php
include_once './rodape.php';
