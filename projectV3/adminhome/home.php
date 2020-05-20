<?php
session_start();
 ?>
 <html>
 <head>
     <link rel="icon" href="../images/image/tickets.png">
     <link rel="stylesheet" type="text/css" href="../adminhome/style.css">
   <title>Bus Ticket</title>
 </head>
 <body  background="../images/image/Bus-Traveling.jpg">
   <!--Header-->
   <table width="100%" bgcolor="white">
     <tr>
       <td align="center"><a href="../home/index.php"><img src="../images/image/ticketbari.png" alt="logo" height="60px" width="120px"> </a><br>
         <font color="#3C896D" size="4">
           <marquee direction="right">The Home of Tickets</marquee>
           <font>
       </td>
     </tr>
   </table>
   <!--Navbar-->
 <?php
   require("../navbar/nav.php");
  ?>

   <br>
   <br>
   <br>
   <br>

   <!--Main Section-->
   <form class="" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
   <table  width="500px" height="500px" bgcolor="#3C896D" align="center">
   <tr>
       <td align="center"><a href="../adminhome/add.php"><input type="button" name="add" value="Add USER/ADMIN"></a>  </td>
   </tr>
   <tr>
       <td align="center"><a href="../adminhome/showusers.php"><input type="button" name="Update" value="Show Users"></a></td>
   </tr>

   <tr>
       <td align="center"><a href="../information/admininfo.php"><input type="button" name="Upadate" value="Update My information"></a>  </td>
   </tr>
   

     </table>
     <br>
     <br>
     <br>
     <!--Footer section-->
     <?php require_once("../footer/index.php"); ?>
 </body>
</html>
