<?php
session_start();
?>
<?php
require("valid.php");
?>
<html>

<head>
  <link rel="icon" href="../images/image/tickets.png">
  <link rel="stylesheet" href="../login/style.css">
  <title>Login</title>
</head>

<body background="../images/image/background4.png">
  <!--Header-->
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
  <br><br><br><br><br><br><br><br><br><br>

  <!--Main Section-->
  <table align="center" bgcolor="#3C896D">
    <tr>
      <td width="600px" height="250px">
        <fieldset>
          <legend align="middle">
            <font size="6" color="#FFFCF9"><i>Sign In</i></font>
          </legend>
          <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="lform" onsubmit="return validateLogin()">
            <table align="center">
              <tr valign="middle">
                <td height="50px"> <span>
                    <font color="red">
                      <?php echo  $err; ?>
                      <?php echo    $mnerr; ?>
                    </font>
                  </span><br>
                  <font size="4" color="#FFFCF9"><i>Email</i></font>
                </td>
                <td height="50px">:<input type="text" name="email"> </td>
              </tr>
              <tr>
                <td height="50px">
                  <font size="4" color="FFFCF9"><i>Password</i></font>
                </td>
                <td height="50px">:<input type="password" name="password"> </td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Sign In"></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><span>
                    <font color="Black" size="5">
                      New in this Website?
                    </font>
                  </span></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><a href="..\signup\index.php"> <input type="button" name="signup" value="Sign Up"></a></td>
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
  <br>
  <br>
  <br>
  <!--Footer section-->
  <?php require_once("../footer/index.php"); ?>
  <script>
    function validateLogin() {
      var email = document.forms["lform"]["email"].value;
      var pass = document.forms["lform"]["password"].value;
      if (email == "") {
        alert("Name must be filled out");
        return false;
      } else if (pass.length < 8) {
        alert("Password should be more than 8 characters");
        return false;
      }
    }
  </script>
</body>

</html>