<?php include 'db_config.php';  
        session_start(); 
?>
<?php
        if(isset($_POST['submit'])){
         if($conn){

            $name=$_POST['name'];
            $roll=$_POST['roll'];
            $dob=$_POST['dob'];
            $email=$_POST['email'];
            $mobileno=$_POST['mobileno'];
            $sem=$_POST['sem'];
            $dept=$_POST['dept'];

               $sql = "INSERT INTO student (name,roll,dob,email,mobileno,sem,dept)
              VALUES ('$name','$roll','$dob','$email','$mobileno','$sem','$dept')";
              
               $done=$conn->query($sql);
               if($done){ 
                   $_SESSION['success']="Yours student insertd successfully..";
                   header('location:student.php');
               }
               else{
                $_SESSION['failed']=" Unable to insert student Now , Please try again later..";
                header('location:student.php');
               }
           }else{
            $_SESSION['error']=" Connection error, Please try again later..";
            header('location:student.php');       
            }
           mysqli_close($conn);
       }

?>
