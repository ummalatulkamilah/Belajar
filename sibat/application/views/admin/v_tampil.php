

<!-- view v_tampil digunakan untuk menampilkan data dari databse yang diambil oleh model m_data
	menggunakan fungsi tampil_data. data yang ditampilkan untuk kasus saya ini adalah data user. -->

<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
	
	<!-- anchor digunakan untuk membuat hyperlink, diibawah ini membuat hyperlink yang mengarah pada fungi tambah di controller crud.php -->
	<!-- catatan: parameter pertama pada fungsi anchor untuk link tujuan, parameter kedua berisi txt yang akan ditampilkan, untuk mengunakan anchor harus mengaktifkan helper url terlebIH dahulu. -->
	<div class="container" style="margin-top: 45px; margin-bottom:100px; ">
		<center><h1>DATA OBAT APOTIK NUSANTARA</h1></center>
		<br>
	<a href="<?php echo base_url() ?>index.php/admin/crud/tambah/" class="btn btn-md btn-success">Tambah Obat</a>
	<hr>

	<!-- tabel data yang akan di tampilkan -->
	<div class="table-responsive">
	<table id="table" class="table table-striped table-bordered table-hover">
	<!-- <table style="margin:20px auto;" border="1"> -->
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Obat</th>
			<th>Stok</th>
			<th>Harga</th>
			<th>Tanggal masuk</th>
			<th>Tanggal Expired</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		</thead>
		 <tbody>
		<?php 
		$no = 1;  //medelarasikan no tabel dimuai dari 1
		foreach($obat as $o){ 
		?>
		<tr>
			<!-- echo digunakan menampilkan data, disini berupa user -->
			<td><?php echo $no++ ?></td> 
			<td><?php echo $o->nama_obat ?></td> 
			<td><?php echo $o->stok_obat ?></td>
			<td><?php echo $o->harga_obat ?></td>
			<td><?php echo $o->tanggal_masuk ?></td>
			<td><?php echo $o->tanggal_exp ?></td>
			<td><?php echo $o->keterangan ?></td>
			<td>
		           
		     <a href="<?php echo base_url() ?>index.php/admin/crud/edit/<?php echo $o->id ?>" class="btn btn-sm btn-success">Edit</a>
             <a href="<?php echo base_url() ?>index.php/admin/crud/hapus/<?php echo $o->id ?>" class="btn btn-sm btn-danger">Hapus</a>
		
			</td>
		</tr>
		<?php } ?>
		 <tbody>
	</table>
        </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>

</body>
</html>