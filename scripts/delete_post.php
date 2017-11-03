<?php

    include 'db_conf.php';

    $id = $_SESSION['id'];

    $sql_del = "DELETE * FROM posts WHERE id='$id'";

    $result = mysqli_query($link, $sql_del);

    echo $result;

    header("Location: ../forum.php#text_post");

?>
