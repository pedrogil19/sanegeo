<?php 

$to = "comercial@linedata.com.br"; //  coloque o e-mail de teste aqui
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
$phone = $_POST['phone'];
$empresa = $_POST['empresa'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$subject = "Contato - ". $name;
$subject2 = "Copia do Contato Enviado - Linedata";
$mensagem = "Nome:" .$name ."\n\n". "Telefone:" .$phone ."\n\n". "Empresa:" .$empresa ."\n\n". "Cidade:" .$cidade ."\n\n". "Estado:" .$estado ."\n\n". "Mensagem:". "\n\n" . $_POST['mensagem'];
$mensagem2 = "Essa é a cópia da mensagem enviada. " ."\n\n". "Nome:" .$name ."\n\n". "Telefone:" .$phone ."\n\n". "Empresa:" .$empresa ."\n\n". "Cidade:" .$cidade ."\n\n". "Estado:" .$estado ."\n\n". "Mensagem:". "\n\n" . $_POST['mensagem'];
echo $mensagem;
$headers = "From:" . $from;
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers2 = "From:" . $to;
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$mensagem,$headers);
mail($from,$subject2,$mensagem2,$headers2); // Enviar copia
?>