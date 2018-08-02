<!DOCTYPE html>
<html lang="en">
    <head>
	   <title>Registration Form</title>
	  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    </head>

    <body>
        <div class="container">
            <div class="content">
                <form action="#" method="post">
                    <div class="main">
                        <div class="heading">
                            <h4>Sign Up</h4>
                         </div>
                         <div class="name">
                            <input type="text" name="name1" placeholder="Name" required="">
                            <div class="clear"></div>
                         </div>
                         <div class="name">
                             <input type="text" name="name2" placeholder="User Name" required="">
                             <div class="clear"></div>
                                </div>
                        <div class="mail">

                            <input type="email" name="email1" placeholder="Email" required="">
                        </div>
                        <div class="pass">

                            <input type="password" name="password1" placeholder="Password" required="">

					<div class="clear"></div>
				        </div>
                       <div class="btn">
				                <button type="submit" name="submit">Sign Up</button><br>
                               
				            <div class="clear"></div>
			             </div>
			     </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
include('config.php'); 

 if (isset($_POST['submit']))
 {
     $p_name=$_POST['name1'];
     $p_username=$_POST['name2'];
     $p_email=$_POST['email1'];
     $p_pass=$_POST['password1'];
     $que="INSERT INTO dbo.log_u (Name_,Email_,Username_,Password_)VALUES ('$p_name','$p_email','$p_username','$p_pass')";
	$getResult=sqlsrv_query($conn, $que);
	echo "inserted data into database successfull";



}


?>

