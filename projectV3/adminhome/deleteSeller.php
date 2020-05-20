

<?php
include_once("service.php");
$delete= removeUser($_GET['id']);
$delete2 = removeUser2($_GET['id']);
header("Location:../adminhome/sellerinfo.php");