<?php
session_start();
$connection=mysqli_connect("localhost", "root", "", "project");
global $err;
if(isset($_POST['submit'])){
  $cmpanyname=$_POST['cmpanyname'];
  $departtime=$_POST['departtime'];
  $coachno=$_POST['coachno'];
  $startingcounter=$_POST['startingcounter'];
  $endcounter=$_POST['endcounter'];
  $arrivaltime=$_POST['arrivaltime'];
  $seatavailable=$_POST['seatavailable'];
  $fare=$_POST['fare'];

  if( $cmpanyname=="" || $departtime=="" || $coachno=="" || $startingcounter=="" || $endcounter=="" || $arrivaltime=="" || $seatavailable=="" ){
     $err="Field can't be empty";
  }
  else{
    $sql="INSERT INTO bus(companynm,departtime,coachno,startingcounter,endcounter,fare,arrivaltime,seatavailable) VALUES ('$cmpanyname','$departtime','$coachno','$startingcounter','$endcounter','$fare','$arrivaltime','$seatavailable')";
    if (mysqli_query($connection, $sql)) {
        $real="Bus added";
    } else {
        echo "Adding failed:".mysqli_error($connection);
    }

  }
}
?>
<html>
  <head>
      <link rel="stylesheet" href="addbus.css">
    <link rel="stylesheet" href="../Vendor/grid.css">
    <link rel="stylesheet" href="../Vendor/queries.css">
    <title>SignUP</title>
  </head>
  <body>
    <!--Header Section-->
  <table width="100%" bgcolor="white">
    <tr>
         <td  align="center"><a href="../home/index.php"><img src="../images/image/ticketbari.png" alt="logo" height="60px" width="120px"> </a><br>
         <font color="#3C896D" size="4"><marquee direction="right">The Home of Tickets</marquee><font></td>
    </tr>
     </table>
     <!--Navbar-->
   <?php
     require("../navbar/nav.php");
    ?>
    <br>
    <div class="box">
    <form class="signUp-form" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <span><font color="red"><?php echo $err; ?></font></span>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="name">Bus Company</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="cmpanyname" placeholder="Enter Bus Company Name" id="name" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="UserName">Depart time</label>
      </div>
      <div class="col span-2-of-3">
      <input type="time" name="departtime" placeholder="Enter Depart Time" id="UserName" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="coachno">Coach No</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="coachno" placeholder="Enter Coach No" id="Email" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="startingcounter">Startting Counter</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="startingcounter" placeholder="Enter Starting Counter" id="password" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="endcounter">End Counter</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="endcounter" placeholder="Enter End counter" id="password2" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="fare">Fare</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="fare" placeholder="Enter ticket fare" id="BirthDay" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="arival time">Arrival Time</label>
        </div>
      <div class="col span-2-of-3">
      <input type="time" name="arrivaltime" placeholder="Enter arival time" id="BirthDay" >
      </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="seatavailable">Available Seat</label>
        </div>
      <div class="col span-2-of-3">
      <input type="text" name="seatavailable" placeholder="Enter available seat" id="BirthDay" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label>&nbsp;</label>
        </div>
      <div class="col span-2-of-3">
          <input type="submit" class="submit-button" name="submit" value="Add Bus">
      </div>
    </div>
   </form>
   </div>

   <!--Footer section-->
  </body>

</html>
