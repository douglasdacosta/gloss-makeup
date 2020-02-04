<?php
if(isset($_POST) ? $_POST : '')
 extract($_POST);

 $nome = $_POST['name'];
 $email = $_POST['email'];
 $telefone = $_POST['phone']; 
 $assunto = $_POST['subject'];
 $mensagem = $_POST['message'];
 
 $email_remetente = "zoroopk@gmail.com"; 
 $email_destinatario = $email;
 $email_assunto = "Mensagem via site Gloss-MakeUp";
 
 $email_conteudo =
'<html>
    <body>
      <table border="1">
        <tr>
          <td>Nome:</td><td>'.$nome.'</td>
        </tr>
        <tr>
          <td>Email:</td><td>'.$email.'</td>
        </tr>
        <tr>
          <td>Telefone:</td><td>'.$telefone.'</td>
        </tr>
        <tr>
          <td>Assunto:</td><td>'.$assunto.'</td>
        </tr>
        <tr>
          <td>Mensage:</td><td>'.$mensagem.'</td>
        </tr>
      </table>
    </body>
</html>';
 

include_once './topo.php';
?>
<section class="screen">
    <div class="row banner-text">
        <?php
$email_headers = implode ( "\n",array ( "From: $email_remetente", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
if(mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)) {
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