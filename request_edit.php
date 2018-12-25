<!DOCTYPE html>
<html>
<head>
	<title>Edit Request</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.1">
</head>
<body>
	<?php
	include 'koneksi.php';

	$ID 		= $_GET['id'];
	$sql		= "SELECT * FROM request WHERE id=$ID";
	$result		= mysqli_query($connect, $sql);
	$row		= mysqli_fetch_assoc($result);
	$tampil		= $row['item_id'];

	$sql2		= "SELECT * FROM item WHERE id=$tampil";
	$result2 	= mysqli_query($connect, $sql2);
	$row2 		= mysqli_fetch_assoc($result2);

	?>
<div class="container">

	<div class="header">
		<img src="images/favicon.png" width="20"><p>Point of Sale - Edit Request</p>
	</div><!-- penutup header -->

	<div class="main">

		<div class="sidebar">
			<p>MENU OF APLICATION</p>
			<a href="index.php"><li><img src="images/icon_category.png" width="12"> Category</li></a>
			<a href="item.php"><li><img src="images/icon_item.png" width="12"> Item</li></a>
			<a href="request.php"><li><img src="images/icon_request.png" width="12"> Request</li></a>
		</div><!-- penutup sidebar -->
			
		<div class="content">

		<div class="button_add">
			<button type="submit"><a href="request.php"><img src="images/icon_back.png" width="13"> Back</a></button>
		</div><!-- penutup button_add -->
		
		<div class="box_table">

			<div class="title_table">
				<p><img src="images/icon_edit_grey.png" width="10"> Change Value of Request</p>
			</div><!-- penutup title_table -->
			
			<div class="table_content">
				<form action="request_proses_edit.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $ID; ?>">
					<table class="add_box" border="0">
						<tr>
							<td><label for="table">Table Number</label></td>
							<td><input type="text" name="table" id="table" value="<?php echo $row['table_number']; ?>"></td>
						</tr>
						<tr>
							<td><label for="item">Item</label></td>
							<td>
								<select name="item" id="item" class="select_drop">
								<option value="<?php echo $row['item_id']; ?>"><?php echo $row2['name']; ?></option>
								<?php
									include 'koneksi.php';
									$sql1 	= "SELECT * FROM item";
									$result1 = mysqli_query($connect, $sql1);
									if (mysqli_num_rows($result1) > 0) {
										while ($row1 = mysqli_fetch_assoc($result1)) {
											echo "<option value=".$row1['id'].">".$row1['name']."</option>";
										}
									}
								?>
								</select></td>
						</tr>
						<tr>
							<td><label for="qty">Quantity</label></td>
							<td><input type="number" name="qty" id="qty" value="<?php echo $row['qty']; ?>"></td>
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