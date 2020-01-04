<?php
extract($_POST);
include_once './conectar.php';
$sql = "insert into contatos values (default, '$nome', '$email', '$telefone', '$idade')";
$insert = mysqli_query($connect, $sql);

include_once './topo.php';
?>
<section class="screen">
    <div class="row banner-text">
        <?php
        if ($insert) {
            ?>
            <p><span>Obrigado pelo cadastro, você será redirecionado em instantes!</span></p>
            <?php
            echo " <meta http-equiv='refresh' content='5;URL=index.php'>";
        } else {
            ?>
            <p><span>Ocorreu um ERRO ao enviar as informações, verifique os dados e tente novamente.</span></p>
            <p><span>Você será redirecionado em instantes!</span></p>
            <?php
            echo " <meta http-equiv='refresh' content='5;URL=index.php'>";
        }
        ?>
    </div>
</section>
<?php
include_once './rodape.php';
