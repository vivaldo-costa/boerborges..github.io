<?php


if (isset($_POST['enviar_contacto'])) {


  $assunto = strip_tags(htmlspecialchars($_POST["assunto_contacto"]));
  $nome = strip_tags(htmlspecialchars($_POST["nome_contacto"]));
  $Email       = strip_tags(htmlspecialchars($_POST["email_contacto"]));
  $Telefone    = strip_tags(htmlspecialchars($_POST["telefone_contacto"]));
  $Obs  = strip_tags(htmlspecialchars($_POST["mensagem_contacto"]));

$assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';
$to = 'geral@boerborges-kennels.ao'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject ="$assunto";
$email_body ="\n\n"."Detalhes:\n\nCliente: $nome \n\nEmail: $Email\n\nTelefone: $Telefone\n\nMensagem:\n $Obs";
$headers ="Content-type: text/html; charset=utf-8" . "\r\n";
$headers .="From: geral@boerborges-kennels.ao\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .="Reply-To: $Email";   
mail($to,$email_subject,$email_body,$headers);
echo"
<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= https://www.boerborges-kennels.ao/'>
<script type=\"text/javascript\"> alert(\"Enviado com sucesso, aguarde entraremos em contacto\"); </script>
";

exit();

}



if (isset($_POST['enviar_encomenda'])) {
 


$gerero_cao1 = strip_tags(htmlspecialchars($_POST["genero_cao_1"]));
$raca1 = strip_tags(htmlspecialchars($_POST["raca_1"]));
$quantidade1 = strip_tags(htmlspecialchars($_POST["quantidade_1"]));

$gerero_cao2 = strip_tags(htmlspecialchars($_POST["genero_cao_2"]));
$raca2 = strip_tags(htmlspecialchars($_POST["raca_2"]));
$quantidade2 = strip_tags(htmlspecialchars($_POST["quantidade_2"]));

$gerero_cao3 = strip_tags(htmlspecialchars($_POST["genero_cao_3"]));
$raca3 = strip_tags(htmlspecialchars($_POST["raca_3"]));
$quantidade3 = strip_tags(htmlspecialchars($_POST["quantidade_3"]));





  $assunto = strip_tags(htmlspecialchars($_POST["assunto_comprar"]));
  $nome = strip_tags(htmlspecialchars($_POST["nome_cliente"]));
  $Email       = strip_tags(htmlspecialchars($_POST["e-mail_cliente"]));
  $Telefone    = strip_tags(htmlspecialchars($_POST["telefone_cliente"]));
  $Obs  = strip_tags(htmlspecialchars($_POST["Comprovativo_cliente"]));

$assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';
$to = 'geral@boerborges-kennels.ao'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject ="$assunto";
$email_body ="\n\n Iten(s) da compra: \n\n Gênero: $gerero_cao1 \n\n Raça: $raca1 \n\n Quantidade: $quantidade1 \n\n Gênero: $gerero_cao2 \n\n Raça: $raca2 \n\n Quantidade: $quantidade2 \n\n Gênero: $gerero_cao3 \n\n Raça: $raca3 \n\n Quantidade: $quantidade3  \n\n Detalhes do cliente:\n\nCliente: $nome \n\nEmail: $Email\n\nTelefone: $Telefone\n\nMensagem:\n $Obs";
$headers ="Content-type: text/html; charset=utf-8" . "\r\n";
$headers .="From: geral@boerborges-kennels.ao\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .="Reply-To: $Email";   
mail($to,$email_subject,$email_body,$headers);
echo"
<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= https://www.boerborges-kennels.ao/'>
<script type=\"text/javascript\"> alert(\"Enviado com sucesso, aguarde entraremos em contacto\"); </script>
";

exit();

}

