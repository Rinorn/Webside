
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
                echo "<div class='text-left col-sm-3' id='messageStyle'><p id='text_".$posts[$i]['id']."'>"."Post: ".$posts[$i]['text']."</p>";
                echo "<div class='btn-group btn-group-sm btn-group-justified'>";
                echo "<button class='btn btn-primary button_reply'>Reply</button>";
                echo "<form action='scripts/delete_post.php' method='post'><input type='hidden' name='id' value='".$posts[$i]['id']."'/><button type='submit' class='btn btn-danger'>Delete</button></form>";
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
    <script src="scripts/reply.js"></script>
  </body>
</html>
