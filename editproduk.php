<!doctype html>
<html lang="en">
 <?php
 include "koneksi.php";
 $no=$_GET['no'];
 ?>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header">Produk</h3>
                            <div class="card-body">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <center><h3 class="card-header">Edit Data Produk</h3></center>
                                <div class="card-body">
									<?php
									$sql=mysqli_query($con,"select * from produk where no='$no'");
									$data=mysqli_fetch_array($sql);
									?>
                                    <form id="validationform" method="post" enctype="multipart/form-data" action="updateproduk.php">
									<input type="hidden" required="" name="no" class="form-control" value="<?php echo $data['no'];?>">
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Produk</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="nama_produk" class="form-control" value="<?php echo $data['nama_produk'];?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">keterangan</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="keterangan" class="form-control" value="<?php echo $data['keterangan'];?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" name="harga" class="form-control" value="<?php echo $data['harga'];?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Jumlah</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" name="jumlah" class="form-control" value="<?php echo $data['jumlah'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <input type="submit" class="btn btn-space btn-primary" value="Simpan" name="upload">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                            </div>
                        </div>
                    </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>