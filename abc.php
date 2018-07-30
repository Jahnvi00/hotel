<html>
	<head>
		<title>Booking Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	<?php include 'header.php'?>
	
		<form method="POST" action="abc.php">
			<center><table  border="0" align="center">
				<tr>	
					<th colspan="6"><h1>Booking Form</h1></th>
				</tr>
				<tr >
					<td align="right"><label>Name:</label></td>
					<td><input type="text" name="Name"><font color="red"><?php echo @$_GET['Name']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Country:</label></td>
					<td><input type="text" name="country"><font color="red"><?php echo @$_GET['country']; ?></font></td>
				</tr >
				<tr>
					<td align="right"><label>Phone:</label></td>
					<td><input type="text" name="phone"><font color="red"><?php echo @$_GET['phone']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Adress:</label></td>
					<td><input type="text" name="adress"><font color="red"><?php echo @$_GET['adress']; ?></font></td>
				</tr>
				
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Submit" name="submit"></td>
				</tr>
				</center>
				
			</table>
			
		</form>
		<?php include 'footer.php'  ?>
		<div>
        </div>
        </div>
        
	</body>
</html>
<?php

include('config.php');
 
 if(isset($_POST['submit']))
 {
 $Name=$_POST['Name'];
 $country=$_POST['country'];
 $phone=$_POST['phone'];
 $adress=$_POST['adress'];
 
 
 
	 $que="insert into dbo.jahnvi(Name,country,phone,adress)values('$Name','$country','$phone','$adress')";
$getResults= sqlsrv_query($conn, $que);
	 


//if($conn->query($que)=== true)
//{
	echo "<center><b>The follwing Data has been inserted into our databse:</b></center>";
	echo "<table width='500px'align='center' border='4'><tr><td>$Name</td><td>$country</td><td>$phone</td><td>$adress</td></tr></table>";                      
//}


}


?>
