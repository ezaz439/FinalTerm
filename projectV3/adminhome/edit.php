<?php
session_start();
 ?>
 <?php
include_once("service.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $result=updateUser($_GET['id'],$_POST['fullname'],$_POST['email'],$_POST['phonenumber'],$_POST['street1'],$_POST['gender']);
        if($result){
          echo "Upadate successfully";
            //header("Location:user_show.php");
        }
    }
    $user=loadUser($_GET['id']);
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
   <form method="post">
   <table  width="500px" height="500px" bgcolor="#3C896D" align="center">
   <tr>
     <td>  <font color="#FFFCF9" size="3">FullName<font></td>
       <td><input type="text" name="fullname" value="<?=$user['fullname'] ?>"> </td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">Email<font></td>
       <td><input type="text" name="email" value="<?=$user['email'] ?>"> </td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">Phone Number<font></td>
       <td><input type="text" name="phonenumber" value="<?=$user['phonenumber'] ?>"> </td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">Gender<font></td>
       <td>
         <input type="radio" name="gender" <?php echo ($user['gender'] =='male')? 'checked':'' ?> value="male">Male
       <input type="radio" name="gender" <?php echo ($user['gender'] =='female')? 'checked':'' ?> value="female">female
     <input type="radio" name="gender" <?php echo ($user['gender'] =='other')? 'checked':'' ?> value="other">Other</td>
   </tr>
   <tr>
     <td>  <font color="#FFFCF9" size="3">Address<font></td>
       <td><input type="text" name="street1" value="<?=$user['address'] ?>"> </td>
   </tr>
    <tr>
       <td align="center" colspan="2"><input type="submit" name="add" value="Update"> &nbsp;&nbsp;&nbsp;&nbsp;
       <a href="../adminhome/home.php"><input type="button" name="back" value="Cancel"></a></td>
    </tr>
     </table>
   </form>
     <br>
     <br>
     <br>
     <!--Footer section-->
     <?php require_once("../footer/index.php"); ?>
 </body>
</html>
