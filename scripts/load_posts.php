<?php

include 'db_conf.php';

$sql = "SELECT * FROM posts";

$result = mysqli_query($link, $sql);
$posts = array();

while ($row = mysqli_fetch_assoc($result)) {
  array_push($posts, $row);
}
$row = mysqli_fetch_row($result);

?>
