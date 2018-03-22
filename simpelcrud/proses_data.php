<?php 
		include_once("function/helper.php");
		include_once("function/koneksi.php");

		$nim= $_POST['nim'];
		$nama= $_POST['nama'];
		$ttl= $_POST['ttl'];
		$jk= $_POST['jk'];
		$jurusan=$_POST['jurusan'];

		$button= $_POST['button'];

		if ($button=="Input") {
			
			mysqli_query($koneksi,"INSERT INTO datamahasiswa(nim,nama,ttl,jenis_kelamin,jurusan)
				VALUES('$nim','$nama','$ttl','$jk','$jurusan')");

			header("location:".URL."index.php?page=lihat_data");
		}
?>