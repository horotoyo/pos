<!DOCTYPE html>
<html>
<head>
	<title>Item</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=2.0">
</head>
<body>
<div class="container">

	<div class="header">
		<img src="images/favicon.png" width="20"><p>Point of Sale - Item</p>
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
			<button type="submit"><a href="item_tambah.php"><img src="images/icon_add.png" width="13"> Add Item</a></button>
		</div><!-- penutup button_add -->
		
		<div class="box_table">

			<div class="title_table">
				<p><img src="images/icon_list.png" width="18"> Available List of Item</p>
			</div><!-- penutup title_table -->
			
			<div class="table_content">
				<table border="1" cellpadding="10" class="table1">
				<thead>
					<tr>
						<td class="nomer">No.</td>
						<td>Category</td>
						<td>Name</td>
						<td>Price</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>
					<?php
						include 'koneksi.php';
						$nomor 	= 1;
						$sql	= "SELECT category.id, item.id as urut, category.name as jenis, item.name as nama, price, status FROM item INNER JOIN category ON category.id=item.category_id";
						$result = mysqli_query($connect, $sql);
								

						function jika($status) {
							if ($status==1) {
								return "Active";
							} else {
								return "Non-Active";}
							}


							if (mysqli_num_rows($result)>0) {
								while ($row = mysqli_fetch_assoc($result)) {
									echo "
										<tr>
											<td>".$nomor++."</td>
											<td>".$row['jenis']."</td>
											<td>".$row['nama']."</td>
											<td>Rp. ".number_format($row['price'],'0','0','.')."</td>
											<td>".jika($row['status'])."</td>
											<td>
												<a href='item_edit.php?id=".$row['urut']."' class='edit_button'><img src='images/icon_edit.png' width='13'> Edit</a>
												<a href='item_delete.php?id=".$row['urut']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")' class='delete_button'><img src='images/icon_trash.png' width='13'> Hapus</a>
											</td>
										</tr>
									";
								}
							}
						?>
				</table>
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