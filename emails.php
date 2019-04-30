
<?php  



ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "testing@nmtss.net";

$to = $_POST["email"];

$subject = $_POST["subject"];

$message = $_POST["message"];

$headers = "De:". $from;

if( mail($to, $subject, $message, $headers)){

echo "A mensagem de e-mail foi enviada.";
}else{


echo "Falha ao enviar";

}

