<?php
session_start();
global $err;
include_once("service.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $result = updateSeller(
        $_GET['id'],
        $_POST['name'],
        $_POST['email'],
        $_POST['phnno'],
        $_POST['salary'],
        $_POST['bonus'],
    );
    if ($result) {
        $err = "Upadate successfully";
        //header("Location:user_show.php");
    } else {
        echo "Update failed.";
    }
}
$seller = loadSellerById($_GET['id']);
$bonus = loadBonus($_GET['id']);
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

    <div class="box">
        <form method="post">
            <span>
                <font color="red"><?php echo $err; ?></font>
            </span>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="name">Name</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="name" value="<?= $seller['fullname'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="UserName">Email</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="email" name="email" value="<?= $seller['email'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="coachno">Phone No</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="phnno" value="<?= $seller['phonenumber'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="coachno">Salary</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="phnno" value="<?= $seller['salary'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="startingcounter">Bonus</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="bonus" value="<?= $bonus['bonus'] ?>">
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" class="submit-button" name="submit" value="Update Seller">
                    </div>
                </div>
        </form>
    </div>
</body>

</html>