if (isset($_POST['enviar_agenda'])) {


  $assunto = strip_tags(htmlspecialchars($_POST["assunto_visitas"]));
  $nome = strip_tags(htmlspecialchars($_POST["nome_vistas"]));
  $Email       = strip_tags(htmlspecialchars($_POST["email_vistas"]));
  $Telefone    = strip_tags(htmlspecialchars($_POST["telefone_vistas"]));
  $Data    = strip_tags(htmlspecialchars($_POST["telefone_vistas"]));
  $Hora    = strip_tags(htmlspecialchars($_POST["telefone_vistas"]));
  $Obs  = strip_tags(htmlspecialchars($_POST["mensagem_visitas"]));

$assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';
$to = 'geral@boerborges-kennels.ao'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject ="$assunto";
$email_body ="\n\n"."Detalhes:\n\nCliente: $nome \n\nEmail: $Email\n\nTelefone: $Telefone\n\nMensagem:\n $Obs";
$headers ="Content-type: text/html; charset=utf-8" . "\r\n";
$headers .="From: geral@boerborges-kennels.ao\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .="Reply-To: $Email";   
mail($to,$email_subject,$email_body,$headers);
echo"
<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= https://www.boerborges-kennels.ao/'>
<script type=\"text/javascript\"> alert(\"Enviado com sucesso, aguarde entraremos em contacto\"); </script>
";

exit();
//www.weya.ao

}


if (isset($_POST['enviar_venda'])) {
 




  $gerero_vender1 = strip_tags(htmlspecialchars($_POST["genero_vender1"]));
  $raca_vender1 = strip_tags(htmlspecialchars($_POST["raca_vender1"]));
  $quantidade_vender1 = strip_tags(htmlspecialchars($_POST["qualidade_vender1"]));
  $preco_vender1 = strip_tags(htmlspecialchars($_POST["preco_vender1"]));
  $foto_vender1 = strip_tags(htmlspecialchars($_POST["foto_vender1"]));
  
  $gerero_vender2 = strip_tags(htmlspecialchars($_POST["genero_vender2"]));
  $raca_vender2 = strip_tags(htmlspecialchars($_POST["raca_vender2"]));
  $quantidade_vender2 = strip_tags(htmlspecialchars($_POST["qualidade_vender2"]));
  $preco_vender2 = strip_tags(htmlspecialchars($_POST["preco_vender2"]));
  $foto_vender2 = strip_tags(htmlspecialchars($_POST["foto_vender2"]));


  
    $assunto = strip_tags(htmlspecialchars($_POST["Vender"]));
    $nome = strip_tags(htmlspecialchars($_POST["nome_vender"]));
    $Email       = strip_tags(htmlspecialchars($_POST["e-mail_cliente"]));
    $Telefone    = strip_tags(htmlspecialchars($_POST["e-mail_vender"]));
    $Obs  = strip_tags(htmlspecialchars($_POST["endereco_vender"]));
  
  $assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';
  $to = 'geral@boerborges-kennels.ao'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
  $email_subject ="$assunto";
  $email_body ="\n\n Iten(s) á venda: \n\n Gênero:  $gerero_vender1 \n\n Raça: $raca_vender1 \n\n Quantidade: $quantidade_vender1 \n\n Preço: $preco_vender1 \n\n Foto: $foto_vender1 \n\n Gênero:  $gerero_vender2 \n\n Raça: $raca_vender2 \n\n Quantidade: $quantidade_vender2 \n\n Preço: $preco_vender2 \n\n Foto: $foto_vender2  \n\n Detalhes do cliente:\n\nCliente: $nome \n\nEmail: $Email\n\nTelefone: $Telefone \n\nEndereço:\n $Obs";
  $headers ="Content-type: text/html; charset=utf-8" . "\r\n";
  $headers .="From: geral@boerborges-kennels.ao\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
  $headers .="Reply-To: $Email";   
  mail($to,$email_subject,$email_body,$headers);
  echo"
  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL= https://www.boerborges-kennels.ao/'>
  <script type=\"text/javascript\"> alert(\"Enviado com sucesso, aguarde entraremos em contacto\"); </script>
  ";
  
  exit();
  
  }

?>
