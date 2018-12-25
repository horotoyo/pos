<?php

$servername = "localhost";
$username   = "root";
$password   = "123";
$dbname     = "point_of_sale";

$connect 	= mysqli_connect($servername, $username, $password, $dbname);


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

//make table category in db point_of_sale
$query1		= "CREATE TABLE category (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			name VARCHAR(100) NOT NULL
)";
mysqli_query($connect, $query1);


//make table item in db point_of_sale
$query2		= "CREATE TABLE item (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			category_id INT(11) NOT NULL,
			name VARCHAR(100) NOT NULL,
			price INT(11) NOT NULL,
			status BOOLEAN NOT NULL
)";
mysqli_query($connect, $query2);


//make table request in db point_of_sale
$query3		= "CREATE TABLE request (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			table_number VARCHAR(10) NOT NULL,
			item_id INT(11) NOT NULL,
			qty INT(11) NOT NULL,
			total INT(11) NOT NULL,
			discount INT(11) NOT NULL,
			after_discount INT(11) NOT NULL
)";
mysqli_query($connect, $query3);

?>
