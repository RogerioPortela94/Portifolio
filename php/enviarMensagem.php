<?php
    //configurar inf.php dento do xampp 
    $para = "seuemail@email.com";
    $assunto = $_POST['txtAssunto'];
    $mensagem = wordwrap($_POST['txtMensagem'], 70,"\r\n");
    $nome = $_POST['txtNome']; 
    $email = $_POST['txtEmail'];

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: $nome <$email>"."\r\n";
    $headers .= "Reply-To: $email";

$enviou = mail($para,$assunto,$mensagem,$headers);

if($enviou){
    echo "ok";
}else{
    echo "erro";
}
    
?>
