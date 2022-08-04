<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>result page</title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
        <link rel="stylesheet" href="dashbord.css">
        <style>
        .tb {
            border-right: 5px solid rgb(0, 255, 42);
            border-left: 5px solid rgb(0, 255, 42);
            border-radius: 25px;
        }

        thead {
            color: green;
        }

        .col h4 {
            text-transform: capitalize;
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
                                    <a href="student_home.php" class="nav-link fa fa-home"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student_result.php" class="nav-link   active  fa fa-bookmark"> Results</a>
                                </li>

                                <li class="nav-item ">
                                    <a href="logout.php" class="nav-link  fa fa-sign-out" id="logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </header>
        <div class="container">
            <?php  include'db_config.php';
        session_start();
        $roll=$_SESSION['id'];
        $result1 = mysqli_query($conn,"SELECT * FROM result WHERE roll='$roll'");
        if ($result1->num_rows > 0) {
        $row1= mysqli_fetch_array($result1);
     
            ?>
            <div class="row">
                <div class="col">
                    <h4 class="text-center p-3 fw-bold"> <?php echo $row1["tname"]?></h4>
                    <div class=" table table-responsive tb mt-5">
                        <table class="table table-bordered display  text-center table-hover" width="100%">
                            <thead class="text-center  fs-5">
                                <th>Semester</th>
                                <th>Subjects</th>
                                <th>Marks</th>
                            </thead>
                            <tbody class="fw-bold">
                                <tr>
                                    <td><?php echo $row1["sem"]?></td>
                                    <td><?php echo $row1["sn1"]?></td>
                                    <td><?php echo $row1["sub1"]?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row1["sem"]?></td>
                                    <td><?php echo $row1["sn2"]?></td>
                                    <td><?php echo $row1["sub2"]?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row1["sem"]?></td>
                                    <td><?php echo $row1["sn3"]?></td>
                                    <td><?php echo $row1["sub3"]?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row1["sem"]?></td>
                                    <td><?php echo $row1["sn4"]?></td>
                                    <td><?php echo $row1["sub4"]?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row1["sem"]?></td>
                                    <td><?php echo $row1["sn5"]?></td>
                                    <td><?php echo $row1["sub5"]?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row1["sem"]?></td>
                                    <td><?php echo $row1["sn6"]?></td>
                                    <td><?php echo $row1["sub6"]?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="btn d-block justify-content-center">
                <a href="print.php" class="btn btn-primary">print</a>
            </div>
            <footer class="me d-grid justify-content-end fw-bold mt-5">
                <p>Made with <span class="text-info"><i class="fa fa-heartbeat"></i></span>
                    Loy(s)alysi <span class="text-danger"><i class="fa fa-hand-o-right"></i></span>
                    sasi</p>
            </footer>
            <?php
        }
        else{
            ?><div class="alert alert-danger" role="alert">
                <b>Result not Declare yet! try Later...</b>
            </div><?php 
            } ?>
        </div>

        <?php include('script.php');?>
    </body>

</html>
