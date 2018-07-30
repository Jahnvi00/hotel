<html>
	<head><title>Viewing the Record</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
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
				<td><a href='edit.php?edit=<?php echo $id ?>'>Edit</a></td>
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


			


