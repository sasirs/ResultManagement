<?php include 'db_config.php';  
        session_start(); 
?>
<?php
        if(isset($_POST['submit'])){
         if($conn){

            $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
        $adminID = mysqli_real_escape_string($conn, $_REQUEST['adminID']);
         $apswd = mysqli_real_escape_string($conn, $_REQUEST['apswd']);
          $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $mobileno =  mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
             $dept = mysqli_real_escape_string($conn, $_REQUEST['dept']);

             $sql = "INSERT INTO admin (name,adminID,apswd,email,mobileno,dept)
             VALUES ('$name','$adminID','$apswd','$email','$mobileno','$dept')";
              
               $done=$conn->query($sql);
               if($done){ 
                   $_SESSION['success']="Yours admin insertd successfully..";
                   header('location:admin.php');
               }
               else{
                $_SESSION['failed']=" Unable to insert admin Now , Please try again later..";
                header('location:admin.php');
               }
           }else{
            $_SESSION['error']=" Connection error, Please try again later..";
            header('location:admin.php');       
            }
           mysqli_close($conn);
       }

?>
