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
					<td colspan="5" align="center"><a<input type="submit" value="Submit" name="submit"></td>
				</tr>
				
				 <p id="demo"></p>
        <button onclick="as()">View the Record </button>
				<div class="container">
	<?php include 'header.php'?>
		<center><font color='red' size='6'><?php echo @$_GET['delete'];?>
		<?php /*echo @$_GET['updated']; ?><?php echo @$_GET['logged']; */?>
			</font></center>
		<a href="logout.php">Logout</a>
	<center>	<br></br><table align="center" width='900' border='4'>
			<tr>
			
					<th colspan="20" align="center" bgcolor="red"><h1>Viewing all the record</h1></th>
				
			</tr>
			<tr align="center">
				<td>Serial No.</td>
				<td> Name</td>
				<td>Country</td>
				<td>Phone</td>
				<td>Adress</td>
				<td>Delete</td>
				<td>Edit</td>
				<td>Detail</td>
			</tr>
	
			<?php
			
			include('config.php');
			$sqlselect="SELECT * FROM dbo.jahnvi";
			$getResults= sqlsrv_query($conn, $sqlselect);
				
				$i=1;
		
		while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
			{
			 $Name = $row['Name'];
		         $country=$row['country'];
			$phone=$row['phone'];
			$adress=$row['adress'];
			
			//echo ($row['id'] . " " . $row['name']. . PHP_EOL);
			
				
					
			?>
				<tr align="center">
				<td><?php echo $i;$i++; ?></td>
				<td><?php echo $Name; ?></td>
				<td><?php echo $country; ?></td>
				<td><?php echo $phone; ?></td>
				<td><?php echo $adress; ?></td>
				<td><a href='delete.php?del=<?php echo $adress ?>'>Delete</a></td>
				<td><a href='edit.php?edit=<?php echo $adress ?>'>Edit</a></td>
				<td><a href='view.php?detail=<?php echo $id ?>'>Detail</a></td>
				
					</tr>
			<?php } ?>
		</center>
		</table>
		<?php include 'footer.php'?>
		<div>
        </div>
	</body>
</html>
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
