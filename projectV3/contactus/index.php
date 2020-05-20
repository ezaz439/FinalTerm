<?php
session_start();
 ?>
<html>
  <head>
    <title>Contact Us</title>
  </head>
  <body>
    <!--Header-->
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
      <table align="center" width="800px">
        <tr >
          <td valign="top" width="200px">
           <font color="#3C896D" size="6">Contact Us</font>
          </td>

          <td  width="700px">
            <font color="#3C896D" size="4">Help and Support</font>
              <p> Here you can find to our most frequently asked questions and
                learn about TicketBari Ltd, how to use it, how to  stay safe and get in touch with us</p>
        <br>
      </td>
        </tr>


        <tr>
          <td width="200px"></td>
          <td width="700px">
            <font color="#3C896D" size="4">How to contact with us? </font><br><br>
          </td>
        </tr>

        <tr>
          <td width="200px"></td>
          <td width="700px">
            <p>You can mail us,we will get back to you within 6 hours and also you can call us on our hotline.</p>


          </td>
        </tr>

        <tr>
          <td width="200px"></td>
          <td>
            <font size="3">Our mail: </font>
            <font color="#3C896D" size="5">ticketbari@gmail.com</font>
          </td>
        </tr>

        <tr>
          <td width="200px"></td>
          <td>
            <font size="3">HotLine: </font>
            <font color="#3C896D" size="5">8888</font>
          </td>
        </tr>

      </table>

<br><br><br><br><br><br><br><br><br><br><br><br>
      <!--Footer section-->
     <?php require_once("../footer/index.php"); ?>
  </body>
</html>
