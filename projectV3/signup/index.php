<?php
session_start();
?>
<?php
require("valid.php");
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
  <br><br><br>
  <!--Main Section-->
  <table align="center" bgcolor="#3C896D">
    <tr>
      <td width="600px" height="250px">
        <fieldset>
          <legend align="middle">
            <font size="6" color="#FFFCF9"><i>Sign Up</i></font>
          </legend>
          <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="sform" onsubmit="return validateSignUp()">
            <table align="center">
              <tr>
                <td height="50px">
                  <span>
                    <font color="red">
                      <?php echo  $headerr; ?>
                    </font>
                  </span><br>
                  <font size="4" color="FFFCF9"><i>Full Name</i></font>
                  <font color="red">*</font>
                </td>
                <td height="50px">:<input type="text" name="name" placeholder="Jhon Wick">
                  <span>
                    <font color="red">
                      <?php echo $nmer; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $nmer1; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $nmer2; ?>
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
                      <?php echo $emrr; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $emrr1; ?>
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
                      <?php echo $phnerr; ?>
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
                      <?php echo $passer; ?>
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
                      <?php echo $passer2; ?>
                    </font>
                  </span>
                  <span>
                    <font color="red">
                      <?php echo $passer3; ?>
                    </font>
                  </span>
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Sign Up"></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><span>
                    <font color="#202523" size="5">
                      Already have account?
                    </font>
                  </span></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><a href="..\login\index.php"> <input type="button" name="signin" value="Sign In"></a></td>
              </tr>
            </table>
          </form>
        </fieldset>
      </td>
    </tr>
  </table>
  <br>
  <br>
  <br>
  <!--Footer section-->
  <?php require_once("../footer/index.php"); ?>
  <script src="seat.js"></script>
  <script>
    function validateSignUp() {
      var name = document.forms["sform"]["name"].value;
      var email = document.forms["sform"]["email"].value;
      var phnumber = document.forms["sform"]["phnnumber"].value;
      var pass = document.forms["sform"]["password"].value;
      var cpass = document.forms["sform"]["cfpassword"].value;
      if (name == "") {
        alert("Name must be filled out");
        return false;
      } else if (name.length < 1) {
        alert("Name should be more than one word");
        return false;
      } else if (email == "") {
        alert("Email must be filled out");
        return false;
      } else if (phnumber == "") {
        alert("Phone number  must be filled out");
        return false;
      } else if (pass == "") {
        alert("Password must be filled out");
        return false;
      } else if (pass.length < 8) {
        alert("Password must be more than 8");
        return false;
      } else if (cpass == "") {
        alert("Confirm passowrd must be filled out");
        return false;
      } else if (cpass.length < 8) {
        alert("Confirm Password must be more than 8");
        return false;
      }

    }
  </script>
</body>

</html>