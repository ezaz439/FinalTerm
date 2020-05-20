<?php
 $nmer=$nmer1=$nmer2=$emrr= $emrr1=$phnerr=$passer=$passer2=$passer3=$headerr= $fp2= $found= $users =$j=$k=$l=$m=$fp=$fp1=$q="";

   if (isset($_POST['submit'])) {
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phnnumber=$_POST['phnnumber'];
       $address1=$_POST['street1'] ;
       $address2=$_POST['street2'] ;
       $city=$_POST['city'];
       $password=$_POST['password'];
       $cfpassword=$_POST['cfpassword'];
       $salary=$_POST['yes'];
       $s=$_POST['addas'];
       $connection=mysqli_connect("localhost", "root", "", "project");

       //admin or user varification

       $addas = $_POST["addas"];
       if ($addas =="admin"){
         $s=1;
       }
       else{
         $s=0;
       }


       // Name Verification
       if ($name=="") {
           $nmer ="Name is required";
       } elseif (str_word_count($name)<=1) {
           $nmer1= "Name should be more than one word";
       } elseif (str_word_count($name)>1) {
           for ($i=0; $i <strlen($name) ; $i++) {
               if ((ord($name[$i])>=33 && ord($name[$i])<=64) || (ord($name[$i])>=91 && ord($name[$i])<=96)|| (ord($name[$i])>=123 && ord($name[$i])<=126)) {
                   $nmer2= " Can't contain number/special symbol";
               } else {
                   $j++;
               }
           }
       }


       //Email Verification
       if ($email=="") {
           $emrr="Email is required";
       } elseif ($email!="") {
           $email_pieces = explode("@", $email);
           if (count($email_pieces) == 2 && $email_pieces[0] !== "" && $email_pieces[1] !== "") {
               $domain = explode(".", $email_pieces[1]);
               if (count($domain) > 1) {
                   foreach ($domain as $dom) {
                       if ($dom =="") {
                           $emrr1="Enter valid mail";
                       } else {
                           $m++;
                       }
                   }
               } else {
                   $emrr1="Enter valid mail";
               }
           } else {
               $emrr1="Enter valid mail";
           }
       }


       //Phnnumber Verification
       if ($phnnumber!="") {
           if (strlen($phnnumber)==11) {
               for ($i=0; $i<strlen($phnnumber) ; $i++) {
                   if (ord($phnnumber[$i])>=48 && ord($phnnumber[$i])<=57) {
                       $k++;
                   } else {
                       $phnerr="Enter valid number";
                   }
               }
           } else {
               $phnerr="Enter valid number";
           }
       } else {
           $phnerr="Phone Number is required";
       }


       //Password Verification
       if ($password=="") {
           $passer="Password is required";
       } elseif (strlen($password)<8) {
           $passer="Required at least 8 char";
       } elseif (strlen($password)>=8) {
           for ($i=0; $i <strlen($password) ; $i++) {
               if ((ord($password[$i])>=65 && ord($password[$i])<=90) || (ord($password[$i])>=97 && ord($password[$i])<=122)) {
                   $l++;
               }
           }
           if ($l<1) {
               $passer="Required at least 1 letter";
           }
       }


       //Password Confirmation Verification
       if ($cfpassword=="") {
           $passer2="Password is required";
       } elseif ($password!=$cfpassword) {
           $passer3="Password didn't matched";
       }


       if ($j>=3 && $m>=1 && $k=11 && $l>=1) {
         echo "Connected";
           if (! $connection) {
               die("Database not connected".mysqli_connect_error());
           } else {
               $query="SELECT *  FROM signin";
               echo "Connected1";
               $result=mysqli_query($connection, $query);
               if (mysqli_num_rows($result)>0) {
                 echo "Connected2";
                   while ($row=mysqli_fetch_array($result)) {
                       if ($row['email']==$email) {
                           $headerr='user exists';
                           $q++;
                       }
                     }
                   }
                       if($q==0){
                         $sql="INSERT INTO signup(fullname,email,phonenumber,address,city,password,Salary) VALUES ('$name','$email','$phnnumber','$address1','$city','$password','$salary')";
                         $sql2="INSERT INTO signin(email,password,status) VALUES ('$email','$password','$s')";
                         echo "Connected3";
                         if (mysqli_query($connection, $sql) && mysqli_query($connection, $sql2)) {
                             header("Location:../adminhome/home.php");
                         } else {
                             echo "Adding failed:".mysqli_error($connection);
                         }
                     }
                       else{
                         mysqli_close($connection);
                       }


                   }
               }

   }
