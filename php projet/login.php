<?php
session_start();
              $host="localhost";
			  $username='root';
			  $password='';
			  $database='tuto';
              $message='';
  try
    {
		$connection=new PDO("mysql:host=$host;dbname=$database",$username,$password);
		$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			if(isset($_POST["login"]))
			{
				if(empty($_POST["username"])  ||  empty($_POST["password"]) )
				{
				  $message='<label>all field is required </label>';
				}
			  else
			   {
					$query="select * from account where username = :username and  password = :password";
					$statement = $connection->prepare($query);
					$statement->execute(
					array(
					'username' => $_POST["username"],
					'password' => $_POST["password"]
					)
					);
					$count=$statement->rowCount();
					   if($count > 0)
					   {
						$_SESSION["username"]=$_POST["username"];
						header("location:home.php");
						}
					else
						{
						 $message='<lpabel>username or password is wrong</label>';
						}
				}
			}
	}
	catch(PDOException $e)
	{
	  $message=$e->getMessage();

	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body  style="background-image: url(image/bg.jpg); background-size:cover; algne;"> 
	    <div align="center"  style="margin-top:100px;">
        <div   
        style="
		width: 420px; height: 400px;
		background-color: white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        display: block;
        border-radius: 20px;
		">
            <form  method="POST" action="login.php"  >
				    <img src="image/avatar.svg" style="width: 60px; height: 60px;">
				      <h2 class="title">Welcome</h2>
           		  <div class="input-div one">
           		    <div class="i">
           		   		<i class="fas fa-user"></i>
           		    </div>
           		    <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" class="input" >
           		    </div>
           		  </div>
           		  <div class="input-div pass">
           		    <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		    </div>
           		  <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	  </div>
            	</div>
            	<a href="#" class="boxx">Forgot Password ?</a>
            	<input type="submit" class="btn" name="login" value="Login">
              <p class="t">no account?<a href="#" >Sign up</a></p>
            </form>
        </div>
    
    </div>
    
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>