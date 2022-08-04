<?php include'db_config.php';
        session_start();
        $roll = $_POST['roll'];
        $dob  = $_POST['dob'];
        //Prepare statement
        $stmt = $conn->prepare("select * from student where roll = ?");
        $stmt->bind_param("i", $roll);
        $stmt->execute();
        $stm_result = $stmt->get_result();
        if($stm_result->num_rows > 0){
         $data = $stm_result->fetch_assoc();
         if($data['dob'] === $dob) { 
            $_SESSION['id']=$roll;
            header('location:student_home.php');
         }else {
            $_SESSION['failed']="s";
                header('location:login.php');
        }
   
        }else {
            $_SESSION['failed']="s";
            header('location:login.php'); 
        }
        mysqli_close($conn);
?>
