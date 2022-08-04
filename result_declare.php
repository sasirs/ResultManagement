<?php include'db_config.php';

$dept=$_GET['dept'];
$result = mysqli_query($conn,"SELECT * FROM class where dept='$dept'");
if($row = $result->fetch_assoc())
?>
<?php  include'db_config.php';
$roll=$_GET['rn'];
$name=$_GET['rn'];
$result1 = mysqli_query($conn,"SELECT * FROM student WHERE roll='$roll'");
$row1= mysqli_fetch_array($result1);
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

            <form action="insert_result.php" method="post"
                class="m-2 shadow-lg border-top  border-5 border-warning needs-validation" novalidate>
                <h4 class="text-center fw-bold  border-bottom p-3">Student Results Management!</h4>

                <h4 class="text-center">Student</h4>
                <div class="row">
                    <div class="form-group m-3 col ">
                        <label for="classid" class="fw-bolder fs-6">Roll Number:</label>
                        <input type="number" class="form-control" value="<?php echo $row1['roll']; ?>" name="roll"
                            readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">Department :</label>
                        <input type="text" class="form-control" value="<?php echo $row1['dept']; ?>" readonly="readonly"
                            name="dept">
                    </div>
                </div>
                <div class="form-group m-3  col">
                    <label for="section" class="fw-bolder fs-6">Name:</label>
                    <input type="text" class="form-control" value="<?php echo $row1['name']; ?>" readonly="readonly"
                        name="name">
                </div>

                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">Test Name :<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="tname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sem" class="fw-bolder fs-6">Semester:<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="sem" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>

                <h4 class="text-center border-top mt-4">Marks</h4>
                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">subject 1:<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-group m-3 col">
                        <input type="text" class="form-control" readonly="readonly" name="sn1"
                            value="<?php echo $row['sub1']; ?>">
                    </div>
                    <div class="form-group m-3 col">
                        <select class="form-select" name="sub1" aria-label="Default select example">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="U">U</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">subject 2:<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-group m-3 col">
                        <input type="text" class="form-control" readonly="readonly" name="sn2"
                            value="<?php echo $row['sub2']; ?>">
                    </div>
                    <div class="form-group m-3 col ">
                        <select class="form-select" name="sub2" aria-label="Default select example">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="U">U</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">subject 3:<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-group m-3 col">
                        <input type="text" class="form-control" readonly="readonly" name="sn3"
                            value="<?php echo $row['sub3']; ?>">
                    </div>
                    <div class="form-group m-3 col">
                        <select class="form-select" name="sub3" aria-label="Default select example">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="U">U</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">subject 4:<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-group m-3 col">
                        <input type="text" class="form-control" readonly="readonly" name="sn4"
                            value="<?php echo $row['sub4']; ?>">
                    </div>
                    <div class="form-group m-3 col">
                        <select class="form-select" name="sub4" aria-label="Default select example">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="U">U</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">subject 5:<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-group m-3 col">
                        <input type="text" class="form-control" readonly="readonly" name="sn5"
                            value="<?php echo $row['sub5']; ?>">
                    </div>
                    <div class="form-group m-3 col">
                        <select class="form-select" name="sub5" aria-label="Default select example">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="U">U</option>
                        </select>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="form-group m-3 col">
                        <label for="sub3" class="fw-bolder fs-6">subject 6:</label>
                    </div>
                    <div class="form-group m-3 col">
                        <input type="text" class="form-control" readonly="readonly" name="sn6"
                            value="<?php echo $row['sub6']; ?>">
                    </div>
                    <div class="form-group m-3 col">
                        <select class="form-select" name="sub6" aria-label="Default select example">
                            <option value="-">none</option>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="U">U</option>
                        </select>
                    </div>
                </div>
                <div class=" d-flex gap-4 justify-content-center p-2">
                    <button class="btn btn-primary" type="submit" name="submit">submit</button>
                    <a href="javascript:history.go(-1)" onmouseover="self.status.referrer;return true"
                        class="btn btn-danger text-decoration-none text-light">
                        back</a>
                </div>
            </form>
        </div>


    </body>
    <?php include('script.php');?>

</html>
