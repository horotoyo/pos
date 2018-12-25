<!DOCTYPE html>
<html>
<head>
	<title>Request</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=2.0">
</head>
<body>
<div class="container">

	<div class="header">
		<img src="images/favicon.png" width="20"><p>Point of Sale - Request</p>
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
			<button type="submit"><a href="request_tambah.php"><img src="images/icon_add.png" width="13"> Add Request</a></button>
		</div><!-- penutup button_add -->
		
		<div class="box_table">

			<div class="title_table">
				<p><img src="images/icon_list.png" width="18">  Available List of Request</p>
			</div><!-- penutup title_table -->
			
			<div class="table_content">
				<table border="1" cellpadding="10" class="table1">
				<thead>
					<tr>
						<td class="nomer">No.</td>
						<td>Table Number</td>
						<td>Item</td>
						<td>Quantity</td>
						<td>Total</td>
						<td>Discount</td>
						<td>After Discount</td>
						<td>Action</td>
					</tr>
				</thead>
					<?php
						include 'koneksi.php';
						$nomor	= 1;
						$sql	= "SELECT item.id, request.id as urut, item.name as name, table_number, qty, total, discount, after_discount FROM request INNER JOIN item ON item.id=request.item_id";
						$result = mysqli_query($connect, $sql);
						
						if (mysqli_num_rows($result)>0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "
									<tr>
										<td>".$nomor++."</td>
										<td>".$row['table_number']."</td>
										<td>".$row['name']."</td>
										<td>".$row['qty']."</td>
										<td>Rp. ".number_format($row['total'],'0','','.')."</td>
										<td>".$row['discount']."%"."</td>
										<td>Rp. ".number_format($row['after_discount'],'0','','.')."</td>
										<td>
											<a href='request_edit.php?id=".$row['urut']."' class='edit_button'><img src='images/icon_edit.png' width='13'> Edit</a>
											<a href='request_delete.php?id=".$row['urut']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")' class='delete_button'><img src='images/icon_trash.png' width='13'> Hapus</a>
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