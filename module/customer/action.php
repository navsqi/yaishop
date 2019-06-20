 <?php
    include("../../function/koneksi.php");   
    include("../../function/helper.php");   
     
    $customer_id = $_GET['customer_id'];
	
    $nama = $_POST['nama'];
	$alamat = $_POST["alamat"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$status = $_POST["status"];	

	mysqli_query($koneksi, "UPDATE customer SET nama='$nama',
											   alamat='$alamat',
											   email='$email',
											   phone='$phone',
											   status='$status'
											   WHERE customer_id='$customer_id'");

    header("location: ".BASE_URL."index.php?page=my_profile&module=customer&action=list");
?>