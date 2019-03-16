<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog - Arkademy</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#list">
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Arkademy's Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="list">
        <ul class="nav navbar-nav navbar-right">
  			<li class="active"><a href="home1.php">Home</a></li>
            <li><a href="publicindex.php">News</a></li>
            <li><a href="help.php">FAQ</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</nav>
<?php 
$sql=mysqli_query("SELECT posts.title, posts.id, posts.content, users.username FROM posts, users WHERE posts.createdBy=users.id") or die (mysqli_error());
 while($data = mysqli_fetch_array($sql)){
  $postid=$data['id'];
?>
<div class="container">
  <div class="jumbotron">
    <h2>judul : <b><?php echo $data['title'] ?></h1> 
    <p><?php echo $data['content'] ?></p> 
    <p class="created">Dibuat oleh : <b><?php echo $data['username'] ?></b></p>
  </div>
  <p>Comments :</p>
  <ul class="comment">
  <?php
    $comment=mysqli_query("SELECT * FROM comments WHERE comments.postId=$postid") or die (mysqli_error());
    while($datac = mysqli_fetch_array($comment)) {
  ?>
  		<li><?php echo $datac['comment'] ?></li>
  <?php } ?>
  	</ul>
</div>
<?php 
}
?>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-2.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>