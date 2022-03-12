<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid row">
        <div class="col-8">
            <h1>Belanja Online</h1>
            <hr>
            <form class="p-3" action="form_belanja.php" method="POST">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" value="proses" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-4">
        <div class="container-fluid bg-primary text-white p-2 border border-primary">
            Daftar Harga
        </div>
        <div class="container-fluid p-2 border border-info">
            TV : 4.200.000
        </div>
        <div class="container-fluid p-2 border border-info">
            Kulkas: 3.100.000
        </div>
        <div class="container-fluid p-2 border border-info">
            Mesin Cuci : 3.800.000
        </div>
        <div class="container-fluid bg-primary text-white p-2 border border-primary">
            Harga dapat berubah setiap saat
        </div>
    </div>
</body>
</html>

<?php
$nama_customer = $_POST['customer'];
$produk = $_POST['produk'];
if($produk == "TV") {
    $harga_produk = 4200000;
} elseif ($produk == "Kulkas") {
    $harga_produk = 3100000;
} elseif ($produk == "Mesin Cuci") {
    $harga_produk = 3800000;
} else {
    $harga_produk = 0;
}
$jumlah = $_POST['jumlah'];
$total_biaya = $harga_produk*$jumlah;
echo 'Nama Customer : '.$nama_customer;
echo '<br>Produk Pilihan : '.$produk;
echo '<br>Jumlah : '.$jumlah;
echo '<br>Total Harga : Rp '.number_format($total_biaya);
?>