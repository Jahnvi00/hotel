<!DOCTYPE html>
<html>
<head>
<link href="css/view1.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	
	<div class="main main-agileits">
		<h1>Booking Information</h1>
		<div class="main-agilerow"> 
			<div class="signup-wthreetop">
				<h2>Welcome to Info</h2>
				
			</div>	
			<div class="contact-wthree">
				<form action="#" method="post">
					
					  <table>
		<tr class="signup-wthreetop p">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                       	<th>Password</th>
                        <th>Mobile Number</th>
                        <th>Delete</th>
			<th>Edit</th>
		 </tr>
			    <?php
			
			include('config.php');
			$sqlselect="SELECT * FROM dbo.log_u";
			$getResults= sqlsrv_query($conn, $sqlselect);
				
				$i=1;
		
		while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
			{
			$id=$row['u_id'];
			 $name_ = $row['Name_'];
			$email = $row['Email_'];
			$pass=$row['Password_'];
			$number = $row['Number_'];
			?>
				
				<th><?php echo $i;$i++; ?></th>
				<th><?php echo $name_; ?></th>
				<th><?php echo $email; ?></th>
				 <th><?php echo $pass; ?></th>
			   <th><?php echo $number; ?></th>
			    	<th><a href ='delete1.php?del=<?php echo $email; ?>'>Delete</a></th>
				<th><a href='edit.php?edit=<?php echo $id; ?>'>Edit</a></th>
						
			 <?php } ?> 
                        </table>
				</form>
			</div>  
		</div>	
    
	</div>	
	
	<div class="w3copyright-agile">
		<p>© 2017 Form Signup Form. All rights reserved</p>
	</div>
	
</body>
</html>
