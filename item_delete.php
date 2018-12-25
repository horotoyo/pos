<?php
include 'koneksi.php';

$ID    = $_GET['id'];

$sql = "DELETE FROM item WHERE id='$ID'";
mysqli_query($connect,$sql);
header('location:item.php');
?>