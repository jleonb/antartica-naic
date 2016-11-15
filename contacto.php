<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "nknockaert@antarticape.com";
    $email_subject = "CONTACTO - WEB";

    function died($error) {
        // your error code can go here
        echo "Lo sentimos, hemos encontrado un error. ";
        echo $error."<br /><br />";
        die();
    }

    $nombre = $_POST['name']; // required
		$email = $_POST['email']; // required
    $asunto = $_POST['asunto']; // required
    $comments = $_POST['comments']; // required


    $email_message = "Los datos del interesado son:\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
		$email_message .= "Asunto: ".clean_string($asunto)."\n";
    $email_message .= "Mensaje: ".clean_string($mensaje)."\n";

// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
sleep(2);
echo "<meta http-equiv='refresh' content=\"0; url=./index.html\">";
?>

<?php
}
?>
