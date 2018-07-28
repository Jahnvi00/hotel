<?php
		$serverName = " tcp:mall.database.windows.net";
$connectionOptions = array(
    "Database" => "acer",
    "Uid" => "hotel",
    "PWD" => "#Jahnvi00"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
				
				
?>
