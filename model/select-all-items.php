<?php


$sql = "SELECT * FROM newsarticles";

$result3 = $mysqli->query($sql);

$result3 = convertResultToArray($result3);