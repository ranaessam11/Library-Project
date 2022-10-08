<?php
include('connection.php');
session_start();

if(isset($_POST["search"])){
    $booktitle=$_POST["booktitle"];
    $query= "SELECT * FROM [books] where [booktitle]='$booktitle'";
    $result=sqlsrv_query($conn,$query);
    ?>
   
   <html id="page" >
   <body>
       <div>
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
   </thead >

   <style>
       #table{
         width:85%;
         background-color: lightcyan; 
         color:blue;
       margin-top: 100px;
          border:"3px";}
          #page{
        width: 50%;
  background-size: cover;
  background-repeat: no-repeat;
  backdrop-filter: blur;
  background-image: url(ee.jpg);
  background-position: center;
  text-align: center;
  margin-left: 400px;
  margin-top: 100px;
          }
       
       </style>
   <?php
while($row=sqlsrv_fetch_array($result)){
    ?>
    <tr>
       <td><?php echo $row['booknum'];?></td>
       <td><?php echo $row['booktitle'];?></td>
       <td><?php echo $row['authorname'];?></td>
       <td><?php echo $row['bookedition'];?></td>
       <td><?php echo $row['bookdetails'];?></td>
</tr>
<?php
}
}
?>
</tbody> 
</form>
</html>

    <html>
    <head>
        <link rel="stylesheet" href="Librart1.css">
        <link rel="stylesheet" href="Reset1.css">
        <script src="Library1.js"> </script>
    </head>
<body id="userimg">
    <div id="Headerlogin"> 
        <header id="v" >
            
               
    <a href="adminpage.php">  <button id="In" > Login</button> </a>
            
        </header>
    </div>
    <div id="bo" > 
            <figure class="bookimg1">
                <a href="https://www.pdfdrive.com/download.pdf?id=136494023&h=1aa480a89378f61c111d68cdd8632b97&u=cache&ext=pdf" target="_self">
 <img src="Book1.jpg" width="250px" alt="Rich Dad Poor Dad (Robert T. Kiyosaki)" title="Rich Dad Poor Dad (Robert T. Kiyosaki)"></a>
                </figure>
        <div class="bookinformation"> 
            <form id="NewInfo"> 
                <div id="numti"> 
                <label id="N"> Book Number</label>
                <input type="text" id="booknum" value="1" readonly name="booknum"> 
                <label id="T" > Book Title</label>
                <input type="text" id="booktitle" value="Rich Dad Poor Dad" name="booktitle" readonly> 
            </div>
            <div id="Authoredition"> 
                <label id="A"> Author Name</label>
                <input type="text" id="Authorname" value="ROBERT T.KIYOSAKI" name="authorname" readonly >
                <label id="E"> Book Edition </label>
                <input type="text " id="bookedition" name="bookedithion" value="5047">
                <br>
                <label id="S"> Submission Date</label>
                <input type="text" value="1997" readonly id="date" name="submissiondate">
                <embed id="book1pdf" src="Rich Dad Poor Dad .pdf" >
            </div>
            <div id="last" > 
                <label id="det"> Book Details</label>
             
                <input type="text" value="If you’ve ever wondered what the best-selling personal finance book of all time was,
                 this is it. Rich Dad Poor Dad (1997)  ." id="dishome" readonly name="bookdetails">
        </div>
    </div> 
    </div>
        <div id="lib" > 
            <figure class="bookimg2">
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiO_JLazKb6AhXyhv0HHbAFAKIQFnoECA4QAQ&url=https%3A%2F%2Fglobalforgivenessinitiative.com%2Fuser%2Fpages%2Fdownload%2FFour-Steps-to-Forgiveness-William-Fergus-Martin.pdf&usg=AOvVaw1bds62EPScl_ATI4ayfasO" target="_self">
    <img src="book2.jpg" width="250px" alt="Four Steps To Forgiveness" title="Four Steps To Forgiveness"></a>
                </figure>
        <div class="bookinformation"> 
            <form id="NewInfo"> 
                <div id="numti"> 
                <label id="N"> Book Number</label>
                <input type="text" id="booknum" value="2" readonly> 
                <label id="T" > Book Title</label>
                <input type="text" id="booktitle" value="Four Steps To Forgiveness" readonly> 
            </div>
            <div id="Authoredition"> 
                <label id="A"> Author Name</label>
                <input type="text" id="Authorname" value="WILLIAM FERGUS MARTIN" readonly >
                <label id="E"> Book Edition </label>
                <input type="text " id="bookedition" value="6657">
                <br>
                <label id="S"> Submission Date</label>
                <input type="text" value="1943" readonly id="date">
                <embed id="book1pdf" src="Book1.pdf">
            </div>
            <div id="last" > 
                <label id="det"> Book Details</label>
                <input type="text" value=". This book or any portion thereof may not be reproduced or used in any manner whatsoever without the express written 
                permission of the publisher except for the use of brief quotations in a book review" id="dishome">
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    <div id="three"> 
            <figure class="bookimg1">
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjfpe-Fzab6AhVc7rsIHWuODQIQFnoECAsQAQ&url=https%3A%2F%2Fhtbiblio.yolasite.com%2Fresources%2FMarketing%2520Book.pdf&usg=AOvVaw3loAhiOnu4itjfUkjaHfgn" target="_self">
 <img src="book3.jpg" width="250px" alt="MANIFESTATION MARKETING" title="MANIFESTATION MARKETING"></a>
                </figure>
        <div class="bookinformation"> 
            <form id="NewInfo"> 
                <div id="numti"> 
                <label id="N"> Book Number</label>
                <input type="text" id="booknum" value="3" readonly> 
                <label id="T" > Book Title</label>
                <input type="text" id="booktitle" value="MANIFESTATION MARKETING" readonly> 
            </div>
            <div id="Authoredition"> 
                <label id="A"> Author Name</label>
                <input type="text" id="Authorname" value="SALEM MOMIN" readonly >
                <label id="E"> Book Edition </label>
                <input type="text " id="bookedition" value="9877">
                <br>
                <label id="S"> Submission Date</label>
                <input type="text" value="2001" readonly id="date">
                <embed id="book1pdf" src="Book3.pdf" >
            </div>
            <div id="last" > 
                <label id="det"> Book Details</label>
                <input type="text" value=" Something that has become so powerful for me in my writing life is combining practical, physical actions, with energetic, spiritual-type actions. I’d even go so far as to say it’s the thing that has changed the game for me." id="dishome" readonly>
        </div>
        <a href="view.php"><input type="button" value="view More Books" id="more" ></a>
        <style>
            #more{
      width: 300px;
    height: 50px;
    background-color: lightcyan;
    font-weight:bolder;
    font-size: large;
    border-radius: 15%;
    margin: 5px;
    margin-left: 150px;
    
    }
         </style>
    </div>
    
</body>
</head>
</html>

