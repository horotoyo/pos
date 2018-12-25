<?php
include 'koneksi.php';

$ID 	= $_GET['id'];

$sql	= "DELETE FROM request WHERE id='$ID'";
mysqli_query($connect, $sql);
header('location:request.php');
?>