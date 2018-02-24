<!DOCTYPE html>
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
<title>Travel Time</title>
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
		<li class="faza"><a href="#" class="active">Home</a></li>
		<li class="faza"><a href="<?php echo base_url('index.php/welcome/login')?>">Login</a></li>
		<li class="faza"><a href="<?php echo base_url('index.php/welcome/input')?>">Daftar</a></li>
	</ul>
	</nav>
   <h1 class="agile_head text-center">Travel Time</h1>
     <div class="container w3">
		<form action="<?php echo base_url('index.php/welcome/cari_rute')?>" method="get" class="agile_form">
		   <h2 class="w3layouts text-center">Easy Way To Book Tickets Online</h2>
		   <ul class="agile_info_select">
				 <li><input type="radio" name="view" id="excellent"> 
				 	  <label for="excellent">flight</label>
				      <div class="check w3"></div>
				 </li>
				 <li> 	
				 </li>
				 <li><input type="radio" name="view" id="good" checked="checked"> 
					  <label for="good">train</label>
				      <div class="check w3ls"></div>
				 </li>
			</ul>
			<div class="clear"></div>
			<input type="text" placeholder="Your Name" name="name" class="name agileits" required=""/>
			<input placeholder="Date" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/> 
			<div class="list_agileits_w3layouts">
				<div class="section_class_agileits sec-left">
				   <select name="from">
					<option value="0">From City</option>
					<option value="Jakarta">Jakarta</option>
					<option value="Jogja">Jogja</option>
					<option value="Surabaya">Surabaya</option>
					<option value="Bandung">Bandung</option>
				  </select>
				</div>
				<div class="section_class_agileits sec-right">
				  <select name="to">
					<option value="0">From City</option>
					<option value="Jakarta">Jakarta</option>
					<option value="Jogja">Jogja</option>
					<option value="Surabaya">Surabaya</option>
					<option value="Bandung">Bandung</option>
				  </select>	
				</div>
				<div class="clear"></div>
				<div class="section_class_agileits sec-left">
				  <select>
					<option value="0">Select Classs</option>
					<option value="3">Economy Class</option>
					<option value="2">Business Class</option>
					<option value="1">First Class</option>
				  </select>
				</div>	
				<div class="clear"></div>
			</div>	
			<div class="list_agileits_w3layouts">
				<div class="section_class_agileits sec-left">
				 <select>
					<option value="0">Adults</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				 </select>
				</div>	
				<div class="section_class_agileits sec-right">
				  <select>
					<option value="0">Children</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				 </select>
				</div>
				<div class="clear"></div>
            </div>				
			<div class="submit">
			  <input type="submit" value="submit">	
			</div>  
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.css" />
		<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
		</form>	

			
</body>
</html>