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


.faza {
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
	<title>Booking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>assets/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">

</head>
<body class="bg agileinfo">
	<nav style="position: relative;">
	<ul>
		<li class="faza"><a href="<?php echo base_url('index.php/welcome')?>" class="active">Home</a></li>
		<li class="faza"><a href="<?php echo base_url('index.php/welcome/login')?>">Login</a></li>
		<li class="faza"><a href="<?php echo base_url('index.php/welcome/input')?>">Daftar</a></li>
	</ul>
	</nav>	
	<center><h1>KEBERANGKATAN</h1></center>
<center>
	<table style="margin:20px auto border:1px " border="1">
	
		<tr>
			<th>id</th>
			<th>depart_to</th>
			<th>rute_from</th>
			<th>rute_to</th>
			<th>price</th>
		</tr>
		<?php 
		$no = 1;
		foreach($rute as $u){ 
		?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->depart_at ?></td>
			<td><?php echo $u->rute_from ?></td>
			<td><?php echo $u->rute_to ?></td>
			<td><?php echo $u->price ?></td>
			<td>
			      <?php echo anchor('welcome/edit/'.$u->id,'Edit'); ?>
                  <?php echo anchor('welcome/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</center>
</body>
</html>