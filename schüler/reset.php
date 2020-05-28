<?php
$programmname = "megz";
$domain = file_get_contents('../config/domain.txt');
setcookie("klasse", "", time() - 3600);
header("Location: http://$domain/$programmname/schüler/"); 
?>