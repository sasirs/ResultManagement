<?php include 'db_config.php';  
        session_start(); 
?>
<?php 
 $rn=$_GET['rn'];
 $query="DELETE FROM class  where dept='$rn'";
 $data=mysqli_query($conn,$query);
 if($data)
 { 
    $_SESSION['success']="Yours Class Deleted successfully..";
    header('location:class.php');
}
else{
 $_SESSION['failed']=" Unable to Delete class right Now , Please try again later..";
 header('location:class.php');
}
?>
