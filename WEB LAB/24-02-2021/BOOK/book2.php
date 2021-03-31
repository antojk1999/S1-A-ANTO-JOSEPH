


<center>
<table border="5" cellpadding="15px" cellspacing="5px">

<tr>
<th>Asseccion number</th>
<th>title</th>
<th>Author</th>
<th>Edition</th>
<th>Publisher</th>

</tr>
<?php
if(isset($_GET['a']))
{

$con=mysqli_connect("localhost","root","","sample");
$sqll="SELECT * FROM `book` WHERE ano=".$_GET['a'];
$result=mysqli_query($con,$sqll);
	
if (!$result) {
    echo "Could not successfully run query ($sqll) from DB: " . mysqli_error();
    exit;
}


while($row=mysqli_fetch_assoc($result))
{
	
if (!$row) {
    echo "Could not successfully run query ($sqll) from DB: " . mysqli_error();
    exit;
}	
	
?>
<tr>
<td><?php echo $row["ano"];?></td>
<td><?php echo $row["title"];?></td>
<td><?php echo $row["author"];?></td>
<td><?php echo $row["edition"];?></td>
<td><?php echo $row["publisher"];?></td>

</tr>
<?php
}
}
?>
</table><br><br><br><br><br>
