<?php
require('../includes/config.php');
$q = $_REQUEST['q'];
$r = intval($_GET['r']);

require('../includes/database.php');

if ($r == 0) {
    $sql="SELECT * FROM newsarticles WHERE title LIKE '%".$q."%' or  content LIKE '%".$q."%'";

} else if ($r == 1) {
    $sql="SELECT * FROM fotos WHERE src LIKE '%".$q."%' or  date_created LIKE '%".$q."%'";

} else if ($r == 2) {
    $sql="SELECT * FROM videos WHERE name LIKE '%".$q."%' or  description LIKE '%".$q."%'";

} else {
    echo 'er is een error';
}

$result = mysqli_query($mysqli,$sql);

while ($row = $result->fetch_assoc()) {
    if ($r == 1) {
        echo   '<img src="../myband/images/'.$row["src"].'">';
        echo   '<p>'. $row ["date_created"] . '</p>';
    } else if ($r == 2) {

        echo '<div class="videos" >';

        echo '<h1  >' . $row["name"] . '</h1>';
        echo '<iframe width = "560" height = "315" src = "https://www.youtube.com/embed/' . $row['url'] . '" frameborder = "0" allowfullscreen ></iframe >';
        echo '<p >' . $row ["description"] . '</p >';
        echo '</div >';

    } else {
       echo '<h1 >' . $row ["title"] . '</h1>';
        echo '<content>'. $row["content"] . '</content>';
      echo  '<br>';
     echo   '<img src="../images/'.$row["image"].'>';
     echo   '<p>'. $row ["date_created"] . '</p>';
    }
}


mysqli_close($mysqli);
?>

