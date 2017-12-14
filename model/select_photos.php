<?php

$offset = (5) * NR_ITEMS_PER_PAGE;

$sql = "SELECT * FROM fotos LIMIT ".$offset." , " . NR_ITEMS_PER_PAGE;

$result2 = $mysqli->query($sql);