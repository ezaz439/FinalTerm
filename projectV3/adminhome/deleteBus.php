<?php
include_once("service.php");
$delete= removeBus($_GET['busid']);
header("Location:../adminhome/showbus.php");