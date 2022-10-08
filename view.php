<?php
 include('connection.php');
 $query= "SELECT * FROM [books] Order By booknum";
 $result=sqlsrv_query($conn,$query);

 if (isset($_POST['searchbtn'])){
    $search = $_POST['search'];
    $sql = " SELECT * from [dbo].[books] Where booktitle= '$search'";
    $result = sqlsrv_query($conn, $sql);  
   
}
 
 ?>

<html id="userimg">
<head>
        <link rel="stylesheet" href="Librart1.css">
        </head>
    <title>Books Viewer</title>
    <div id="centre">
        <form action="" method="post">
    <input type="search" id="search"  onclick="clickfun()"  placeholder="Search..." name="search">
     <input type="submit" id="searchbtn" name="searchbtn" value="Search">
        </form>
    </div>
    <style>
        #centre{
      text-align: center;
      margin-left: 30px;
    }
    </style>
<body>
    <div class="tbl-header">
<table id="table" cellpadding="5px" cellspacing="5px" border="3px" 
 style="margin-left:150px"; >
    
    <thead class=".tbl-header">
        <tr>
            
        <th>Book Number</th>
        <th>Book Title</th>
        <th>Author Name</th>
        <th>Book Edition</th>
        <th>Book Details</th>
</tr>
</thead>
<style>
    #table{
      width:85%;
      background-color: lightcyan; 
      color:blue;
    margin-top: 100px;
       border:"3px";}
       #userimg{
  background-size: cover;
  background-repeat: no-repeat;
  backdrop-filter: blur;
  background-image: url(ee.jpg);
  background-position: center;
  
}
    
    </style>
<?php
while($row=sqlsrv_fetch_array($result)){
    ?>
    <tr class=".tbl-content">
       <td><?=$row['booknum']?></td>
       <td><?=$row['booktitle']?></td>
       <td><?=$row['authorname']?></td>
       <td><?=$row['bookedition']?></td>
       <td><?=$row['bookdetails']?></td>
</tr>
<?php
}  
?>
</tbody> 
</table>
    </div>
</body>
</html>

<?php
sqlsrv_free_stmt($result);
sqlsrv_close($conn);

?>

