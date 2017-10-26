
<?php
session_start();

include 'load_posts.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="add_post.php" method="post">
      <textarea name="message" rows="8" cols="80"></textarea>
      <button type="submit">Add post</button>
    </form>

    <div>
        <?php
        for ($i = 0; $i < sizeof($posts); $i++) {
            echo "<p>"."Time: ".$posts[$i]['time']."</p>";
            echo "<p>"."Post: ".$posts[$i]['text']."</p>";

        }
        ?>
    </div>
  </body>
</html>
