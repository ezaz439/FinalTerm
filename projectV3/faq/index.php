<?php
session_start();
 ?>
 <html>
  <head>
    <title>Faq</title>
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

      <table align="center" width="1000px" bgcolor="#3C896D">
        <tr>
          <td valign="top" align="center" width="200px">
           <font color="##FFFFFF" size="6">Frequently Asked Question</font>
          </td>
        </tr>
        <tr>
          <td valign="top" align="center" width="200px">
           <font color="##FFFFFF" size="6">(FAQ)</font>
          </td>
        </tr>
        <tr>
          <td width="700px">
            <font color="#FFFFFF" size="4">What is the aim of TicketBari?</font></td>
        </tr>
        <tr>
        <td>
            <p>Our aim is to provide tickets such as movie tickets,bus tickets etc.
              So that people will buy ticket from their house,they don't need to come out for buying tickets.</p>
          </td>
        </tr>

        <tr>
          <td width="700px">
            <font color="#FFFFFF" size="4">What are the benefits of TicketBari?</font></td>
        </tr>
        <tr>
        <td>
          <ol type="1">
          <li>Buy movie tickets from home</li>
          <li>Buy bus tickets from home</li>
          <li>Pay from home by bKash,rocket,visa,master card</li>
          <li>Save your valuabe time</li>
          </ol>
          </td>
        </tr>

        <tr>
          <td width="700px">
            <font color="#FFFFFF" size="4">Why should visit TicketBari?</font></td>
        </tr>
        <tr>
        <td>
            <p>If you think you don't have time to go to cinema theater or bus ticket counter to buy
            tickets then you should visit TicketBari to buy and get tickets from home.</p>
          </td>
        </tr>

        <tr>
          <td width="700px">
            <font color="#FFFFFF" size="4">What is Ticket?</font></td>
        </tr>
        <tr>
        <td>
            <p>A piece of paper or card that gives the holder a certain right,
              especially to enter a place like cinema hall,
              travel by public transport, or participate in an event.</p>
          </td>
        </tr>

        <tr>
          <td width="700px">
            <font color="#FFFFFF" size="4">How to buy tickets from TicketBari?</font></td>
        </tr>
        <tr>
        <td>
            <p>
              At first open an account on TicketBari.Then click on bus or cinema which tickets you want to buy.
              After then select your date time.Then select your seats and pay your total amount.The process is done.


            </p>
          </td>
        </tr>

      </table>
      <br><br>
<!--Footer section-->
     <?php require_once("../footer/index.php"); ?>
  </body>
</html>
