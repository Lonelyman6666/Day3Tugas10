		<?php 
		include 'koneksi.php';
		$nama_produk = $_POST['nama'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];
		$query = mysqli_query($con,"insert into produk values('','$nama_produk','$keterangan','$harga','$jumlah')");
		if($query){
			echo "<script type='text/javascript'>alert('Data Berhasil Disimpan');window.location = 'produk.php';</script>";
		}else{
			echo "<script type='text/javascript'>alert('Data Gagal Disimpan');window.location = 'tambahproduk.php';</script>";
		}
		?>