<html>
<head>
	<title>Tampil Admin</title>
</head>
<body>
	<center><h1>Tampil Admin</h1></center>
<!-- >>>>>>> head -->
	<center><?php echo anchor('welcome/tambah','Tambah Data'); ?></center>
	<center><?php echo anchor('welcome/input','Tambah Data'); ?></center>
<!-- >>>>>>> crud -->

	<table style="margin:20px auto;" border="1">
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>fullname</th>
			<th>level</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('welcome/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('welcome/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>