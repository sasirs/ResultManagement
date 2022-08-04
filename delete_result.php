<?php include 'db_config.php';  
        session_start(); 
?>
<?php 
$rn=$_GET['rn'];
$query="DELETE FROM result  where roll='$rn'";
$data=mysqli_query($conn,$query);
 if($data)
 { 
    $_SESSION['success']="Yours result Deleted successfully..";
    header('location:result.php');
}
else{
 $_SESSION['failed']=" Unable to Delete result right Now , Please try again later..";
 header('location:result.php');
}
?>
