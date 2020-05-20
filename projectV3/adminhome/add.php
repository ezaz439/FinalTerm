<?php
session_start();
 ?>
 <?php
require("addvalid.php");
      ?>
<html>

<head>
  <link rel="icon" href="../images/image/tickets.png">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../signup/style.css">
</head>

<body background="../images/image/background4.png">
    <!--Header Section-->
  <table width="100%" bgcolor="white">
    <tr>
         <td  align="center"><a href="../home/index.php"><img src="../images/image/ticketbari.png" alt="logo" height="60px" width="120px"> </a><br>
         <font color="#3C896D" size="4"><marquee direction="right">The Home of Tickets</marquee><font></td>
    </tr>
     </table>
     <!--Navbar-->
   <?php
     require("../navbar/nav.php");
    ?>
  <br><br><br>
  <!--Main Section-->

  <table align="center" bgcolor="#3C896D">
    <tr>
      <td width="600px" height="250px">
          <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <table align="center">
              <tr>
                <td height="50px">
                  <span>
                    <font color="red">
                      <?php echo  $headerr ; ?>
                    </font>
                  </span><br>
                  <font size="4" color="FFFCF9"><i>Full Name</i></font>
                  <font color="red">*</font>
                </td>
                <td height="50px">:<input type="text" name="name" placeholder="Jhon Wick">
                  <span>
                    <font color="red">
                      <?php echo $nmer ; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $nmer1 ; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $nmer2 ; ?>
                    </font>
                  </span>
                </td>

              </tr>
              <tr>
                <td height="50px">
                  <font size="4" color="FFFCF9">Email<i></i></font>
                  <font color="red">*</font>
                </td>
                <td height="50px">:<input type="text" name="email" placeholder="e.g.jhon@gmail.com">
                  <span>
                    <font color="red">
                      <?php echo $emrr ; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $emrr1 ; ?>
                    </font>
                  </span>
                </td>
              </tr>
              <tr>
              <tr>
                <td height="50px">
                  <font size="4" color="FFFCF9">Phone Number<i></i></font>
                  <font color="red">*</font>
                </td>
                <td height="50px">:<input type="text" name="phnnumber" placeholder="01712345678">
                  <span>
                    <font color="red">
                      <?php echo $phnerr ; ?>
                    </font>
                  </span>
                </td>
              </tr>
              <tr>
                <td height="50px">
                  <font size="4" color="FFFCF9">Adress<i></i></font>
                </td>
                <td height="50px">:<input type="text" name="street1" placeholder="Street Address"> <br> </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td> &nbsp;<input type="text" name="street2" placeholder="Street Address Line2"></td>
              </tr>
              <tr>
                <td height="50px">
                  <font size="4" color="FFFCF9"><i>City</i></font>
                </td>
                <td height="50px">:
                  <select name="city">
                    <option value="Barisal">Barisal</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td height="50px">
                  <font size="4" color="FFFCF9"><i>Password</i></font>
                  <font color="red">*</font>
                </td>
                <td height="50px">:<input type="password" name="password" placeholder="More than 8 words ">
                  <span>
                    <font color="red">
                      <?php echo $passer ; ?>
                    </font>
                  </span>
                </td>
              </tr>
              <tr>
                <td height="50px">
                  <font size="4" color="FFFCF9"><i>Confirm Password</i></font>
                  <font color="red">*</font>
                </td>
                <td height="50px">:<input type="password" name="cfpassword" placeholder="More than 8 words ">
                  <span>
                    <font color="red">
                      <?php echo $passer2 ; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $passer3 ; ?>
                    </font>
                  </span>
                </td>
              </tr>
              <tr>
                   <td> <font color="#FFFCF9" size="3">Add As<font></td>
                     <td admin="center">
                       <input type="radio" onclick="javascript:yesnoCheck()" name="addas" id="yesCheck" value="admin">Admin &nbsp;&nbsp;&nbsp;&nbsp;
                       <input type="radio" onclick="javascript:yesnoCheck()" name="addas"id="noCheck" value="user">User</td>

              </tr>
              <tr>
                <td>
                  <div id="ifYes" style="visibility:hidden">
                    Salary <input type='text' id='yes' name='yes'><br>

                    <script type="text/javascript">
                    function yesnoCheck()
                    {
                       if (document.getElementById('yesCheck').checked)
                       {
                           document.getElementById('ifYes').style.visibility = 'visible';
                       }
                       else document.getElementById('ifYes').style.visibility = 'hidden';
                    }
                 </script>
                   </td>
                 </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Add"></td>
              </tr>

            </table>
          </form>

      </td>
    </tr>
  </table>
  <br>
  <br>
  <br>
  <!--Footer section-->
  <table width="100%" bgcolor="black">
    <tr>
      <td width="10%"></td>
      <td width="30px" height="100px"><a href="../about/index.php"><font color="#FFFCF9" size="4">About Us</font></a> </td>
      <td width="30px"> <a href="../contactus/index.php"><font color="#FFFCF9" size="4">Contact us</font></a></td>
      <td width="30px"><a href="../faq/index.php"><font color="#FFFCF9" size="4">Faq</font></a> </td>
       <td width="10%"></td>
       <td width="30px"><font color="#FFFCF9" size="4">Follow Us</font>
       &nbsp;&nbsp;<a href="https://www.facebook.com/jhon.derby.35"><img src="../images/image/facebook.png" alt=""  height="30x" width="30px"></a>
     &nbsp;&nbsp;<a href="https://www.twitter.com"><img src="../images/image/twitter.png" alt=""  height="30x" width="30px"></a>
   &nbsp;&nbsp;<a href="https://www.instagram.com"><img src="../images/image/instagram.png" alt=""  height="30x" width="30px"></a></td>
      </tr>
      <tr>
        <td colspan="6" align="center">
         <font color="#454545" size="3">@Copy Right Reserved by TicketBari Ltd </font>
       </td>
      </tr>
  </table>

</body>

</html>
