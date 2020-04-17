<?php
require'DB.class.php';
$DB=new DB();
error_reporting(E_ERROR|E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>el_qosby shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<header>
        <div class="container site " class="row" >
            <div class="navbar fixed-top navbar-light bg-light">
            <div class="col-md-4" id="logo">
            <ul class="nav nav-pills">
                
                <li>
            <ul class="nav nav-pills navbar-right">
                <li><a href="panier.php" class="glyphicon glyphicon-shopping-cart"> </a></li>
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
            </ul>
                </li>
            </ul>
            </div>
             <nav class="col-md-8" id="n1"> 
                 
            <ul class="nav nav-pills">
                <a href="index.php"><img  src="image/Logo.png"  style=" width: 130px; height: 45px; float:left;"  /></a>
                <li class="nav-link"><a href="index.php">HOME</a></li>
                <li><a href="page1.php">PRODACT</a></li>
                <li><a href="page2.php">CONTACT</a></li>
            </ul>  
            </nav>
            </div>
        </div>   
</header>
		
    