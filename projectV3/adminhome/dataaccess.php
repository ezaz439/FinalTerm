<?php
include_once("db.php");
function addUser($user){
  $query="INSERT INTO signup(fullname,email,phonenumber,address,city,salary) VALUES ('$user[name]','$user[email]','$user[phnnumber]','$user[street1]','$user[city]','$user[salary]')";

    return executeNonQuery($query);

}
function addUser2($user2){
    $query2="INSERT INTO signin(email,password,status) VALUES ('$user2[email]','$user2[password]','$user2[addas]')";
    return executeNonQuery($query2);
}
function editUser($user){
    $query="UPDATE signup SET  fullname='$user[fullname]',email='$user[email]',
    phonenumber='$user[phonenumber]',address='$user[street1]',gender='$user[gender]' WHERE id=$user[id]";
    return executeNonQuery($query);
}
function deleteUser($id){
    $query="DELETE FROM signup WHERE id=$id";
    return executeNonQuery($query);
}
function deleteUser2($id){
    $query2="DELETE FROM signin WHERE id=$id";
    return executeNonQuery($query2);
}
function delbus($id){
  $query2 = "DELETE FROM bus WHERE busid=$id";
  return executeNonQuery($query2);
}
function getUserById($id){
    $query="SELECT * FROM signup WHERE id=$id";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=mysqli_fetch_assoc($result);
    }
    return $user;
}

function getAllUser(){
    $query="SELECT * FROM signup";
    $result=executeQuery($query);
    $userList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) {
           $userList[$i]=$row;
       }
    }
    return $userList;
}
function getAllSeller()
{
  $query = "SELECT * FROM signin where status=0";
  $result = executeQuery($query);
  $userList = array();
  $j = 0;
  if ($result) {
    for ($i = 0; $row = mysqli_fetch_assoc($result); $i++) {
      $query2 = "SELECT * FROM signup where id=$row[id]";
      $result2 = executeQuery($query2);
      $row2 = mysqli_fetch_assoc($result2);
      $userList[$j] = $row2;

      $j++;
    }
  }
  
  return $userList;
}
function  getAllBus(){
  $query="SELECT * FROM bus";
  $result=executeQuery($query);
  $busList=array();
  if($result){
    for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) {
        $busList[$i]=$row;
  }
}
   return $busList;
}
function getBusById($busid){
  $query2="SELECT * FROM bus WHERE busid = $busid";
    $result2=executeQuery($query2);
  $bus=null;
  if($result2){
      $bus=mysqli_fetch_assoc($result2);
  }
  return $bus;

}
function editbus($bus){
  $query= "UPDATE bus SET companynm='$bus[companynm]',departtime='$bus[departtime]',coachno='$bus[coachno]',
  startingcounter='$bus[startingcounter]',endcounter='$bus[endcounter]',fare='$bus[fare]',
  arrivaltime='$bus[arrivaltime]',seatavailable='$bus[seatavailable]' WHERE busid=$bus[busid]";
  return executeNonQuery($query);

}
function deleteBus($busid){
  $query="DELETE FROM bus WHERE busid=$busid";
  return executeNonQuery($query);
}
function getSellerById($id){
  $query="SELECT * FROM signup where id=$id";
  $result = executeQuery($query);
 if($result){
      $seller=mysqli_fetch_assoc($result);
  }
  return $seller;
}
function getSellerBonus($id)
{
  $query = "SELECT * FROM sellerbonus where id=$id";
  $result = executeQuery($query);
  if ($result) {
    $bonus = mysqli_fetch_assoc($result);
  }
  return $bonus;
}

function editSeller($seller){
  $query="UPDATE signup set fullname='$seller[name]',email='$seller[email]',phonenumber='$seller[phnno]' where id=$seller[id]";
  $query2= "UPDATE sellerbonus set bonus='$seller[bonus]' where id=$seller[id]";
  executeNonQuery($query);
  return executeNonQuery($query2);

}
?>