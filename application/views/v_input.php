<html>
<head>
	<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
	<title>DAFTAR</title>
</head>
<body>
		<nav style="position: relative;">
	<ul>
		<li><a href="<?php echo base_url('index.php/welcome')?>" class="active">Home</a></li>
		<li><a href="<?php echo base_url('index.php/welcome/login')?>">Login</a></li>
		<li><a href="<?php echo base_url('index.php/welcome/input')?>">Daftar</a></li>
	</ul>
	</nav>
	<center>
		<h1>DAFTAR</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/welcome/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><input type="text" name="level"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>