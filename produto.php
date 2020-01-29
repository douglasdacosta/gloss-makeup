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
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title-produto"><?php echo $titulo ?></h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="texto-preco">
                    <img src="img/produtos/<?php echo $img ?>" class="img-responsive img-rounded" alt="Responsive image" alt="<?php echo $titulo ?>"/>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="texto-preco">
                    <h1> <p class="texto-preto">
                            Preço Único R$10,00
                        </p>
                    </h1>

                    <h6><p class="texto-preto">Praça Coronel Cardoso Franco 1A, Piratininga</p></h6>

                    <h4><p class="texto-preto">@GLOSSMAKEYPBR</p></h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">   
                    <div class="row-heading">
                        <h2><div class="title-produto">Cadastre-se</div> <span>Aqui!</span></h2>
                    </div>
                    <div class="container">
                        <div class="col-sm-5">
                            <div class="row contact-form">
                                <form name="cadastroForm" id="cadastroForm" action="cadastroEmail.php" method="POST" novalidate>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Seu nome *" id="nome" name="nome" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>    
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Telefone (WhatsApp)*" id="telefone" name="telefone" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Qual sua idade? *" name="idade" id="idade">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <p class="title-produto">Ao clicar no botão "Cadastrar" eu declaro<br> que aceito as condições de <br>Termos de Uso e Política de Privacidade</p>
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
    </section>    
    <div class="row">
        <div class="row-heading descricao-produto">
            <h4> <p style="color:#ffffff;" ><?php echo $descricao ?></p></h4>
        </div>
    </div>
</div>
<?php
include_once './rodape.php';
