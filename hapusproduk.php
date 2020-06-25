<?php

$no = $_GET['no'];

include "koneksi.php";

$sql = "delete from produk where no='$no'";
$result = mysqli_query($con,$sql);

if(!$result){
	echo "<script type='text/javascript'>alert('Data Gagal Dihapus');window.location = 'produk.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Data Berhasil Dihapus');window.location = 'produk.php';</script>";
}

?>