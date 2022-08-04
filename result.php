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
                                    <a href="student.php" class="nav-link  fa fa-graduation-cap"> Student</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin.php" class="nav-link fa fa-user"> Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="result.php" class="nav-link active   fa fa-bookmark"> Results</a>
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
                <?php echo '<p> <strong>Sucess!! </strong>'.$_SESSION['success'].'</p>' ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> <?php
             unset($_SESSION['success']);
         } 
           
       if(isset($_SESSION['failed']) && $_SESSION['failed']!='')
         { ?>
            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                <?php echo '<p><strong>Sorry!! </strong>'.$_SESSION['failed'].'</p>' ?>
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
                                    <th>Class id</th>
                                    <th>Year/Dept </th>
                                    <th>Section</th>
                                    <th>Incharge</th>
                                    <th>Published</th>
                                    <th>Declare</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold">
                                <?php include'db_config.php';  
                            $sql = "SELECT * FROM class  order by classid";
                            $no=1;
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                ?>

                                <tr class="text-center">
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $row['classid'];?></td>
                                    <td><?php echo  strtolower($row['dept']);?></td>
                                    <td><?php echo strtoupper($row['section'])  ;?></td>
                                    <td><?php echo ucfirst($row['incharge']);?></td>
                                    <td> <?php echo "<a  href='view_result.php?rn=$row[dept]'> "?><span
                                            class="fa fa-eye btn  btn-sm  view">View</a></span></td>

                                    <td>
                                        <?php echo "<a href='view_student_result.php?rn=$row[dept]'> "?><span
                                            class="fa fa-pencil btn btn-sm  edit">Declare </a></span></td>
                                </tr>
                                <?php
                                $no++;
                            } 
                           ?>
                            </tbody>
                        </table>
                        <div class="btn d-block justify-content-center ">
                            <button class=" btn btn-info fa fa-plus text-light fs-5 add" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                Add Result
                            </button>
                        </div>
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
                            <h5 class="modal-title fw-bold text-primary " id="myModalLabel">Student Results Management!
                            </h5>
                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form action="insert_result.php" method="post" class="needs-validation m-2" novalidate>

                                <h5 class="text-center">Student</h5>
                                <div class="form-group m-3 col ">
                                    <label for="classid" class="fw-bolder fs-6">Roll Number: <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="roll" required
                                        placeholder="Enter Roll number">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>

                                </div>
                                <div class="form-group m-3  col">
                                    <label for="section" class="fw-bolder fs-6">Name: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" required
                                        placeholder="Enter student Name">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">Department : <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="dept" required
                                        placeholder="Enter dapartment Name year/dept">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3 col">
                                    <label for="sem" class="fw-bolder fs-6">semester : <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="sem" required
                                        placeholder="Enter Semester">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">Test Name : <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="tname"
                                        placeholder="Enter Test Name here" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <h5 class="text-center border-top mt-4">Marks</h5>
                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">subject 1:<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="form-group m-3 col">
                                    <input type="text" class="form-control" name="sn1" required placeholder="code ">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
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
                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">subject 2:<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="form-group m-3 col">
                                    <input type="text" class="form-control" name="sn2" required placeholder="code ">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
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

                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">subject 3:<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="form-group m-3 col">
                                    <input type="text" class="form-control" name="sn3" required placeholder="code ">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
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

                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">subject 4:<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="form-group m-3 col">
                                    <input type="text" class="form-control" name="sn4" required placeholder="code ">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
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

                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">subject 5:<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="form-group m-3 col">
                                    <input type="text" class="form-control" name="sn5" required placeholder="code ">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
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

                                <div class="form-group m-3 col">
                                    <label for="sub3" class="fw-bolder fs-6">subject 6:</label>
                                </div>
                                <div class="form-group m-3 col">
                                    <input type="text" class="form-control" name="sn6" placeholder="code ">

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
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>



        <?php include('script.php');?>
    </body>

</html>
