<?php 
include_once '../includes/koneksi.php'; 

if(isset($_POST['submit'])) {
    $funds=$_POST['saldo'];
    $sql = mysqli_query($konek," SELECT * FROM saldo ");
        while($data = mysqli_fetch_assoc($sql)){
            $saldo=$data['saldo'];
    }
    $saldoakhir=$saldo+$funds;
    $updatesaldo=mysqli_query($konek,"UPDATE `saldo` SET `saldo` = '$saldoakhir' WHERE `saldo`.`id_saldo` = 1");
	if($updatesaldo){
        echo "<script>alert('Berhasil Menambah Saldo'); 
        document.location='../index.php?page=beranda';
            </script>";
		
	}else{
		echo "<script> alert ('Gagal Menambah Saldo'); 
		document.location='../index.php?page=beranda';
		</script>";
	}

    // Tutup koneksi database
    $konek->close();
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
