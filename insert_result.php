<?php include 'db_config.php';  
        session_start(); 
?>
<?php 
 if(isset($_POST['submit'])){
    if($conn){
            $roll = mysqli_real_escape_string($conn, $_REQUEST['roll']);
            $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
            $dept = mysqli_real_escape_string($conn, $_REQUEST['dept']);
            $sem = mysqli_real_escape_string($conn, $_REQUEST['sem']);
            $tname = mysqli_real_escape_string($conn, $_REQUEST['tname']);
            $sub1 = mysqli_real_escape_string($conn, $_REQUEST['sub1']);
            $sub2 = mysqli_real_escape_string($conn, $_REQUEST['sub2']);
            $sub3 = mysqli_real_escape_string($conn, $_REQUEST['sub3']);
            $sub4 = mysqli_real_escape_string($conn, $_REQUEST['sub4']);
            $sub5 = mysqli_real_escape_string($conn, $_REQUEST['sub5']);
            $sub6 = mysqli_real_escape_string($conn, $_REQUEST['sub6']);
            $sn1 = mysqli_real_escape_string($conn, $_REQUEST['sn1']);
            $sn2 = mysqli_real_escape_string($conn, $_REQUEST['sn2']);
            $sn3 = mysqli_real_escape_string($conn, $_REQUEST['sn3']);
            $sn4 = mysqli_real_escape_string($conn, $_REQUEST['sn4']);
            $sn5 = mysqli_real_escape_string($conn, $_REQUEST['sn5']);
            $sn6 = mysqli_real_escape_string($conn, $_REQUEST['sn6']);
            $sql = "INSERT INTO result (roll,name,dept,sem,tname,sub1,sub2,sub3,sub4,sub5,sub6,sn1,sn2,sn3,sn4,sn5,sn6)
            VALUES ('$roll','$name','$dept','$sem','$tname','$sub1','$sub2','$sub3','$sub4','$sub4','$sub6','$sn1','$sn2','$sn3','$sn4','$sn5','$sn6')";
             $done=$conn->query($sql);
             if($done){ 
                 $_SESSION['success']="Result Published successfully..";
                 header('location:result.php');
             }
             else{
              $_SESSION['failed']=" Unable to Published Result Now , Please try again later..";
              header('location:result.php');
             }
         }else{
          $_SESSION['error']=" Connection error, Please try again later..";
          header('location:result.php');       
          }
         mysqli_close($conn);
     }

?>
