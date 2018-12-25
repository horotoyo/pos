<?php
include 'koneksi.php';

$table		= $_POST['table'];
$item		= $_POST['item'];
$qty		= $_POST['qty'];

//query for input total
$sql1		= "SELECT item.price as price FROM item WHERE item.id=$item";
$result1 	= mysqli_query($connect, $sql1);
$row1 		= mysqli_fetch_assoc($result1);
$price1		= $row1['price'];

//input total and after discount
$total		= $price1*$qty;
$diskon		= $total - ($total*0.2);
$nilai		= 20;


$sql2 		= "INSERT INTO request (table_number, item_id, qty, total) VALUES ('$table','$item','$qty','$total')";
$sql3 		= "INSERT INTO request (table_number, item_id, qty, total, discount, after_discount) VALUES ('$table', '$item', '$qty', '$total', '$nilai', '$diskon')";


if ( $total < 100000) {
	mysqli_query($connect,$sql2);
} else {
	mysqli_query($connect,$sql3);
}


header('location:request.php');
?>
