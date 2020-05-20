<?php

session_start();
$id = $_SESSION['userid'];
$connection = mysqli_connect("localhost", "root", "", "project");
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $err= "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $err= "File is not an image.";
        $uploadOk = 0;
    }
    $target_dir = "../images/image/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // Check if file already exists
    if (file_exists($target_file)) {
        $err= "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $err= "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $err= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $err= "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $err= "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            $err= "Sorry, there was an error uploading your file.";
        }
    }
    $query2 = "UPDATE signup SET filename='$target_file' WHERE id=$id";
    $result2 = mysqli_query($connection, $query2);

    if ($result2) {
        $err = "Update successfully";
    } else {
        $err= "Error " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../images/image/tickets.png">
    <link rel="stylesheet" type="text/css" href="../information/style.css">
    <title>Bus Ticket</title>
</head>

<body background="../images/image/Bus-Traveling.jpg">
    <!--Header-->
    <table width="100%" bgcolor="white">
        <tr>
            <td align="center"><a href="../adminhome/index.php"><img src="../images/image/ticketbari.png" alt="logo" height="60px" width="120px"> </a><br>
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


    <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <?php echo $err; ?> <font color="#FFFCF9" size="3">Profile Pic<font>
                <input type="submit" value="Upload Image" name="submit">
    </form>

</body>

</html>