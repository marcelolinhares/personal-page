<?php

$name = $_POST['name'];

$email = $_POST['email'];

$msg = $_POST['msg'] . " - name: {$name} - {$email}. ";

header('Content-type: application/javascript');

if (mail("marcelolinhares@gmail.com", "contato site - marcelolinhares.com", $msg)):
?>
{response: "success"}
<?else:?>
{response: "error"}
<?endif;?>
