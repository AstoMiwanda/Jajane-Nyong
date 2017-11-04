<?php
	require_once'template/header.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>assadsa</title>
	<link rel="stylesheet" type="text/css" href="assets/css/kuliner.css">
</head>
<body>
<div id="pesan">
	<div class="center">
		<div class="pesan-img">
			<img src="assets/img/mendoan.jpg" class="img">
		</div>
		<div class="pesan-detail">
			<h1>Mendoan Banyumas</h1>
			<div class="pesan-bintang">
				<img src="assets/img/bintang.png" class="pesan-ranting">
				<img src="assets/img/bintang.png" class="pesan-ranting">
				<img src="assets/img/bintang.png" class="pesan-ranting">
			</div>
			<div class="pesan-line"></div>
			<h2>Rp 1.000,-</h2>
			<h3>(*Harga rata-rata di Banyumas)</h3>
			<a href="#" class="btn">Jadikan Favorite</a>
		</div>
	</div>
	<div class="clear"></div>
	<div class="center">
		<span>Toko yang tersedia</span>
		<div class="toko">
			<div class="toko-list" style="background-color: #19b5fe;">Mendoan Store</div>
			<div class="toko-list" style="background-color: #f39c12;">Wedang Store</div>
			<div class="toko-list" style="background-color: #ef4836;">Kuliner Banyumas</div>
			<div class="toko-list" style="background-color: #4183d7;">Dawet Ayu</div>
			<div class="toko-list" style="background-color: #2ecc71;">Getuk Goreng</div>
		</div>
		<h4>Load More . . .</h4>
	</div>
	<div class="clear"></div>

	<!-- Modal Box -->
	<div id="myModal" class="modal">

  	<!-- Modal content -->
  		<div class="modal-content">
    		<span class="close">&times;</span>
    		<p>Some text in the Modal..</p>
  		</div>

	</div>
	<!-- Modal Box -->
</div>

<?php
	require_once'template/footer.php'
?>

<script type="text/javascript" src="assets/js/modal.js"></script>
</body>
</html>