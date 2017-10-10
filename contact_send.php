<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

mail('yuisupergirl@gmail.com',"$name sender en besked.","$name $email $message");
// http://php.net/manual/en/function.mail.php  we can control which email address that user will be contact here  

?>
<script type="text/javascript">
alert("E-mail er blevet sendt"); 
document.location = contact.php;
</script>