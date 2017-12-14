<?php
function convertResultToArray($DBResult) {
    //convert db object to array
    $resultArray = array();
    while($row = $DBResult -> fetch_assoc()) {
      $resultArray[] = $row;
    }
    return $resultArray;

}



 ?>
