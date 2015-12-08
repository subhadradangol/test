<?php
include_once('query.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$result=$obj->select1();
$row=mysqli_fetch_array($result);

if(isset($_POST['submit']))
{
$id=$_GET['id'];
$result=$obj->update($_POST);
header('location:view.php');
}

?>

<form action="update.php?id=<?php echo $id;?>" method="POST">
Name:<input type="text" name="name" value="<?php echo "$row[1]"?>"/><br>
City:<input type="varchar" name="city" value="<?php echo "$row[2]"?>"/><br>
<input type="submit" name="submit" value="Update"/>
</form>
<?php

 } 
?>