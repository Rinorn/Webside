<?php

    include 'db_conf.php';

    $id = $_POST['id'];

    $sql_del = "DELETE FROM `posts` WHERE `posts`.`id` = $id;";

    $result = mysqli_query($link, $sql_del);

    echo $result;

    header("Location: ../forum.php#text_post");

?>
