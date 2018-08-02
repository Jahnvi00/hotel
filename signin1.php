



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form </title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="container">
		<div class="box"> 
				<form action="signin1.php" method="post">
					<div class="main">
						<div class="heading">
				            		<h2>Signin Here</h2>
				        	</div>
						<div class="mail">
							<input type="text" name="admin_name" placeholder="Name" required=""> 
							<div class="clear"></div>
				       		</div>
						<div class="pass">
						<input type="password" name="admin_pass" placeholder="Password" required=""> <div class="clear"></div>
						</div> 
					</div>
					<div class="btn">
						<input type="submit" name="login_btn" value="Sign In">
                       
					</div>
				</form> 
		</div>	
	</div>	
	<div class="footer">
				<p>&copy;2018. All Rights Reserved</p>
            </div>
	
</body>
</html>
<?php
include ('config.php');
session_start();
if(isset($_POST['login_btn'])){
    
$username_var=$_POST['admin_name'];
$password_var=$_POST['admin_pass'];    
$_SESSION['username']=$username;
    if($username_var=="admin"&&$password_var=="12345"){
        
        header('Location:view1.php');
    }else{
        
           
  $queryS="select * from dbo.log_u where Username_='$username_var' and Password_='$password_var'";  
$result=sqlsrv_query($conn,$queryS);
$row=sqlsrv_fetch_array($result);
    
         if($username_var==null || $username_var=="" && $password_var==null || $password_var=="")
         {
    echo "<script>";
		echo "window.alert('Please Enter Email & Password ')
		window.location.href='form1.php';
		</script>";
            }
       
    
    else if($row['Username_']==$username_var && $row['Password_']==$password_var)
    {
        header('Location:index.html');
}
else{

   echo "<script>";
		echo "window.alert('Please Enter Valid Email & Password ')
		window.location.href='form1.php';
		</script>";
}
    }
}
?>

