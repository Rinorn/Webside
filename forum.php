
<?php
session_start();
include 'scripts/load_posts.php';
if(!isset($_SESSION['id'])){
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Forum</title>
    <?php include 'templates/header.php'; ?>
    <!--CSS-->
    <link rel="stylesheet" href="forumStyle.css">
  </head>
  <body>
    <div class="container-fluid text-center" id="contBox2">
      <div class="contText">
        <?php include 'templates/nav.php'; ?>
        <div>
            <?php
            for ($i = 0; $i < sizeof($posts); $i++) {

                echo "<div class='container text-left col-sm-4' id='timeStyle'><p>"."Time: ".$posts[$i]['time']." ID: ".$posts[$i]['id']."</p></div>";
                echo "<div class='row'>";
                echo "<div class='col-sm-4'></div>";
                echo "<div class='text-left col-sm-1' id='userStyle'><p>"."User: ".$posts[$i]['uname']."</p></div>";
                echo "<div class='text-left col-sm-3' id='messageStyle'><p>"."Post: ".$posts[$i]['text']."</p>";
                echo "<div class='btn-group btn-group-sm btn-group-justified'>";
                echo "<button id='reply' class='btn btn-primary' type='reply'>Reply</button>";
                echo "<button id='delete'class='btn btn-default btn-danger' type='delete'>Delete post</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        <form action="scripts/add_post.php" method="post">
          <textarea id="text_post" name="message" rows="8" cols="80"></textarea>
          <button id="postSubmit" type="submit">Add post</button>
        </form>
      </div>
    </div>

    <?php include 'templates/footer.php'; ?>
  </body>
</html>
