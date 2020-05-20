<?php
 session_start();
 global $passer,$l,$connection;
 if(isset($_POST['submit'])){

 $oldpass=$_POST['oldpass'];
 $newpass=$_POST['newpass'];
 $cfpass=$_POST['cfpass'];
 $id=$_SESSION['userid'];
  $connection=mysqli_connect("localhost", "root", "", "project");
  if ($newpass=="" && $cfpass="") {
      $passer="Can't empty";
  }
   elseif (strlen($newpass)<8) {
      $passer="Required at least 8 char";
  }
   elseif (strlen($newpass)>=8 && $newpass==$cfpass) {
      for ($i=0; $i <strlen($newpass) ; $i++) {
          if ((ord($newpass[$i])>=65 && ord($newpass[$i])<=90) || (ord($newpass[$i])>=97 && ord($newpass[$i])<=122)) {
              $l++;
          }
      }
      if ($l==0)
       {
          $passer="Required at least 1 letter";
      }
      else{
        if (! $connection) {
            die("Database not connected".mysqli_connect_error());
        }

        else{
          $query="SELECT password FROM signin WHERE id=$id";
          $result=mysqli_query($connection,$query);
          if (!$result) {
              die("Database not connected".mysqli_error($result));
          }
          while ($row=mysqli_fetch_array($result)) {
            if($row['password']!=$newpass){
              $sql = "UPDATE signin SET password='$newpass' WHERE id=$id";
              $result2=mysqli_query($connection,$sql);
               if (!$result2) {
                   die("Database not connected".mysqli_error($result2));
               }
               else{ $passer= "Password changed"; }

            }
            else{
              $passer= "Password must be unique";
            }
          }

        }
  }


 }
 else{
   $passer="New password and confirm password didn't match";
 }


}
 ?>
 <html>
  <head>
    <link rel="icon" href="../images/image/tickets.png">
    <link rel="stylesheet" type="text/css" href="../changepass/style.css">


    <title>Email Verification</title>
  </head>
  <body>
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
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);  ?> " method="post">


    <table  border="1px" align="center" >
        <?php if($passer){ echo '<tr align="center">
          <td colspan="2">'.$passer.'</td>
        </tr>'; }?>
<table  width="300px" height="400px" bgcolor="#3C896D" align="center">
      <tr>
        <td>Old Password</td>
        <td><input type="password" name="oldpass" > </td>
      </tr>
      <tr>
        <td>New Password</td>
        <td><input type="password" name="newpass" > </td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td><input type="password" name="cfpass" > </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Change Password" > </td>
      </tr>
    </table>
  </table>
    </form>
    <br>
    <br>
    <!--Footer section-->
     <?php require_once("../footer/index.php"); ?>
  </body>
</html>
