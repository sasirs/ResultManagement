<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>student home page</title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
        <link rel="stylesheet" href="dashbord.css">
        <style>
        .tb {
            border-top: 5px solid yellow;
            border-radius: 25px;
        }

        .btn a {
            background-color: green;
        }

        .btn a:hover {
            opacity: 0.9;
        }

        </style>
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
                                    <a href="student_home.php" class="nav-link active  fa fa-home"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student_result.php" class="nav-link  fa fa-bookmark"> Results</a>
                                </li>

                                <li class="nav-item ">
                                    <a href="logout.php" class="nav-link  fa fa-sign-out" id="logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </header>
        <div class="container home">
            <?php  include'db_config.php';
            session_start();
            $roll=$_SESSION['id'];
            
            $result1 = mysqli_query($conn,"SELECT * FROM student WHERE roll='$roll'");
            $row= mysqli_fetch_array($result1);
           ?>
            <div class="row">
                <div class="col">
                    <div class="table table-responsive shadow-lg mt-5 tb">
                        <table class="table table-borderless fs-5 fw-bold" id="table" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="ps-md-5">Name:</td>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="ps-md-5">Register Number:</td>
                                    <td><?php echo $row['roll']; ?></td>
                                </tr>
                                <tr>
                                    <td class="ps-md-5">Department:</td>
                                    <td><?php echo $row['dept']; ?></td>
                                </tr>
                                <tr>
                                    <td class="ps-md-5">Semester:</td>
                                    <td><?php echo $row['sem']; ?></td>
                                </tr>
                                <tr>
                                    <td class="ps-md-5">Mobile Number:</td>
                                    <td><?php echo $row['mobileno'];?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn d-grid justify-content-center">
                        <a href="student_result.php" class="btn text-light fw-bold  ">Result</a>
                    </div>
                </div>
            </div>
            <footer class="me d-grid justify-content-end fw-bold mt-5">
                <p>Made with <span class="text-info"><i class="fa fa-heartbeat"></i></span>
                    Loy(s)alysi <span class="text-danger"><i class="fa fa-hand-o-right"></i></span>
                    sasi</p>
            </footer>
        </div>

        <?php include('script.php');?>
    </body>

</html>
