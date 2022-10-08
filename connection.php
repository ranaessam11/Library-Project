<?php
 sqlsrv_configure('WarningsReturnAsErrors',0);
    $serverName = "DESKTOP-Q40DH9M";
    $connectionInfo = array("Database" => "LibraryDB");
    $conn = sqlsrv_connect($serverName, $connectionInfo);


   
    ?>