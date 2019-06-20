<?php
    include("../../function/koneksi.php");   
    include("../../function/helper.php");   
     
    $supplier_id = $_GET['supplier_id'];
	
    $nama = $_POST['nama'];
	$alamat = $_POST["alamat"];
	$phone = $_POST["phone"];
	$rekening = $_POST["rekening"];
	$status = $_POST["status"];	

	mysqli_query($koneksi, "UPDATE supplier SET nama='$nama',
											   rekening='$rekening',
											   phone='$phone',
											   alamat='$alamat',
											   status='$status'
											   WHERE supplier_id='$supplier_id'");

	header("location: ".BASE_URL."index.php?page=my_profile&module=supplier&action=list");
?>