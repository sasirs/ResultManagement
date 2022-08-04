<?php include 'db_config.php';  
        session_start(); 
?>
<?php
        if(isset($_POST['submit'])){
         if($conn){
               $classid=$_POST['classid'];
               $dept=$_POST['dept'];
               $section=$_POST['section'];
               $incharge=$_POST['incharge'];
               $sub1=$_POST['sub1'];
               $sub2=$_POST['sub2'];
               $sub3=$_POST['sub3'];
               $sub4=$_POST['sub4'];
               $sub5=$_POST['sub5'];
               $sub6=$_POST['sub6'];
       
               $sql = "INSERT INTO class (classid,dept,section,incharge,sub1,sub2,sub3,sub4,sub5,sub6)
               VALUES ('$classid','$dept','$section','$incharge','$sub1','$sub2','$sub3','$sub4','$sub4','$sub6')";
               $done=$conn->query($sql);
               if($done){ 
                   $_SESSION['success']="Yours class insertd successfully..";
                   header('location:class.php');
               }
               else{
                $_SESSION['failed']=" Unable to insert class Now , Please try again later..";
                header('location:class.php');
               }
           }else{
            $_SESSION['error']=" Connection error, Please try again later..";
            header('location:class.php');       
            }
           mysqli_close($conn);
       }

?>
