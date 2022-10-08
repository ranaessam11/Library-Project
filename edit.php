<?php

include('connection.php');
function getData()
{
  $data=array();
    $data[1]=$_POST['booknum'];
    $data[2]=$_POST['booktitle'];
    $data[3]=$_POST['authorname'];
    $data[4]=$_POST['bookedition'];
    $data[5]=$_POST['bookdetails'];
  return $data;
}
if(isset($_POST['edit']))
{
  $info=getData();
  $update="UPDATE [books] SET bookdetails='$info[5]' , booktitle='$info[2]',authorname='$info[3]',
  bookedition='$info[4]' WHERE booknum='$info[1]'";
  $result=sqlsrv_query($conn,$update);
}



 ?>
 <html>
    <head>
        <link rel="stylesheet" href="Librart1.css">
        <link rel="stylesheet" href="Reset1.css">
        <script src="Library1.js"> </script>
    </head>
<body id="add">
    <div id="Headerlogin"> 
        <header id="newhead">
            <a href="Library.php"> <input type="button" id="viewbooks" value=" view All Books" > </a>
            <a href="adminpage.php"><button id="Out"> Log out </button> </a> 
        </header>
    </div>
<img id="book" src="book.jpg" alt="book pic">

<div id="Newtitle"> 
    <div id="newword" > <h1> Edit Book </h1> </div>
</div>
<form id="NewInfo" method="post" action=""> 
    <div id="numti"> 
    <label id="N">  Book Number</label>
    <input type="text" id="booknum" placeholder="Book Number" name="booknum" >
    <label id="T" >  Book Title</label>
    <input type="text" id="booktitle" placeholder="Book Title" name="booktitle" >
</div>
<div id="Authoredition"> 
    <label id="A">  Author Name</label>
    <input type="text" id="Authorname" placeholder="Author Name" name="authorname">
    <label id="E">  Book Edition </label>
    <input type="text " id="bookedition" placeholder="Book Edition" name="bookedition" >
</div>
<div id="last" > 
    <label id="det"> Enter Book Details</label>
    <input type="text" placeholder="Enter Book Discription" id="dis" name="bookdetails" >

<input type="submit" value="Save Book Edit" name="edit" id="save" onclick="return editfun();" >



</form>
</body>
</html>