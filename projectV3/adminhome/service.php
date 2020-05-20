<?php
include_once("dataaccess.php");
function addNewUser($name, $email,$phnnumber,$address1,$city,$salary){

    $user=array("name"=>$name,"email"=>$email,"phnnumber"=>$phnnumber,"street1"=>$address1,"city"=>$city,"salary"=>$salary);
    return addUser($user);
}
function addNewUser2($email,$password,$s)
{

  $user2=array("email"=>$email,"password"=>$password,"addas"=>$s);
  return addUser2($user2);
}
function updateUser($id,$name,$email,$phnnumber,$address,$gender){
  $user=array("id"=>$id,"fullname"=>$name,"email"=>$email,"phonenumber"=>$phnnumber,"street1"=>$address,"gender"=>$gender);
    return editUser($user);
}
function removeUser($id){
    return deleteUser($id);
}
function removeUser2($id){
    return deleteUser2($id);
}
function loadAllUser(){
    return getAllUser();
}
function loadAllSeller()
{
  return getAllSeller();
}
function loadUser($id){
    return getUserById($id);
}
function loadBonus($id)
{
  return getSellerBonus($id);
}
function loadSellerById($id)
{
  return getSellerById($id);
}
function loadAllBus(){
  return getAllBus();
}
function loadBus($busid){
    return getBusById($busid);
}
function updateBus($busid,$companyname,$departtime,$coachno,$startingcounter,$endcounter,$fare,$arrivaltime,$seatavailable){
  $bus=array("busid"=>$busid,"companynm"=>$companyname,"departtime"=>$departtime,"coachno"=>$coachno,"startingcounter"=>$startingcounter,"endcounter"=>$endcounter,"fare"=>$fare,"arrivaltime"=>$arrivaltime,
"seatavailable"=>$seatavailable);
return editBus($bus);
}
function removeBus($busid){
    return deleteBus($busid);
}
function UpdateSeller($id,$name,$email,$phnno,$bonus){
  $seller=array("id"=>$id,"name"=>$name,"email"=>$email,"phnno"=>$phnno,"bonus"=>$bonus);
  return editSeller($seller);
}

?>
