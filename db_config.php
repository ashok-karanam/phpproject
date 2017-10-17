<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:e-commdb.database.windows.net,1433; Database = shopping", "ashok", "{ironman@13}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ashok@e-commdb", "pwd" => "{ironman@13}", "Database" => "shopping", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:e-commdb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


?>
