
<?php
session_start();
include 'scripts/load_posts.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Forum</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php include 'templates/nav.php'; ?>
    <form action="scripts/add_post.php" method="post">
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
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
