<form action="<?php echo URL."proses_data.php"; ?>" method="post">
	
	  <div id="element-form">
	  	 <label>NIM</label>
	  	 <input type="text" name="nim">
	  </div>

	  <div id="element-form">
	  	 <label>NAMA</label>
	  	 <input type="text" name="nama">
	  </div>
      
      <div id="element-form">
	  	 <label>TTL</label>
	  	 <input type="text" name="ttl">
	  </div>

      <div id="element-form">
	  	 <label>Jenis Kelamin</label>
	  	 <input type="radio" value="laki-laki" name="jk">Laki-Laki
	  	 <input type="radio" value="prempuan" name="jk">Prempuan
	  </div>
      
      <div id="element-form">
	  	 <label>Jurusan</label>
	  	 <select name="jurusan">
	  	 	 <option value="TI">Teknik Informatika</option>
	  	 	 <option value="TA">Teknik Arsitektur</option>
	  	 	 <option value="TL">Teknik Lingkungan</option>
	  	 </select>
	  </div>

	  <div id="element-form">
	  	 <input type="submit" name="button" value="Input">
	  </div>
</form>