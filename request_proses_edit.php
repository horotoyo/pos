<?php
include 'koneksi.php';

$ID 		= $_POST['id'];
$table		= $_POST['table'];
$item		= $_POST['item'];
$qty		= $_POST['qty'];

//query for input total
$sql3		= "SELECT item.price as price FROM item WHERE item.id=$item";
$result3 	= mysqli_query($connect, $sql3);
$row3 		= mysqli_fetch_assoc($result3);
$price		= $row3['price'];

$total		= $price*$qty;
$diskon		= $total - ($total*0.2);
$nilai		= 20;
$hilang		= $diskon*0;
$nol		= $nilai*0;


$sql4	= "UPDATE request SET table_number = '$table', item_id = '$item', qty = '$qty', total = '$total', discount = '$nol', after_discount = '$hilang' WHERE id = '$ID'";
$sql5 	= "UPDATE request SET table_number = '$table', item_id = '$item', qty = '$qty', total = '$total', discount = '$nilai', after_discount = '$diskon' WHERE id = '$ID'";


if ( $total < 100000) {
	mysqli_query($connect,$sql4);
} else {
	mysqli_query($connect,$sql5);
}


header('location:request.php');
?>