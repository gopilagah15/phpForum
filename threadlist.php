<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Threads</title>
  </head>
  <body>
    <?php include 'partials/header.php';?>
    <?php include 'partials/_dbconnect.php';?>
   
   <?php 
$id = $_GET['catid'];
$sql = "SELECT * FROM `categoriess` WHERE category_id=$id";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
  $catname = $row['category_name'];
  $catdesc = $row['category_description'];
}
?>
     
    <div class="jumbotron">
  <h1 class="display-4">Welcome to <?php echo $catname?> forum!</h1>
  <p class="lead"> <?php echo $catdesc?></p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p>Stay on topic.
        Avoid inappropriate language.
        No spamming.
        No adult or NSFW material.
        No advertisements.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<div class="container">
    <h1>Browse Questions</h1>
    <?php 
$id = $_GET['catid'];
$sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
  $id = $row['thread_id'];
  $title = $row['thread_title'];
  $desc = $row['thread_desc'];

   echo' <div class="media">
  <img class="mr-3" src="https://th.bing.com/th?id=OIP.3IsXMskZyheEWqtE3Dr7JwHaGe&w=267&h=233&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" width="54px" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0"><a href=/forum/thread.php">'.$title.'</a></h5>
    '.$desc.'
</div>';
}
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

