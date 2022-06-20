<?php 
include ('header_shop.php'); 
$database = new database();
$hasil= $database->daftar_produk_kategori($_GET['id_kategori']);
foreach ($hasil as $a){
    $nama_kategori = $a['nama_kategori'];
}
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2"> Products <?php echo $a['nama_kategori'] ?> </span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php foreach ($hasil as $b){ ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" style="width:100%;height:300px" src="admin/<?php echo $b['gambar'] ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $b['nama_barang'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp. <?php echo number_format($b['harga']) ?></h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    <center>
                    <div class="card-footer bg-light border">
                        <a href="detail_shop.php?id_barang=<?php echo $b['id_barang'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    </div>
                    </center>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Products End -->
<?php include ('footer.php')?>