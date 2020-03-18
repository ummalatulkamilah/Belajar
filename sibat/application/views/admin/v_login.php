
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
</head>
<style>
	body{
	font-family: sans-serif;
	background: #d5f0f3;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
</style>
<body>
	
	<!-- aksi form ini diarah ke fungsi aksi_login yang terdapat di controler login -->
	<div class="kotak_login">
	<form action="<?php echo base_url('index.php/admin/login/aksi_login'); ?>" method="post">		
		<label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
		<label>Password</label>
		<input type="text" name="password" class="form_login" placeholder="Password ..">
 
		<input type="submit" class="tombol_login" value="LOGIN">
 
		<br/>
		<br/>
		<center>
			<a class="link" href="https://www.malasngoding.com">kembali</a>
		</center>
	</form>
	</div>
</body>
</html>