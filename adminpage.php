<?php
session_start();
 sqlsrv_configure('WarningsReturnAsErrors',0);
    $serverName = "DESKTOP-Q40DH9M";
    $connectionInfo = array("Database" => "LibraryDB");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    error_reporting(E_ALL);
ini_set('display_errors', 1);
   
    ?>

<html>

<head>
    <link rel="stylesheet" href="Librart1.css">
    <link rel="stylesheet" href="Reset1.css">
    <script src="Library1.js"> </script>
</head>

<body id="he">

    <div id="Headerlogin">
        <header id="Lo">
           
<div id="vi">
            <a href="Library.php"> <input type="button" class="vi" id="viewbooks" value=" view All Books "> </a>
            <style>
                #vi{
                    margin-left: 550px;
                    
                }
                </style>
</div>
        </header>
    </div>
    <div id="back">
        <div id="Loginpage">
            <div id="Loginhead">
                <h1> Login </h1>
            </div>
            <div id="log">

                <form method="post" action="Adminlogin.php">
                    <label class="Email"> Please Enter Your Email </label>
                    <input type="Email" onclick=" zoomfun1()" id="Email" placeholder="Email" required name="Email">
                    <br>
                    <label class="Password"> Password</label>
                    <input type="Password" onclick="zoomfun()" id="Password" placeholder="Password" required
                        name="Password">
                    <br>
                    <div id="enter">
                        <button type="submit" value="Login" onclick="colorfun1()" id="Log1" name="Login"> Login
                        </button>
                        <button type="reset" value="Reset" onclick="return resetfun();" ondblclick="colorfun" id="Reset"
                            name="Reset"> Reset</button>
                    </div>

                    <br>
                    

                </form>
            </div>
        </div>
    </div>




</body>
</head>

</html>
