<?php
include_once("query.php");
if(isset($_GET['submit']))
{
$obj->insert($_GET);
}

?>
<form action="insert.php" method="GET">
Name:<input type="text" name="name"/><br>
City:<input type="varchar" name="city" /><br>
<input type="submit" name="submit" value="Submit"/>
</form>




