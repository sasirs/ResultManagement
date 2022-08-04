 <?php include'db_config.php';
        session_start();
        $adminID = $_POST['adminID'];
        $apswd  = $_POST['apswd'];
        //Prepare statement
        $stmt = $conn->prepare("select * from admin where adminID = ?");
        $stmt->bind_param("i", $adminID);
        $stmt->execute();
        $stm_result = $stmt->get_result();
        if($stm_result->num_rows > 0){
         $data = $stm_result->fetch_assoc();
         if($data['apswd'] === $apswd) { 
          $_SESSION['ad']=$adminID;
           header('location:dashbord.php');
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
