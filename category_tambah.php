<html>
<head>
	<title>Tambah Data Category</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.1">
</head>
<body>
	<div class="container">

	<div class="header">
		<img src="images/favicon.png" width="20"><p>Point of Sale - Add Category</p>
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
			<button type="submit"><a href="category_tambah.php"><img src="images/icon_add.png" width="13"> Add Category</a></button>
		</div><!-- penutup button_add -->
		
		<div class="box_table">

			<div class="title_table">
				<p><img src="images/icon_add_grey.png" width="10"> Insert a New Categories</p>
			</div><!-- penutup title_table -->
			
			<div class="table_content">
				<form action="category_proses_tambah.php" method="POST">
					<table class="add_box" border="0">
						<tr>
							<td><label for="name"> Name </label></td>
							<td><input type="text" name="name" id="name" placeholder="Insert a new categories" required="Harus diisi"></td>
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
