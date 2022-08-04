<?php include 'db_config.php';  
        session_start(); 
?>
<?php      
            session_start();
            $ad=$_SESSION['ad'];
            
            $result = mysqli_query($conn,"SELECT * FROM admin WHERE adminID='$ad'");
            $row= mysqli_fetch_array($result);
            
            if(count($_POST)>0) {
            
            if(($_POST['opswd'] == $row['apswd'])){
                  //check if new password match retype
                  if(($_POST['npswd'] == $_POST['cpswd'])){
            
                  mysqli_query($conn,"UPDATE admin set apswd='" . $_POST['npswd'] . "'  WHERE  adminID='$ad'");
            
                    $_SESSION['success']="Yours password change successfully..";
                   header('location:admin.php');                  }
                  else
                  {
                    $_SESSION['failed']=" your password does not match, try again..";
                    header('location:admin.php');                  }
                }
             else
                {
                    $_SESSION['error']="Old password is wrong, try again..";
                    header('location:admin.php');                       } 
            }
            ?>
