<?php
session_start();
 ?>
<html>
  <head>
    <link rel="icon" href="../images/image/tickets.png">
    <link rel="stylesheet" href="..V2/about/style.css">

    <title>About Us</title>
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
         <font color="#3C896D" size="6">About Us</font>
        </td>

        <td  width="700px">
          <font color="#3C896D" size="4">Our Mission</font>
            <p>Ticketbari is a online travel service provider which aims to make long distance travel in  Bangladesh easy. Our misson for users is to get tickets from home.</p>
      <br>
    </td>
      </tr>


    <tr>
      <td width="200px"></td>
      <td width="700px">
        <font color="#3C896D" size="4">Our services</font>
        <p> TicketBari is a One Stop Online Bus Ticket Booking solution porta. lNo matter where we are we can book our tickets without going to the bus counter and all that we need is just an internet connection and computer to get tickets.

        In the past, we never thought of buying bus tickets through online platform as it was relied on counters and agents. Now, with intouch innovative concept, bus travelers can find respective destination and can schedule their bus journey through our service portal with just a few clicks. Bus departure times along with bus fares and relevant information will be displayed while booking tickets, payment can be made online as well as offline with multiple options, 24 hour call center support with agent networks, all integrated in one solution. It will provide our passengers best possible option for travelling by bus. Our online coach booking and reservation system guarantees that both money and time is saved</p> <br>
      </td>
    </tr>
    <tr >
      <td width="200px">

      </td>

      <td  width="700px">
        <font color="#3C896D" size="4">Upcoming Services</font>
        <ol type="i">
        <li>Air Tickets</li>
        <li>Train tickets</li>
        <li>Launch Tickets</li>
      </ol>

    <br><br>  </td>
    </tr>
    <br><br><br>
      </table>


    </table>

  </body>
</html>
