<?php include 'db_config.php';  
        session_start(); 
?>
<?php 
 $rn=$_GET['rn'];
 $query="DELETE FROM admin  where adminID='$rn'";
 $data=mysqli_query($conn,$query);
 if($data)
 { 
    $_SESSION['success']="admin Deleted successfully..";
    header('location:admin.php');
}
else{
 $_SESSION['failed']=" Unable to Delete admin right Now , Please try again later..";
 header('location:admin.php');
}
?>
