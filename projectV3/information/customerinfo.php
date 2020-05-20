<?php
session_start();
$id=$_SESSION['userid'];
$connection=mysqli_connect("localhost", "root", "", "project");

if (isset($_POST['submit'])){
$name=$_POST['name'];
$phnnumber=$_POST['phonenumber'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$query2="UPDATE signup SET fullname='$name',phonenumber='$phnnumber',address='$address',gender='$gender' WHERE id=$id";
$result2=mysqli_query($connection,$query2);

if($result2){
  $err="Update successfully";
}
else{
  echo "Error ". mysqli_error($connection);
}

}

$query="SELECT * FROM signup WHERE id=$id";
$result=mysqli_query($connection,$query);
$user=$err="";
if($result){
  $user=mysqli_fetch_assoc($result);
}
else{
  echo "Adding failed".mysqli_error($connection);
}

if(isset($_POST['delete'])){
  $query3="DELETE FROM signin WHERE id=$id";
  $result3=mysqli_query($connection,$query3);
  if($result3){
    session_unset();
    session_destroy();
    header("Location: ../home/index.php");
  }

}

 ?>
 <html>
  <head>
      <link rel="icon" href="../images/image/tickets.png">
      <link rel="stylesheet" type="text/css" href="../information/style.css">
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
    <table  width="700px" height="500px" bgcolor="#3C896D" align="center">
    <tr>
      <td width="100px"></td>
      <td width="200px" align="center"><?php echo $err; ?> <font color="#FFFCF9" size="3">FullName<font></td>
        <td width="200px"><input type="text" name="name" value="<?=$user['fullname']?>"></td>
      <td width="100px"></td>
    </tr>
    <tr>
      <td width="100px"></td>
       <td width="200px" align="center"><font color="#FFFCF9" size="3">Email<font></td>
        <td width="200px"><?= $user['email'] ?></td>
      <td width="100px"></td>

    </tr>
    <tr>
      <td width="100px"></td>
      <td width="200px" align="center"><font color="#FFFCF9" size="3">Phone Numbeer<font></td>
        <td width="200px"><input type="text" name="phonenumber" value="<?=$user['phonenumber']?>"> </td>
        <td width="100px"></td>
    </tr>
    <tr>
      <td width="100px"></td>
      <td width="200px" align="center">  <font color="#FFFCF9" size="3">Address<font></td>
        <td width="200px"><input type="text" name="address" value="<?=$user['address']?>"> </td>
        <td width="100px"></td>
    </tr>

    <tr>
      <td width="50px"></td>
      <td width="100px" align="center">  <font color="#FFFCF9" size="3">Gender<font></td>
        <td>
          <input type="radio" name="gender" <?php echo ($user['gender'] =='male')? 'checked':'' ?> value="male">Male
        <input type="radio" name="gender" <?php echo ($user['gender'] =='female')? 'checked':'' ?> value="female">female
      <input type="radio" name="gender" <?php echo ($user['gender'] =='other')? 'checked':'' ?> value="other">Other</td>
    </tr>

    <?php
         if($user['salary']!=""){
           echo '  <tr>
               <td>  <font color="#FFFCF9" size="3">Salary<font></td>
                 <td>'.$user['salary'].'</td>
             </tr>';
         }
     ?>
     <tr>
       <td width="30px"></td>
       <td width="100px"> <input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this?')" /> </td>
       <?php if($_SESSION['status']==0){
         echo '<td width="100px"><a href="../information/ticketinfo.php"> <input type="button" name="delete" value="Ticket Info"></a></td>';
       } ?>

        <td width="100px" ><input type="submit" name="submit" value="Update"> </td>
        <td width="100px"> <a href="../changepass/index.php"><input type="button" name="changepass" value="Change Password"></a></td>
        <td width="50px"></td>

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
