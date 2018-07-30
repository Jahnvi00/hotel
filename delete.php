<?php
include('config.php');
$delete_record=$_GET['del'];
$query="DELETE FROM dbo.jahnvi WHERE adress='$delete_record'";
$getResult=sqlsrv_query($conn, $query);
echo "<script>";
        echo "window.alert('Data Deleted')
	window.location.href='view.php';
</script>";
?>
