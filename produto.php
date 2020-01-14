<?php
include_once './topo.php';
include 'dados_produtos.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$img = $produtos[$id]['img'];
$titulo = $produtos[$id]['titulo'];
$descricao = $produtos[$id]['descricao'];
?>
<div class="banner" id="home" style="background:url(img/banner.png) no-repeat;">    
    <section class="screen" id="produtos">
        <div class="row">
            <div class="col-sm-4">
                <br><br><br><br><br><br>
                <img src="img/produtos/<?php echo $img ?>" class="img-responsive img-rounded" alt="Responsive image" alt="<?php echo $titulo ?>"/>
            </div>
            <div class="col-sm-4">
                <br>
                 <div class="row">
                        <div class="row-heading">
                            <h3 <p style="color:#ffffff;" class="blogTitle"><?php echo $titulo ?></p></h3>
                        </div>
                    </div>
                <img src="img/produtos/../produtos/banne.jpeg" class="img-responsive"/>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <div class="banner-caption">		
                        <div class="col-md-5">
                            <div class="row">   
                                <div class="row-heading">
                                    <h2>Cadastre-se <span>Aqui!</span></h2>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row-heading">
                    <h4> <p style="color:#ffffff;" ><?php echo $descricao ?></p></h4>
                </div>
            </div>

    </section>
</div>
<?php
include_once './rodape.php';
