

<?php

$conn = mysqli_connect("localhost", "root", "","sample");
$sql="select `ano`, `title`,`author`, `edition`, `publisher` from book ";
$result=mysqli_query($conn,$sql);
?>
<html>
<head>
<style>
form
{
margin-top:5%;
margin-left:25%;
}
</style>
</head>
<body>

<table>
<tr>
<td>



<form name="form" method="post" action="book1.php">
<table cellpadding="15px" cellspacing="5px" border="1">
<tr>
<td>Accession number:</td>
<td><input type="Number" name="ano" required></td>
</tr><br>
<tr>
<td>Title:</td>
<td><input type="text" name="title" required></td>
</tr><br>
<tr>
<td>Author:</td>
<td><input type="text" name="author" required></td>
</tr><br>
<tr>
<td>Edition:</td>
<td><input type="text" name="edition" required></td>
</tr>
<br>
<tr>

  <td>Publisher</td>

  <td><input type="text" name="publisher" required></td>
</tr><br>



<tr>
<td>
</td>
<td>
<input type="submit" name="submit">

</td>
</tr>
</table>
</form>

</td>
<td>


<form style="margin-left:150px;" name="form" method="post" action="book2.php">
<table cellpadding="15px" cellspacing="5px" border="1">
<tr>
<td>Title:</td>
<td>

<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["title"];?></td>
<td><a href="book2.php?a=<?php echo $row['ano']?>">search</a> </td>
</tr>
<?php 
}
?>

</td>
</tr><br>
</table>
</form>


</td>
</tr>


</table>


</body>
</html>
