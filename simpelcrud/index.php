<?php 
	 
	 include_once("function/helper.php");

	 $page=isset($_GET['page']) ? $_GET['page']:false;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simpel Crud</title>
</head>
<body>

		<div id="container">
			
			<div id="header">
					
					<h3>DATA MAHASISWA</h3>
			</div>

			<div id="menu">
              <a href="<?php echo URL."index.php?page=tambah_data"; ?>">+tambah data</a>

              <a href="<?php echo URL."index.php?page=lihat_data"; ?>">Lihat Data</a>
			</div>

			<div id="content">
				<?php 

				     $filename="$page.php";

				     if(file_exists($filename)) {
				     	 include_once($filename);
				     }else{

				     	echo "<b>MAAF KONTEN TIDAK ADA</b>";
				     }
				?>
			</div>

			<div id="footer">
				copyrigrt@crud 2018
			</div>

		</div>

</body>
</html>