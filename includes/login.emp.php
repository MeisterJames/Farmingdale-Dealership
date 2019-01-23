<?php
if (isset($_POST['login-submit'])) {
  require 'dbh.inc.php';
  $maileid = $_POST['maileid'];
  $password = $_POST['pwd'];
  
  if (empty($maileid) || empty($password)) {
    header("Location: ../index.php?error=emptyfields&maileid=".$maileid);
    exit();
  }
  else {
    $sql = "SELECT * FROM employees WHERE eidEmps=? OR emailEmps=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else { 
      mysqli_stmt_bind_param($stmt, "ss", $maileid, $maileid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt); 
      if ($row = mysqli_fetch_assoc($result)) {      
        $pwdCheck = password_verify($password, $row['pwdEmps']);       
        if ($pwdCheck == false) {     
          header("Location: ../emplogin.php?error=wrongpwd");
          exit();
        }     
        else if ($pwdCheck == true) {    
          session_start();         
          $_SESSION['eid'] = $row['idEmps'];
          $_SESSION['eeid'] = $row['eidEmps'];
          $_SESSION['eemail'] = $row['emailEmps'];         
          header("Location: ../index.php?login=success");
          exit();
        }
      }
      else {
        header("Location: ../emplogin.php?login=wrongeidpwd");
        exit();
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../empsignup.php");
  exit();
}