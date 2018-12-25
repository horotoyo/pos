<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Request</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.1">
</head>
<body>

	<div class="container">

	<div class="header">
		<img src="images/favicon.png" width="20"><p>Point of Sale - Add Request</p>
	</div><!-- d header -->

	<div class="main">

		<div class="sidebar">
			<p>MENU OF APLICATION</p>
			<a href="index.php"><li><img src="images/icon_category.png" width="12"> Category</li></a>
			<a href="item.php"><li><img src="images/icon_item.png" width="12"> Item</li></a>
			<a href="request.php"><li><img src="images/icon_request.png" width="12"> Request</li></a>
		</div><!-- penutup sidebar -->
			
		<div class="content">

		<div class="button_add">
			<button type="submit"><a href="request_tambah.php"><img src="images/icon_add.png" width="13"> Add Request</a></button>
		</div><!-- penutup button_add -->
		
		<div class="box_table">

			<div class="title_table">
				<p><img src="images/icon_add_grey.png" width="10"> Insert a New Items</p>
			</div><!-- penutup title_table -->
			
			<div class="table_content">
				<form action="request_proses_tambah.php" method="POST">
					<table class="add_box" border="0">
					<tr>
						<td><label for="table">Table Number</label></td>
						<td><input type="text" name="table" id="table" placeholder="Insert a number of table" required=""></td>
					</tr>
					<tr>
						<td><label for="item">Item</label></td>
						<td>
							<select name="item" id="item" class="select_drop" required="">
								<option value="">-- Pilih Item --</option>
								<?php
								include 'koneksi.php';

								$sql1 		= "SELECT * FROM item WHERE status=1";
								$result1 	= mysqli_query($connect, $sql1);

								if (mysqli_num_rows($result1) > 0) {
									while ($row2 = mysqli_fetch_assoc($result1)) {
										echo "<option value=".$row2['id'].">".$row2['name']."</option>";
									}
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="qty">Quantity</label></td>
						<td><input type="number" name="qty" id="qty" placeholder="Insert quantity of item" required=""></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" class="submit_button"><img src="images/icon_submit.png" width="13"> Submit</button></td>
					</tr>
					</table>
				</form>
				</div><!-- penutup table_content -->

		</div><!-- penutup box_table -->

		<div class="footer">
			<p><b>Copyright © 2018-2019 <a href="https://www.instagram.com/suryowidiyantogumelar/"> Suryo Widiyanto Gumelar</a></b>. All rights reserved.
			<i><b>Pondok Informatika Al Madinah</b></i>
			</p>
		</div><!-- penutup footer -->

		</div><!-- penutup content -->
	</div><!-- penutup main -->
</div><!-- penutup container -->
</body>
</html>