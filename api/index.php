<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];
/*if()
{
	$user1=array();
	$userid=$_SESSION['log'];
	$sql1 = "select usertype from user where userid=$userid";
	$result1 = $f->exe($sql1);
	$user1 = mysqli_fetch_row($result1);
	$temp = $user1[0];
	mysqli_free_result($result1);
}
*/
$sql = "select * from article";
$result = $f->tabledata($sql);
//print_r($result);
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Joyfest</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Css files-->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

      <link rel="stylesheet" href="../css/style.css">
    <!---->

        <link rel="stylesheet" href="../css/style.css">




  </head>

  <body>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12"></div>
    <header>
    <h1>Welcome to Joyfest  NIT Surat</h1>

    <nav>
     	<a href="index.php">Home</a>
        <a href="event.php">Events</a>
        <a href="gallery.php">Gallery</a>
        <a href="articles.php">Articles</a>
        <a href="contact.php">Contact</a>
<?php
echo "<a href='../html/upload_article.html'>Upload article</a>
		<a href='../html/events_create.html'>Create Event</a>";

?>
    </nav>
       </div>
   </div>
  </header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <h1>What is Joyfest?</h1>
        <p>Joy Fest is a national movement where students do acts of giving, and get together as one for the underprivileged.Colleges students, teachers, principals, and NGOs come together for a noble cause. 500,000 students will be part of the Largest Youth Movement. Volunteers in 20 cities and 500 colleges!</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h1>Our Aim</h1>
        <p>The main aim of JOYFEST, an initiative of JAM Magazine is to sensitise the youth to the issues related to the underprivileged and to connect to them at a human level. JOYFEST will bring together the youth of India in the spirit of the Joy of Giving.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="card">
        <h1>News and Updates</h1><br>
        <ul>
          <li><a href="">Event 1</a><br>Some Details</li>
          <li><a href="">Event 2</a><br>Some Details</li>
          <li><a href="">Event 3</a><br>Some Details</li>
        </ul>
        </div>
      </div>
    </div>

  </div>
</body>
<!--Js files-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imagenav.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/custom.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>




  </body>
</html>
