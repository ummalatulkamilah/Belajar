

<!-- views v_edit digunakan sebagai from edit data -->


<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	
		<!-- from ini aksinya di arahkan pada fungsi update yang terdapat pada pada controller crud.php dan pengirimanan datannya menggunakan metode post (data tidak disimpan diurl)-->
	<div class="container" style="margin-top: 80px; margin-bottom:100px;">
	 	<center>
		<h3>Edit data</h3>
	</center>
	<br>
        <div class="col-md-12">
	<!-- action pada from ini diarahkan kefungsi tambah_aksi yang ada pada controller crud.php, dan pengirimana nilai atau datanya menggunakan method post (data tidak ditampilkan diurl) -->
  <?php foreach($obat as $o){ ?>
	<form action="<?php echo base_url().'index.php/admin/crud/update';?>" method="post">
			 <div class="form-group">
                <label for="text">Nama obat</label>
                 <input type="hidden" name="id" value="<?php echo $o->id ?>" class="form-control" placeholder="Masukkan nama obat">
                <input type="text" name="nama_obat" value="<?php echo $o->nama_obat ?>" class="form-control" placeholder="Masukkan nama obat">
              </div>

              <div class="form-group">
                <label for="text">Stok</label>
                <input type="text" name="stok_obat" value="<?php echo $o->stok_obat ?>" class="form-control" placeholder="Masukkan Stok">
              </div>

              <div class="form-group">
                <label for="text">Harga</label>
                <input type="text" name="harga_obat"  value="<?php echo $o->harga_obat ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" value="<?php echo $o->tanggal_masuk ?>" class="form-control" >
              </div>

			<div class="form-group">
                <label for="text">Tanggal Expired</label>
                <input type="date" name="tanggal_exp" value="<?php echo $o->tanggal_exp ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Status</label>
                <input type="text" name="keterangan" value="<?php echo $o->keterangan ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
	</form>	
  <?php } ?>
	  </div>
    </div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>