<?php
class connect
{
public $con;
	function __construct()
	{
	$this->con=mysqli_connect("localhost","root","","project");
	}
}
?>