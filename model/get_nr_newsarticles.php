<?php

$sql = "SELECT * FROM fotos";
$fotos = $mysqli->query($sql);

$total_number_articles = $fotos->num_rows;

?>