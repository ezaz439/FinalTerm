<?php
  $user=$i=$err=$mnerr="";
  if (isset($_POST['submit'])) {
      $email=$_POST['email'];
      $password=$_POST['password'];
      $connection=mysqli_connect("localhost", "root", "", "project");
      if ($email=="" && $password=="") {
          $mnerr="Field can't be empty";
      } else {
          if (!$connection) {
              die("Didin't connected".mysqli_connect_error());
            } else {
              $sql="SELECT * FROM signin";
              $result=mysqli_query($connection, $sql);
              if (mysqli_num_rows($result)>0) {
                  while ($row=mysqli_fetch_array($result)) {
					  
                      if ($row['email']==$email && $row['password']==$password) {
                          session_start();
                          $_SESSION['userid']= $row['id'];
                          $_SESSION['status']=$row['status'];
						  if($row['status'] == 1){
								$sql2 = "SELECT * FROM signup WHERE id={$_row['id']} ";
								$result2=mysqli_query($connection, $sql2);
								$row2=mysqli_fetch_array($result2);
                                $_SESSION['username']= $row2['fullname'];
                                $_SESSION['phonenumber']=$row2['phonenumber'];
                                $_SESSION['gender']=$row2['gender'];
                                $_SESSION['address']=$row2['address'];

								header("Location:../adminhome/normaladmin.php");
							} else if($row['status'] == 0){
								header("Location:../userhome/user.php");
							}
                      }
                       else
                        {
                          $err="Check email or password";
                      }
                  }
              }
          }
      }
  }
  ?>
