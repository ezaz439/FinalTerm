<?php
session_start();
 ?>
 <html>

<head>
  <link rel="icon" href="../images/image/tickets.png">
  <link rel="stylesheet" href="..V2/adminhome/style.css">
  <title>Home </title>
</head>

<body background="../images/image/background1.jpg">
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
  <!--1st part-->
  <table width="100%">
    <tr>
      <td width="10%"></td>
      <td width="300px"><img src="../images/image/home1.png" alt="" height="300px" width="300px"></td>
      <td width="90%" align="left">
        <font color="#FFFCF9" size="5">
          <h1>Get ticket from home.</h1>
          <h1>With the best tickets buying <font color="yellow">solution.</font>
          </h1>
        </font>
      </td>
    </tr>
  </table>

  

  <!--Bus section-->
  <table width="100%" bgcolor="#454545">
    <tr>
      <td width="10%"></td>
      <td width="300px"><img src="../images/image/bus1.png" alt="" height="300px" width="300px"></td>
      <td width="90%" align="left">
        <font color="#FFFCF9" size="5">
          <h1>Don't have to go the conter to buy ticket?</h1>
          <h1>Best bus ticket buying <font color="yellow">solution.</font>
          </h1>
        </font>
      </td>
    </tr>
  </table>
  <!--Running bus section-->
  <table width="100%">
    <tr>
      <td colspan="4" align="center">
        <font color="yellow" size="9">Running Buses</font> <br>
        <hr width="200px" align="center">
      </td>
    </tr>
    <tr>
      <td width="10%"></td>
      <td><img src="../images/image/ena.jpg" alt="" height="400px" width="250px"><br>
        <h2>
          <font color="#3C896D">Ena</font>
        </h2>
        <a href="../bus/index.php"><input type="button" name="ticket" value="Get Your Ticket"></a>
      </td>
      <td><img src="../images/image/hanif.jpg" alt="" height="400px" width="250px"><br>
        <h2>
          <font color="#3C896D">Hanif</font>
        </h2>
        <a href="../bus/index.php"><input type="button" name="ticket" value="Get Your Ticket"></a>
      </td>
      <td><img src="../images/image/greenline.jpg" alt="" height="400px" width="250px"><br>
        <h2>
          <font color="#3C896D">Greenline</font>
        </h2>
        <a href="../bus/index.php"><input type="button" name="ticket" value="Get Your Ticket"></a>
      </td>
    </tr>
  </table>

  <!--Stay with us section-->
  <table width="100%" bgcolor="#FFFCF9">
    <tr>
      <td width="100%" align="center"><img src="../images/image/location.gif" alt="" height="200x" width="300px"><br>
        <font color="#454545" size="6">Stay With us.More services are coming </font>
      </td>
    </tr>
  </table>
  <!--Footer section-->
     <?php require_once("../footer/index.php"); ?>

</body>

</html>
