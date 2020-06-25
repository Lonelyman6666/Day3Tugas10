<!doctype html>
<html lang="en">
 <?php
 include "koneksi.php";
 ?>

        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
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
                                <div class="table-responsive">
									<a href="tambahproduk.php"><button class="btn btn-primary">Tambah</button></a><br><br>
                                    <table class="table table-striped table-bordered first" border="1">
                                        <thead>
                                            <tr align="center">
                                                <th>Nama Produk</th>
                                                <th>Keterangan</th>
                                                <th>Harga </th>
                                                <th>Jumlah</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
										<?php
											include "koneksi.php";
											$sql=mysqli_query($con,"select * from produk");
											while($row=mysqli_fetch_array($sql)){
										?>
											<tr align="center">
												<td><?php echo $row['nama_produk'];?></td>
												<td><?php echo $row['keterangan'];?></td>
												<td><?php echo $row['harga'];?></td>
												<td><?php echo $row['jumlah'];?></td>
												<td><a href="hapusproduk.php?no=<?php echo $row['no'];?>"><button class="btn btn-danger">HAPUS</button></a> /
												    <a href="editproduk.php?no=<?php echo $row['no'];?>"><button class="btn btn-success">EDIT</button></a></td>
											<tr>
										<?php 
										} 
										?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
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