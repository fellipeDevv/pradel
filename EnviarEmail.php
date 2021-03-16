<?php

$email = $_POST['email'];
$msgForm = $_POST['msgForm'];

echo "SEU $email e mensangem $msgForm";

$corpo = "contato\r\n";
$corpo = "email:".$email."\r\n";
$corpo = "mensagem:".$msgForm."\r\n";

$email_to= 'contato@embuscadofullstack.tk';

$status= mail($email_to,mb_encode_mimeheader(),$corpo);

if($status):
    header('location:index.php?status=sucesso');
else:
    
    header('location:index.php?status=erro');
endif;

if(isset($_GET['status'])):
    if($_GET['status']== "sucesso"):
        echo "<script>materialine.toast('enviado com sucesso!',4000);</script>"
    else:
        echo "<script>materialine.toast('erro ao enviar!',4000);</script>"
    endif;
endif;
?>