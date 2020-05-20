<?php
include_once("service.php");

$sellerList = loadAllSeller();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show | Page</title>
</head>

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

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
    <h1>List of User</h1>
    <h3><a href="normaladmin.php">Home</a></h3>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <div>
        <table id="myTable" border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>City</th>
                <th>Gender</th>
                <th>Salary</th>
            </tr>
            <?php
            if (is_array($sellerList)) {

                foreach ($sellerList as $sell) {
                    echo
                        "<tr>
                                  <td>$sell[id]</td>
                                  <td>$sell[fullname]</td>
                                  <td>$sell[email]</td>
                                  <td>$sell[phonenumber]</td>
                                  <td>$sell[address]</td>
                                  <td>$sell[city]</td>
                                  <td>$sell[gender]</td>
                                  <td>$sell[salary]</td>
                                  <td><a href='editseller.php?id=$sell[id]'>Edit</a> | <a href='deleteSeller.php?id=$sell[id]'>Delete</a></td>
                              </tr>";                           


                }
            }
            ?>
        </table>
    </div>
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