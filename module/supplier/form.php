<?php
      
    $supplier_id = isset($_GET['supplier_id']) ? $_GET['supplier_id'] : "";
      
	$button = "Update";
	$queryUser = mysqli_query($koneksi, "SELECT * FROM supplier WHERE supplier_id='$supplier_id'");
	 
	$row=mysqli_fetch_array($queryUser);
	  
	$nama = $row["nama"];
	$rekening = $row["rekening"];
	$phone = $row["phone"];
	$alamat = $row["alamat"];
	$status = $row["status"];
?>
<form action="<?php echo BASE_URL."module/supplier/action.php?supplier_id=$supplier_id"?>" method="POST">
	  
	<div class="element-form">
		<label>Nama Lengkap</label>	
		<span><input type="text" name="nama" value="<?php echo $nama; ?>" /></span>
	</div>	

	<div class="element-form">
		<label>Alamat</label>	
		<span><input type="text" name="alamat" value="<?php echo $alamat; ?>" /></span>
	</div>		

	<div class="element-form">
		<label>Phone</label>	
		<span><input type="text" name="phone" value="<?php echo $phone; ?>" /></span>
	</div>	

	<div class="element-form">
		<label>Rekening</label>	
		<span><input type="text" name="rekening" value="<?php echo $rekening; ?>" /></span>
	</div>		


	<div class="element-form">
		<label>Status</label>	
		<span>
			<input type="radio" value="on" name="status" <?php if($status == "on"){ echo "checked"; } ?> /> on
			<input type="radio" value="off" name="status" <?php if($status == "off"){ echo "checked"; } ?> /> off		
		</span>
	</div>		
	  
	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>	
</form>