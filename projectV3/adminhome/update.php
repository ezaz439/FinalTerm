<?php
session_start();
 ?>
 <html>
 <head>
     <link rel="icon" href="../images/image/tickets.png">
     <link rel="stylesheet" href="..V2/adminhome/style.css">
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
     <td>  <font color="#FFFCF9" size="3">UserName<font></td>
       <td><input type="text" name="UserName"> </td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">FullName<font></td>
       <td><input type="text" name="UserName"> </td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">Phone Number<font></td>
       <td><input type="text" name="UserName"> </td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">Gender<font></td>
       <td>
         <input type="radio" name="gender" value="male">Male
       <input type="radio" name="gender" value="female">female
     <input type="radio" name="gender" value="other">Other</td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">Address<font></td>
       <td><input type="text" name="address"> </td>
   </tr>
   <tr>
     <td> <font color="#FFFCF9" size="3">Salary<font></td>
       <td admin="center"><input type="text" name="addas"></td>
   </tr>
    <tr>
       <td align="center" colspan="2"><input type="submit" name="add" value="Update"> &nbsp;&nbsp;&nbsp;&nbsp;
       <a href="../adminhome/home.php"><input type="button" name="back" value="Cancel"></a></td>
    </tr>
     </table>
     <br>
     <br>
     <br>
     <!--Footer section-->
     <?php require_once("../footer/index.php"); ?>
 </body>
</html>
