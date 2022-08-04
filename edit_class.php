<?php  include'db_config.php';
            
            session_start();
            $rn=$_GET['rn'];
            $result = mysqli_query($conn,"SELECT * FROM class WHERE dept='$rn'");
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

        <div class="container w-80 ">
            <?php
             if(count($_POST)>0) {
                 
                $sql="UPDATE class set dept='" . $_POST['dept'] . "',classid='" . $_POST['classid'] . "' ,section='" . $_POST['section'] . "',incharge='" . $_POST['incharge'] . "',sub1='" . $_POST['sub1'] . "', sub2='" . $_POST['sub2'] . "',sub3='" . $_POST['sub3'] . "',sub4='" . $_POST['sub4'] . "',sub5='" . $_POST['sub5'] . "',sub6='" . $_POST['sub6'] . "' WHERE  dept='$rn'";
                
                if(mysqli_query($conn, $sql)){
                    $_SESSION['success']="Yours Class updated successfully..";
                    header('location:class.php');
            }
            else{
                 $_SESSION['failed']=" Unable to update Class right Now , Please try again later..";
                 header('location:class.php');
           }
        }
            
         ?>

            <form action="" method="post" class="mt-4 shadow-lg border-top  border-5 border-warning">
                <h4 class="text-center fw-bold  border-bottom p-3">Edit Class Informations..</h4>


                <div class="row g-3">
                    <div class="form-group m-3 col">

                        <label for="classid" class="fw-bolder fs-6">Class Id:</label>
                        <input type="number" class="form-control" value="<?php echo $row['classid']; ?>"
                            placeholder="Enter Class ID" name="classid">
                    </div>
                    <div class="form-group m-3 col">
                        <label for="section" class="fw-bolder fs-6">Section:</label>
                        <input type="text" class="form-control" value="<?php echo $row['section']; ?>"
                            placeholder="Enter section " name="section">
                    </div>

                </div>
                <div class="row g-2">
                    <div class="form-group m-3 col">
                        <label for="dept" class="fw-bolder fs-6">Year/Department:</label>
                        <input type="text" class="form-control" value="<?php echo $row['dept']; ?>" readonly="readonly"
                            name="dept">
                    </div>

                    <div class="form-group m-3 col">
                        <label for="incharge" class="fw-bolder fs-6">Incharge Name:</label>
                        <input type="text" class="form-control" value="<?php echo $row['incharge']; ?>"
                            placeholder="Enter incharge Name " name="incharge">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="form-group m-3 col">
                        <label for="sub1" class="fw-bolder fs-6">subject 1 :</label>
                        <input type="text" class="form-control" value="<?php echo $row['sub1']; ?>"
                            placeholder="Enter subject 1 code " name="sub1">
                    </div>
                    <div class="form-group m-3 col">
                        <label for="sub2" class="fw-bolder fs-6">subject 2 :</label>
                        <input type="text" class="form-control" value="<?php echo $row['sub2']; ?>"
                            placeholder="Enter subject 2 code " name="sub2">
                    </div>
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">subject 3 :</label>
                        <input type="text" class="form-control" value="<?php echo $row['sub3']; ?>"
                            placeholder="Enter subject 3 code " name="sub3">
                    </div>
                </div>
                <div class="row g-2">

                    <div class="form-group m-3 col">
                        <label for="sub4" class="fw-bolder fs-6">subject 4 :</label>
                        <input type="text" class="form-control" value="<?php echo $row['sub4']; ?>"
                            placeholder="Enter subject 4 code " name="sub4">
                    </div>
                    <div class="form-group m-3 col">
                        <label for="sub5" class="fw-bolder fs-6">subject 5 :</label>
                        <input type="text" class="form-control" value="<?php echo $row['sub5']; ?>"
                            placeholder="Enter subject 5 code " name="sub5">
                    </div>
                    <div class="form-group m-3 col">
                        <label for="sub6" class="fw-bolder fs-6">subject 6 :</label>
                        <input type="text" class="form-control" value="<?php echo $row['sub6']; ?>"
                            placeholder="Enter subject 6 code " name="sub6">
                    </div>
                </div>
                <div class=" d-flex justify-content-center pb-3 gap-3">
                    <button class="btn btn-primary" type="submit" name="submit">submit</button>
                    <a href="class.php" class="btn btn-danger text-decoration-none text-light">
                        back</a>
                </div>
            </form>
        </div>


    </body>
    <?php include('script.php');?>

</html>
