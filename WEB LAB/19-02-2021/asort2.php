
<?php
$con=mysqli_connect("localhost","root","","sample");
$name=$_POST['name'];

$sq="INSERT INTO `student`(`name`) VALUES ('$name')";
mysqli_query($con,$sq);

?>


<?php

$conn = mysqli_connect("localhost", "root", "","sample");
$sql="select `name` from student";
$result=mysqli_query($conn,$sql);
?>

<table  style="margin-left:100px;" cellpadding="15px" cellspacing="5px" border="1">
<tr>
<td>student name:</td>
<?php
$i=1;
while($row=mysqli_fetch_assoc($result))
{
	
$a[$i]=$row['name'];	
$i++;
?>
<tr>
<td><?php echo $row['name'];?></td>

</tr><br>
<?php

}
?>

<tr>

</tr>
</table>
asort result----->
<?php
asort($a);
print_r($a);
?><br><br>arsort result----->
<?php
arsort($a);
print_r($a);
?>
