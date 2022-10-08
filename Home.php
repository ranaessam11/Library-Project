<?php
include('connection.php');
session_start();
if (isset($_POST['logout'])){
    session_destroy();
    header("location:adminpage.php");
   
    
}
    ?>

<html>
        <head>
            <link rel="stylesheet" href="Librart1.css">
            <link rel="stylesheet" href="Reset1.css">
            <script src="Library1.js"> </script>
    <body id="homeback">
    
        <div id="Headerlogin"> 
            <header id="Ho" >
            
                <div id="z">
                    <a href="adminpage.php"><button id="Out" name="logout"> Log out </button> </a> 
                
              <a href="Library.php"> <input type="button" id="viewbooks" value=" view All Books" > </a>
                </div>
                <style>
                    #z{
                        margin-left: 300px;
                    }
                    </style>
        
            </header>
        </div>
       <h1 id="welcome"> Welcome To Admin Home Page</h1>

        <div id="Adminactions"> 
       <a href="addbook.php">  <input type="button" id="Addnewbook" value="Add New Book"> </a> 
       <br>
      
          <a href="delete.php"><input type="button" id="DeleteBook" value="Delete Book" name="delete"> </a>
         <br>
        <a href="edit.php"> <input type="button" id="EditBook" value="Edit Book " > </a>

        </div>
</body>
</head>
</html>