		<?php 
		include 'koneksi.php';
		$no = $_POST['no'];
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];
		$query = mysqli_query($con,"update produk set nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' where no='$no'");
		if($query){
			echo "<script type='text/javascript'>alert('Data Berhasil Disimpan');window.location = 'produk.php';</script>";
		}else{
			echo "<script type='text/javascript'>alert('Data Gagal Disimpan');window.location = 'produk.php';</script>";
		}
		?>