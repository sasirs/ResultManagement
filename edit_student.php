<?php  include'db_config.php';
            
            session_start();
            $rn=$_GET['rn'];
            $result = mysqli_query($conn,"SELECT * FROM student WHERE roll='$rn'");
            $row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Class</title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
        <link rel="stylesheet" href="dashbord.css">
    </head>

    <body>

        <div class="container w-80">
            <?php
             if(count($_POST)>0) {
                 
                $sql="UPDATE student set roll='" . $_POST['roll'] . "' ,name='" . $_POST['name'] . "',dob='" . $_POST['dob'] . "',email='" . $_POST['email'] . "',mobileno='" . $_POST['mobileno'] . "',sem='" . $_POST['sem'] . "',dept='" . $_POST['dept'] . "'  WHERE  roll='$rn'";
                
                if(mysqli_query($conn, $sql)){
                    $_SESSION['success']="student updated successfully..";
                    header('location:student.php');
            }
            else{
                 $_SESSION['failed']=" Unable to update student right Now , Please try again later..";
                 header('location:student.php');
           }
        }
            
         ?>

            <form action="" method="post" class="mt-5 shadow-lg border-top  border-5 border-warning">
                <h4 class="text-center fw-bold  border-bottom p-3">Edit student Informations..</h4>


                <div class="row g-3 row-sm-12">
                    <div class="form-group m-3 col ">

                        <label for="classid" class="fw-bolder fs-6">Roll Number:</label>
                        <input type="number" class="form-control" value="<?php echo $row['roll']; ?>" name="roll"
                            readonly="readonly">
                    </div>
                    <div class="form-group m-3  col">
                        <label for="section" class="fw-bolder fs-6">Name:</label>
                        <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="form-group m-3 col">
                        <label for="dept" class="fw-bolder fs-6">Date of Birth</label>
                        <input type="text" class="form-control" value="<?php echo $row['dob']; ?>" name="dob">
                    </div>

                    <div class="form-group m-3 col">
                        <label for="incharge" class="fw-bolder fs-6">Email:</label>
                        <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="form-group m-3 col">
                        <label for="sub1" class="fw-bolder fs-6">Mobile Number:</label>
                        <input type="text" class="form-control" value="<?php echo $row['mobileno']; ?>" name="mobileno">
                    </div>
                    <div class="form-group m-3 col">
                        <label for="sub2" class="fw-bolder fs-6">semester :</label>
                        <input type="text" class="form-control" value="<?php echo $row['sem']; ?>" name="sem">
                    </div>
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">Department :</label>
                        <input type="text" class="form-control" value="<?php echo $row['dept']; ?>" name="dept">
                    </div>
                </div>

                <div class=" d-flex justify-content-center pb-3 gap-3">
                    <button class="btn btn-primary" type="submit" name="submit">submit</button>
                    <a href="student.php" class="btn btn-danger text-decoration-none text-light">
                        back</a>
                </div>
            </form>
        </div>


    </body>
    <?php include('script.php');?>

</html>
