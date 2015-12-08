<?php
include('connection.php');

class query extends connect
{
	function insert($val)
	{
	$name=$val['name'];
	$city=$val['city'];
	$sql="insert into practice (name, city) values ('$name', '$city')";
	mysqli_query($this->con,$sql);
	}
	
	function update($val)
	{
	$id=$_GET['id'];
	$name=$val['name'];
	$city=$val['city'];
	$sql1="update practice set name='$name', city='$city' where id='$id'";
	$result=mysqli_query($this->con,$sql1);
	return $result;
	}
	
	function select()
	{
	$sql2="select * from practice";
	$result=mysqli_query($this->con,$sql2);
	return $result;
	}
	
	function select1()
	{
	$id=$_GET['id'];
	$sql2="select * from practice where id='$id'";
	$result=mysqli_query($this->con,$sql2);
	return $result;
	}
	
	
	function delete()
	{
	$id=$_GET['id'];
	$sql3="delete from practice where id='$id'";
	mysqli_query($this->con,$sql3);	
	}
}

$obj=new query;
?>

