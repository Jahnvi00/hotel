<?php
	include('config.php');
	$edit_record=$_GET['edit'];
	$query1="SELECT * FROM dbo.jahnvi WHERE adress='$edit_record'";
	$getResults= sqlsrv_query($conn,$query1);
       while($row=sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))

	{
		$edit_id=$row['id'];
		$Name=$row['Name'];
		$country=$row['country'];
		$phone=$row['phone'];
		$adress=$row['adress'];
		
	}
?>

<html>
	<head>
		<title>updating record</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	<?php include 'header.php'?>
		<form method="POST" action="edit.php?edit_form=<?php echo $id;?>">
		<center>	<table width="500" border="0" align="center">
				<tr>	
					<th colspan="4"><h1>Updating Form</h1></th>
				</tr>
				<tr >
					<td align="right">Name</td>
					<td><input type="text" name="Name" value='<?php echo $Name; ?>'></td>
				</tr>
				<tr >
					<td align="right">Country</td>
					<td><input type="text" name="country" value='<?php echo $country; ?>'></td>
				</tr >
				<tr>
					<td align="right">Phone</td>
					<td><input type="text" name="phone" value='<?php echo $phone; ?>'></td>
				</tr>
				<tr >
					<td align="right">Adress</td>
					<td><input type="text" name="adress" value='<?php echo $adress; ?>'></td>
				</tr>
				
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Update" name="update"></td>
				</tr>
			</center>
			</table>
			
		</form>
		<?php include 'footer.php'?>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['update'])){
	
		$edit_record1=$_GET['edit_form'];
	        $Name=$_POST['Name'];
		$country=$_POST['country'];
		$phone=$_POST['phone'];
		$adress=$_POST['adress'];
		
		
		$query2="UPDATE dbo.jahnvi SET Name='$Name',country='$country',phone='$phone',adress='$adress' WHERE id='$edit_record1'";
		//Update dbo.jahnvi set username='jahnvi',name='dhand',id='hotel'where id='hotel';
		$getResult1=sqlsrv_query($conn, $query2);
		
		echo "<script>";
        	echo "window.alert('Data Updated')
		window.location.href='view.php';
		</script>";
		
		/*if(mysql_query($query1))
		{
			echo "<script>window.open('view.php?updated=Record has been updated..!','_self')</script>";
		}*/
	}
?>
