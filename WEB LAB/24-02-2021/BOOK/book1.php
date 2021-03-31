
<?php
$con=mysqli_connect("localhost","root","","sample");
$ano=$_POST['ano'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];

$sq="INSERT INTO `book`(`ano`, `title`, `author`, `edition`, `publisher`) VALUES ($ano,'$title','$author','$edition','$publisher')";
mysqli_query($con,$sq);
	

?>
<script>alert("addes success")</script>
