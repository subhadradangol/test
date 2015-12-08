<?php
include_once('query.php');

$result=$obj->delete();

header('location:view.php');
?>