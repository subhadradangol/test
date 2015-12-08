<?php
include('query.php');

?>

<table cellspacing="20px">
<tr><td><b>Name</b></td>
	
	<td><b>City</b></td>
	
</tr>

<?php
$result=$obj->select();
while($row=mysqli_fetch_array($result))
		{?>		
		<tr>
		<td><?php echo "$row[1]";?></td>
		<td><?php echo "$row[2]";?></td>
		<td><a href="update.php?id=<?php echo"$row[0]" ?>"> <input type="submit" name="update" value="Edit"/></a></td>
		<td><a href="delete.php?id=<?php echo"$row[0]" ?>"> <input type="submit" name="delete" value="Delete"/></a></td>
		</tr>
		
<?php
}
?>

</table>
