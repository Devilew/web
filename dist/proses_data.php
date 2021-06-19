<?php
require_once "koneksi.php";
date_default_timezone_set('Asia/Jakarta');

$aksi = $_GET['aksi'];

if($aksi == 'Tambah'){
    $id = date('YmdHis');
    $tanggal = $_POST['tanggal'];
    $supplier = $_POST['supplier'];
    $jenis_ikan = $_POST['jenis_ikan'];
    $berat_rm = $_POST['berat_rm'];
    $hasil_produksi = $_POST['hasil_produksi'];
    $trimming = $_POST['trimming'];
    $kulit = $_POST['kulit'];
    $billy = $_POST['billy'];
    $daging_kerok = $_POST['daging_kerok'];
    $afalan = $_POST['afalan'];
    $soaking = $_POST['soaking'];
    $bekuan_soaking = $_POST['bekuan_soaking'];
    $hasil_packing = $_POST['hasil_packing'];

    $query = "INSERT INTO produk_masuk (
        ID_PRODUK_MASUK,
        ID_ADMIN,
        TGL_MASUK,
        SUPPLIER
        JENIS_IKAN"
}
?>