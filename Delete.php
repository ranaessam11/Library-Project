<?php
sqlsrv_configure('WarningsReturnAsErrors',0);
$serverName = "DESKTOP-Q40DH9M";
$connectionInfo = array("Database" => "LibraryDB");
$conn = sqlsrv_connect($serverName, $connectionInfo);

session_start();
if (isset($_POST['delbook'])){
    $sql = " DELETE from [dbo].[books] Where booknum= $_POST[booknum];";
    $result = sqlsrv_query($conn, $sql);  
   
}

    ?>



   <html>
    <head>
    <link rel="stylesheet" href="Librart1.css">
    <link rel="stylesheet" href="Reset1.css">
    <script src="Library1.js"> </script>
    </head>
    <body>
<form action="delete.php" method="post">
    <div id="deleted" > 
<label id="delnum" > Enter Book Number </label>
<input type="text"  name="booknum" placeholder="Enter Number To Delete " id="enterr">
<br>
<input type="submit" name="delbook" id="delbtn" value="Delete">
</form>
</div>
    </body>
   </html>

