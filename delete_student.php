<?php include 'db_config.php';  
        session_start(); 
?>
<?php 
$rn=$_GET['rn'];
 $query="DELETE FROM student  where roll='$rn'";
 $data=mysqli_query($conn,$query);
 if($data)
 { 
    $_SESSION['success']="Student Deleted successfully..";
    header('location:student.php');
}
else{
 $_SESSION['failed']=" Unable to Delete student right Now , Please try again later..";
 header('location:student.php');
}
?>
