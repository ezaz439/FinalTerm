<?php
session_start();
 ?>
 <html>
 <head>
     <link rel="icon" href="../images/image/tickets.png">
     <link rel="stylesheet" type="text/css" href="../adminhome/style.css">
   <title>Bus Ticket</title>
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

<?php
include_once("service.php");

    $userList=loadAllUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show | Page</title>
</head>
<body>

</body>
</html>
<body>
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
    <h1>List of User</h1>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <div>
      <table id="myTable" border="1">
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>phonenumber</th>
              <th>Operations</th>
          </tr>
          <?php
              foreach ($userList as $user) {
                  echo
                  "<tr>
                      <td>$user[id]</td>
                      <td>$user[fullname]</td>
                      <td>$user[email]</td>
                      <td>$user[phonenumber]</td>
                      <td><a href='edit.php?id=$user[id]'>Edit</a> | <a href='delete.php?id=$user[id]'>Delete</a></td>
                  </tr>
                  ";
              }
          ?>
      </table>
    </div>
    <br><br><br><br><br><br><br>

    <?php require_once("../footer/index.php"); ?>

</body>
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
