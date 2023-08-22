<?php
require_once "connection.php";
$sql="DELETE FROM images WHERE id='{$_GET['id']}'";
$query= mysqli_query($con, $sql)or die(mysqli_error($con));
header('Location:bdd.php');
?>