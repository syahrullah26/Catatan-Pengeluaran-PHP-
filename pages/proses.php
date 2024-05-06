<?php 
include_once '../includes/koneksi.php'; 

if(isset($_POST['submit'])) {
    $nama=$_POST['nama'];
    $kuantitas=$_POST['kuantitas'];
    $harga=$_POST['harga'];
    $tanggal=$_POST['tanggal'];
    $jenis_kebutuhan=$_POST['jenis_kebutuhan'];
    $lainnya=$_POST['lainnya'];
    
    if ($jenis_kebutuhan == "1") {
        $kebutuhan='kecantikan';
    } elseif ($jenis_kebutuhan == "2") {
        $kebutuhan='pangan';
    } elseif ($jenis_kebutuhan == "3") {
        $kebutuhan='pakaian';
    } elseif ($jenis_kebutuhan == "4") {
        $kebutuhan='kosan';
    } elseif ($jenis_kebutuhan == "5") {
        $kebutuhan='kesehatan';
    } else {
        $kebutuhan='lainnya';
    }

    $sql = mysqli_query($konek," SELECT * FROM saldo ");
        while($data = mysqli_fetch_assoc($sql)){
            $saldo=$data['saldo'];
    }
    $totalharga = $harga * $kuantitas;
    $saldoakhir=$saldo-$totalharga;
    $updatesaldo=mysqli_query($konek,"UPDATE `saldo` SET `saldo` = '$saldoakhir' WHERE `saldo`.`id_saldo` = 1");
	$databarang= mysqli_query($konek,"INSERT INTO `pengeluaran` (`id`, `tanggal`, `nama`, `harga`, `kuantitas`, `total_harga`, `jenis_kebutuhan`, `lainnya`) VALUES (NULL, '$tanggal', '$nama', '$harga', '$kuantitas', '$totalharga', '$jenis_kebutuhan', '$lainnya')");
	if($databarang){
        echo "<script>alert('Berhasil Input Data'); 
        document.location='../index.php?page=beranda';
            </script>";
		
	}else{
		echo "<script> alert ('Input Data Gagal'); 
		document.location='../index.php?page=beranda';
		</script>";
	}

    // Tutup koneksi database
    $konek->close();
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
