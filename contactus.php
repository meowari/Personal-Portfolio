<?php
if($_POST["message"]) {
mail("amorita122@gmail.com", "Here is the subject line",
$_POST["insert your message here"]. "From: an@email.address");
}
?>