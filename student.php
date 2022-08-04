<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>students</title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
        <link rel="stylesheet" href="dashbord.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fs-5 fw-bolder">
                <div class="container">
                    <a href="#" class="navbar-brand text-light">Welcome!!</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavBar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="w-100">
                        <div class="navbar-collapse collapse " id="myNavBar">
                            <ul class="navbar-nav ms-auto  text-md-center text-xm-start text-center ">
                                <li class="nav-item">
                                    <a href="dashbord.php" class="nav-link  fa fa-home"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="class.php" class="nav-link  fa fa-book"> Class</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student.php" class="nav-link active  fa fa-graduation-cap"> Student</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin.php" class="nav-link fa fa-user"> Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="result.php" class="nav-link  fa fa-bookmark"> Results</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="logout.php" class="nav-link  fa fa-sign-out" id="logout">Logout</a>
                                </li>


                            </ul>
                        </div>
                    </div>
            </nav>
        </header>
        <div class="container class">
            <?php  session_start();
        if(isset($_SESSION['success']) && $_SESSION['success']!='')
        { ?>
            <div class="alert alert-success alert-dismissible fade show " role="alert">
                <?php echo ' <strong>Sucess!! </strong>'.$_SESSION['success'].'' ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> <?php
             unset($_SESSION['success']);
         } 
           
       if(isset($_SESSION['failed']) && $_SESSION['failed']!='')
         { ?>
            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                <?php echo '<strong>Sorry!! </strong>'.$_SESSION['failed'].'' ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> <?php     unset($_SESSION['failed']);

            }
            if(isset($_SESSION['error']) && $_SESSION['error']!='')
            { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo '<p><stong>Sorry!! </stong>'.$_SESSION['failed'].'</p>' ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> <?php     unset($_SESSION['error']);
   
               }
            ?>
            <div class="row">

                <div class="col-lg-12">

                    <div class="table table-responsive mt-3">
                        <table class="table table-bordered display nowrap table-hover  shadow" cellspacing="0"
                            id="table" width="100%">

                            <thead class="text-center">
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <th>Roll No</th>
                                    <th>Department</th>
                                    <th>Mobile No</th>
                                    <th>Semester</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold">
                                <?php include'db_config.php';  
                            $sql = "SELECT * FROM student   ORDER BY sem";
                            $no=1;
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                ?>

                                <tr class="text-center">
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo  strtolower($row['roll']);?></td>
                                    <td><?php echo strtoupper($row['dept'])  ;?></td>
                                    <td><?php echo ucfirst($row['mobileno']);?></td>
                                    <td><?php echo ucfirst($row['sem']);?></td>
                                    <td>
                                        <?php echo "<a href='edit_student.php?rn=$row[roll]'> "?><span
                                            class="fa fa-pencil btn btn-sm  edit">Edit</a></span></td>

                                    <td> <?php echo "<a  href='delete_student.php?rn=$row[roll]'> "?><span
                                            class="fa fa-times btn btn-sm delete"></a></span></td>
                                </tr>
                                <?php
                                $no++;
                            } 
                           ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="btn d-block justify-content-center ">
                        <button class=" btn btn-info fa fa-plus text-light fs-5 add" data-bs-toggle="modal"
                            data-bs-target="#myModal">
                            Add stdudent
                        </button>
                    </div>
                </div>
            </div>
            <footer class="me d-grid justify-content-end fw-bold mt-5">
                <p>Made with <span class="text-info"><i class="fa fa-heartbeat"></i></span>
                    Loy(s)alysi <span class="text-danger"><i class="fa fa-hand-o-right"></i></span>
                    sasi</p>
            </footer>
        </div>
        <div class="container">
            <div class="modal  fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content shadow-lg">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold text-primary " id="myModalLabel">Fill the Form to
                                Insert a New
                                Student..</h5>
                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="insert_student.php" method="post" class="needs-validation" novalidate>
                                <div class="form-group m-3">
                                    <label for="classid" class="fw-bolder fs-6">Roll Number: <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Enter Roll number"
                                        name="roll" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="dept" class="fw-bolder fs-6">Student Name:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter student Name" name="name"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="dept" class="fw-bolder fs-6">Date of Birth:<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Enter Date of Birth" name="dob"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="dept" class="fw-bolder fs-6">Email:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter email address"
                                        name="email" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="dept" class="fw-bolder fs-6">Mobile number:<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Enter Mobile Number"
                                        name="mobileno" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="dept" class="fw-bolder fs-6">Semester<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Current semester"
                                        name="sem" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="dept" class="fw-bolder fs-6">Year/Department:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter dapartment Name year/dept" name="dept" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                        </div>
                        <div class=" d-flex justify-content-center mb-2">
                            <button class="btn btn-primary" type="submit" name="submit">submit</button>
                        </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php include('script.php');
?>
    </body>

</html>
