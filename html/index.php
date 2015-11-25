<?php

$REQUEST_URI = $_SERVER["REQUEST_URI"];
$link = $REQUEST_URI . "menu.php";
Header("Location: $link");

?>
