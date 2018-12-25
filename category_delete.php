<?php
include 'koneksi.php';

$ID    = $_GET['id'];

$sql = "DELETE FROM category WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>