<?php
if(isset($_SESSION['userid'])){
    
  if($_SESSION['status']=='1'){
    include 'navstyle.css';
    echo '
    <table width="100%" bgcolor="#3C896D">
        <td height="40px" width="20%" align="right">
          <a id="myinfo" href="../adminhome/normaladmin.php"><img src="/ProjectV3/images/icons/signin.png" alt="" height="20px" width="20px">
            <font color="#FFFCF9" size="3">Admin Home<font>
          </a>
        </td>
        <td height="40px" width="10%" align="right">
          <a id="signin" href="../logout/index.php"><img src="/ProjectV3/images/icons/signin.png" alt="" height="20px" width="20px">
            <font color="#FFFCF9" size="3">Logout<font>
          </a>
        </td>
        <td width="20%"></td>
      </tr>
    </table>';
  } else if($_SESSION['status']=='0'){
    include 'navstyle.css';
    echo '
    <table width="100%" bgcolor="#3C896D">
        <td height="40px" width="20%" align="right">
          <a id="myinfo" href="../userhome/user.php"><img src="/ProjectV3/images/icons/signin.png" alt="" height="20px" width="20px">
            <font color="#FFFCF9" size="3">User Home<font>
          </a>
        </td>
        <td height="40px" width="10%" align="right">
          <a id="signin" href="../logout/index.php"><img src="/ProjectV3/images/icons/signin.png" alt="" height="20px" width="20px">
            <font color="#FFFCF9" size="3">Logout<font>
          </a>
        </td>
        <td width="20%"></td>
      </tr>
    </table>';
  }

  

else {
  include 'navstyle.css';
  echo '
  <table width="100%" bgcolor="#3C896D">
    <tr>
      <td width="10%"></td>
      <td height="40px" width="10%">
        <a id="home" href="../adminhome/index.php"><img src="/ProjectV3/images/icons/home.png" alt="" height="20px" width="20px">
          <font color="#FFFCF9" size="3">Home<font>
        </a>
      </td>

      <td height="40px" width="10%">
        <a id="bus" href="../bus/index.php"><img src="/ProjectV3/images/icons/bus-ticket.png" alt="" height="20px" width="20px">
          <font color="#FFFCF9" size="3">Bus<font>
        </a>
      </td>

      <td width="50%"></td>

      <td height="40px" width="10%" align="right">
        <a id="signin" href="../login/index.php"><img src="/ProjectV3/images/icons/signin.png" alt="" height="20px" width="20px">
          <font color="#FFFCF9" size="3">Sign In<font>
        </a>
      </td>
      <td width="20%"></td>
    </tr>
  </table>';
  }
}
?>
