



<?php
session_start();
$id=$_SESSION['userid'];
$connection=mysqli_connect("localhost", "root", "", "project");
$query="SELECT * FROM seatreserve WHERE id=$id";
$result=mysqli_query($connection,$query);
$ticketList=array();
if($result){
 for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) {
     $tickerList[$i]=$row;

     }
}


 ?>

 <html>
 <head>
     <link rel="icon" href="../images/image/tickets.png">
     <link rel="stylesheet" type="text/css" href="../adminhome/style.css">
   <title>Bus     <title>Show | Page</title>
</title>
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
<html>
<head>
</head>
  <style>
  * {
    box-sizing: border-box;
  }

  #myInput {
    background-image: url('/css/searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }

  #myTable {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    font-size: 18px;
  }

  #myTable th, #myTable td {
    text-align: left;
    padding: 12px;
  }

  #myTable tr {
    border-bottom: 1px solid #ddd;
  }

  #myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
  }
  </style>
    <h1>Ticket History</h1>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <div>
      <table id="myTable" border="1">
          <tr>
              <th>Reserve Date</th>
              <th>Pnr</th>
              <th>Reseved Seat</th>
          </tr>
          <?php

                          foreach($tickerList as $ticket) {
                              echo
                              "<tr>
                                  <td>$ticket[rsvdate]</td>
                                  <td>$ticket[pnr]</td>
                                  <td>$ticket[rsvseat]</td>
                              </tr>
                              ";
                          }

          ?>
      </table>
    </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once("../footer/index.php"); ?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</html>
