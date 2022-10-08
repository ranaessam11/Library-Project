<?php
 include('connection.php');
session_start();

if (isset($_POST['savebookinfo'])){
    $sql = " INSERT Into [dbo].[books] values 
    ('$_POST[booknum]', '$_POST[booktitle]', '$_POST[authorname]', '$_POST[bookedition]', '$_POST[bookdetails]')";
    $result = sqlsrv_query($conn, $sql);  

    if($result === false){
     die( print_r( sqlsrv_errors(), true));
    }
    ?>
  <script type="text/javascript">
   alert("Book Added Successfully.");
 </script>
        <?php

      }
   

 ?>
 
 
 <html>
    <head>
        <link rel="stylesheet" href="Librart1.css">
        <link rel="stylesheet" href="Reset1.css">
        <script src="Library1.js"> </script>
    </head>
    <title> Admin Login </title>
<body id="add">
    <div id="Headerlogin"> 
        <header id="newhead">
            <a href="Library.php"> <input type="button" id="viewbooks" value=" view All Books" > </a>
            <a href="adminpage.php"><button id="Out" > Log out </button> </a> 
    
        
        </header>
    
    
    </div>
<img id="book" src="book.jpg" alt="">

<div id="Newtitle"> 
    <div id="newword" > <h1> Add New Book </h1> </div>
</div>


<form id="NewInfo" action="" method="post"> 
    <div id="numti"> 
    <label id="N"> Add Book Number</label>
    <input type="text" id="booknum" placeholder="Book Number" name="booknum" required> 
    <label id="T" > Add Book Title</label>
    <input type="text" id="booktitle" placeholder="Book Title" name="booktitle" required> 
</div>
<div id="Authoredition"> 
    <label id="A"> Add Author Name</label>
    <input type="text" id="Authorname" placeholder="Author Name" name="authorname" required>
    <label id="E">Add Book Edition </label>
    <input type="text " id="bookedition" placeholder="Book Edition" name="bookedition" required>
</div>
<div id="last" > 
    <label id="det"> Enter Book Details</label>
    <input type="text" placeholder="Enter Book Discription" id="dis" name="bookdetails" required>
  <input type="submit" value="Save New Book Info" id="save" name="savebookinfo">
<input type="file" id="file" value="Upload Book File" >


</form>
</body>
</html>