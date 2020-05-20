<?php
session_start();
global $err;
include_once("service.php");

   if($_SERVER['REQUEST_METHOD']=="POST"){
       $result=updateBus($_GET['busid'],$_POST['companynm'],$_POST['departtime'],$_POST['coachno'],$_POST['startingcounter'],$_POST['endcounter'],$_POST['fare'],
     $_POST['arrivaltime'],$_POST['seatavailable']);
       if($result){
         $err= "Upadate successfully";
           //header("Location:user_show.php");
       }
       else {
         echo "Update failed.";
       }
   }
   $bus=loadBus($_GET['busid']);

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

    <div class="box">
    <form  method="post">
        <span><font color="red"><?php echo $err; ?></font></span>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="name">Bus Company</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="companynm"  value="<?=$bus['companynm'] ?>" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="UserName">Depart time</label>
      </div>
      <div class="col span-2-of-3">
      <input type="time" name="departtime" value="<?=$bus['departtime'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="coachno">Coach No</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="coachno" value="<?=$bus['coachno'] ?>" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="startingcounter">Startting Counter</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="startingcounter"  value="<?=$bus['startingcounter'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="endcounter">End Counter</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="endcounter"  value="<?=$bus['endcounter'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="fare">Fare</label>
      </div>
      <div class="col span-2-of-3">
      <input type="text" name="fare"  value="<?=$bus['fare'] ?>" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="arival time">Arrival Time</label>
        </div>
      <div class="col span-2-of-3">
      <input type="time" name="arrivaltime"  value="<?=$bus['arrivaltime'] ?>">
      </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label for="seatavailable">Available Seat</label>
        </div>
      <div class="col span-2-of-3">
      <input type="text" name="seatavailable" value="<?=$bus['seatavailable'] ?>" >
      </div>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
          <label>&nbsp;</label>
        </div>
      <div class="col span-2-of-3">
          <input type="submit" class="submit-button" name="submit" value="Update Bus">
      </div>
    </div>
   </form>
   </div>
  </body>
</html>
