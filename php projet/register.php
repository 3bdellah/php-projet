
<?php

			  $host='localhost';
			  $user='root';
			  $password='';
			  $database='tuto';
					  try{
							$db=new PDO("mysql:host=$host;dbname=$database",$user,$password);
							$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

					if(isset($_REQUEST['submit'])) 
					{
					 $username = strip_tags($_REQUEST['username']); //textbox name "txt_email"
					 $email  = strip_tags($_REQUEST['email']);  //textbox name "txt_email"
					 $password = strip_tags($_REQUEST['password1']); //textbox name "txt_password"
                     $password_repeat = strip_tags($_REQUEST['password2']);
					 if(empty($username)){
					  $errorMsg[]="Please enter username"; //check username textbox not empty 
					 }
					 else if(empty($email)){
					  $errorMsg[]="Please enter email"; //check email textbox not empty 
					 }
					 else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					  $errorMsg[]="Please enter a valid email address"; //check proper email format 
					 }
					 else if(empty($password)){
					  $errorMsg[]="Please enter password"; //check passowrd textbox not empty
					 }
					 else if(strlen($password) < 8){
					  $errorMsg[] = "Password must be atleast 8 characters"; //check passowrd must be 8 characters
					 }
                     else if(empty($password_repeat)){
					  $errorMsg[]="Please enter password repeat"; //check passowrd textbox not empty
					 }
					 else if(strlen($password_repeat) < 8){
					  $errorMsg[] = "Password_repeat must be atleast 8 characters"; //check passowrd must be 8 characters
					 }
					 else
					 {  
					   $select_stmt=$db->prepare("SELECT username, email FROM account 
							  WHERE username=:uname OR email=:uemail"); // sql select query
					   $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email)); 
					   $row=$select_stmt->fetch(PDO::FETCH_ASSOC); 
					   
					   if($row["username"]==$username){
						$errorMsg[]="Sorry username already exists"; //check condition username already exists 
					   }
					   else if($row["email"]==$email){
						$errorMsg[]="Sorry email already exists"; //check condition email already exists 
					   }
					   else if(!isset($errorMsg)) //check no "$errorMsg" show then continue
					   {
						
						$insert_stmt=$db->prepare("INSERT INTO account (username,email,password,password_repeat) VALUES
									(:uname,:uemail,:upassword1,:upassword2)");   //sql insert query     
						
						if($insert_stmt->execute(array( ':uname' =>$username, 
														':uemail'=>$email, 
														':upassword1'=>$password,
                                                        ':upassword2'=>$password_repeat))){
						 $registerMsg="Register Successfully..... Please Click On account Link"; //execute query success message
						}
					   }
					  }
                    }
                      }
			  catch(PDOException $e)
			  {
			   echo $e->getMessage();}
		?>	

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-image: url(image/bg.jpg); background-size:cover; algne;">
    
	<?php
if(isset($errorMsg))
{
 foreach($errorMsg as $error)
 {
 ?>
	    		   
		<div class="alert alert-danger">
           <strong>WRONG ! <?php echo $error; ?></strong>
        </div>
			    <?php
					 }
					}
					if(isset($registerMsg))
					{
					?>
					<strong><?php echo $registerMsg;}?></strong>
	 <div align="center"  style="margin-top:50px;">	
    <div  
        style="
		width: 420px; height: 620px;
		background-color: white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        display: block;
        border-radius: 20px;">
            <form  method="POST" action="login.php" style="align-content: center;" >
				    <img src="image/avatar.svg" style="width: 60px; height: 60px;">
				      <h2 class="title">Welcome</h2>
           		  <div class="input-div one">
           		    <div class="i">
           		   		<i class="fas fa-user"></i>
           		    </div>
           		    <div class="div">
           		   		<h5>NOM</h5>
           		   		<input type="text" name="firstname" class="input">
           		    </div>
           		  </div>
           		  <div class="input-div one">
           		    <div class="i">
           		   		<i class="fas fa-user"></i>
           		    </div>
           		    <div class="div">
           		   		<h5>PRENOM</h5>
           		   		<input type="text" name="lastname" class="input">
           		    </div>
           		  </div>
           		  <div class="input-div one">
           		    <div class="i">
           		   		<i class="fas fa-user"></i>
           		    </div>
           		    <div class="div">
           		   		<h5>TEL</h5>
           		   		<input type="text" name="tel" class="input" pattern="06[0-9]{8}">
           		    </div>
           		  </div>

           		   <div class="input-div one">
				   <div class="i">
           		   		<i class="fas fa-email"></i>
           		    </div>
           		    <div class="div">
           		   		<h5>EMAIL</h5>
           		   		<input type="email" name="email" class="input" >
           		    </div>
           		  </div>
           		  <div class="input-div pass">
           		    <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		    </div>
           		  <div class="div">
           		    	<h5>PASSWORD</h5>
           		    	<input type="password" name="password" class="input">
            	  </div>
            	</div>          	
            	<input type="submit" class="btn" name="login" value="Login">
            </form>
        </div> 
    </div>
        <script type="text/javascript" src="js/main.js"></script>   
        </body>
        </html>