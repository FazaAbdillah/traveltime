<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container {
    padding: 16px;
}

span.password {
    float: left;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.password {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
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
</head>
<body>
<nav style="position: relative;">
    <ul>
        <li class="faza"><a href="<?php echo base_url('index.php/welcome')?>" class="active">Home</a></li>
        <li class="faza"><a href="<?php echo base_url('index.php/welcome/login')?>">Login</a></li>
        <li class="faza"><a href="<?php echo base_url('index.php/welcome/input')?>">Daftar</a></li>
    </ul>  
</nav>

<h2>Login Form</h2>

<form action="<?php echo base_url()?>index.php/welcome/aksi_login" method="POST">
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  </div>
</form>

</body>
</html>
