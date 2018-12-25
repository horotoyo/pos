<!DOCTYPE html>
<html>
<head>
	<title>Edit Item</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.1">
</head>
<body>
	<?php
	include 'koneksi.php';

	$ID 		= $_GET['id'];
	$sql		= "SELECT * FROM item WHERE id=$ID";
	$result		= mysqli_query($connect, $sql);
	$row		= mysqli_fetch_assoc($result);
	$tampil		= $row['category_id'];

	$sql2		= "SELECT * FROM category WHERE id=$tampil";
	$result2 	= mysqli_query($connect, $sql2);
	$row2 		= mysqli_fetch_assoc($result2);

	?>
<div class="container">

	<div class="header">
		<img src="images/favicon.png" width="20"><p>Point of Sale - Edit Iems</p>
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
			<button type="submit"><a href="item.php"><img src="images/icon_back.png" width="13"> Back</a></button>
		</div><!-- penutup button_add -->
		
		<div class="box_table">

			<div class="title_table">
				<p><img src="images/icon_edit_grey.png" width="10"> Change Value of Items</p>
			</div><!-- penutup title_table -->
			
			<div class="table_content">
				<form action="item_proses_edit.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $ID; ?>">
					<table class="add_box" border="0">
						<tr>
							<td><label for="category">Category</label></td>
							<td>
								<select name="category" id="category" class="select_drop">
								<option value="<?php echo $row['category_id']; ?>"><?php echo $row2['name']; ?></option>
								<?php
									include 'koneksi.php';
									$sql1 	= "SELECT * FROM category";
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
							<td><label for="name">Nama </label></td>
							<td><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"></td>
						</tr>
						<tr>
							<td><label for="price">Price </label></td>
							<td><input type="number" name="price" id="price" value="<?php echo $row['price']; ?>"></td>
						</tr>
						<?php 
						include 'koneksi.php';

						$ID2 		= $_GET['id'];
						$sql3		= "SELECT * FROM item WHERE id=$ID2";
						$result3 	= mysqli_query($connect, $sql3);
						$row3 		= mysqli_fetch_assoc($result3);
						$cek 		= $row3['status'];

						if ($cek == 0) {
							echo "
								<tr>
									<td>Status</td>
									<td>
										<input type='radio' name='status' value='0' id='non-active' class='radio' checked>
										<label for='non-active'>Non-Active</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input type='radio' name='status' value='1' id='active' class='radio'>
										<label for='active'>Active</label></td>
									<td></td>
								</tr>
							";
						} else {
							echo "
								<tr>
									<td>Status</td>
									<td>
										<input type='radio' name='status' value='0' id='non-active' class='radio'>
										<label for='non-active'>Non-Active</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input type='radio' name='status' value='1' id='active' class='radio' checked>
										<label for='active'>Active</label></td>
									<td></td>
								</tr>
							";
						}
						?>
						
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