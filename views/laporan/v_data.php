<?php 
error_reporting(E_ALL ^ E_NOTICE);
include_once '../../validasi.php';
include_once '../../controllers/c_transaksi.php';
include_once '../../controllers/c_pelanggan.php';
// include_once '../../controllers/c_produk.php';


$transaksi = new c_transaksi();
$pelanggan = new c_pelanggan();
// $produk = new c_produk();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Transaksi</title>
      <link rel="icon" type="image/x-icon" href="img/favoicon/icon3.ico">
</head>

<body>
    </a>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <br>
            <center>
            <?php 
                            if (isset($_POST['generate'])) {
                                if (isset($_POST['transaksi'])) { ?>
                <h1>Laporan Semua Transaksi</h1>
            </center>
                <table  border="1" cellspacing="0" cellpadding="10" width="100%">
                    <center>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Invoice</th>
                                <th scope="col">Tgl Transaksi</th>
                                <th scope="col">Tgl Pembayaran</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Paket</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pembayaran</th>
                            </tr>
                        </thead>
                    </center>
                    <tbody>
                        <?php
$no = 1;
// manampilkan data dari method atau function tampil_data()
foreach ($transaksi->tampil() as $data) {
?>
                        <tr>
                            <td scope="col">
                                <?php echo $no++ ?>
                            </td>
                            <td scope="col">
                                <?php echo $data->kode_invoice ?>
                            </td>
                            <td scope="col">
                                <?php echo $data->tgl ?>
                            </td>
                            <td scope="col">
                                <?php if ($data->tanggal_bayar == "0000-00-00") {
                                    echo "Belum Konfirmasi"; 
                                }else{
                                    echo $data->tanggal_bayar;
                                }?>
                            </td>
                            <td scope="col">
                                <?php foreach($pelanggan->getmember() as $member) {
                                if ($data->id_member == $member->id){
                                    echo $member->nama;
                                }}?>
                            </td>
                            <td scope="col">
                            <?php foreach($pelanggan->getproduk() as $produk) {
                                if ($data->id_paket == $produk->id){
                                    echo $produk->nama_paket;
                                ?>
                            </td>
                            <td scope="col">
                                <?php echo $data->qty ?>
                            </td>
                            <td scope="col">
                                <?php
                                if ($data->dibayar == "belum_dibayar") {
                                    echo "0"; 
                                } else {
                                    $total = $data->qty * $produk->harga;
                                    echo $total; 
                                }?>
                                <?php }} ?>
                            </td>
                            <td scope="col">
                                <?php echo $data->status ?>
                            </td>
                            <td scope="col">
                                <?php if ($data->dibayar == "belum_dibayar") {
                                    echo "Belum Dibayar";
                                }else{
                                    echo "Lunas";
                                } ?>
                            </td>
                        </tr>
                        <?php }} else {
                            echo '<script>';
                            echo 'alert("Pilih Metode Laporan dulu");';
                            echo 'document.location.href="v_laporan.php"';
                            echo '</script>';
                        }}?>
                    </tbody>
                </table>
        </div>
        <div class="col-2">
        </div>
    </div>
    <script>window.print();</script>
</body>

</html>