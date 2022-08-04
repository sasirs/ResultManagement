<?php include'db_config.php';
 session_start();
 $ad=$_SESSION['ad'];
 $result = mysqli_query($conn,"SELECT * FROM admin WHERE adminID='$ad'");
 $row= mysqli_fetch_array($result);

 $qq=mysqli_query($conn,"select * from class ");
 $rows=mysqli_num_rows($qq);     

 $q=mysqli_query($conn,"select * from student");
 $r1=mysqli_num_rows($q);      
 //all users
 $q2=mysqli_query($conn,"select * from admin");
 $r2=mysqli_num_rows($q2);     
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dash board</title>
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
                    <a href="#" class="navbar-brand text-light">Welcome!! <?php echo ucfirst($row['name']); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavBar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="w-100">
                        <div class="navbar-collapse collapse " id="myNavBar">
                            <ul class="navbar-nav ms-auto  text-md-center text-xm-start text-center ">
                                <li class="nav-item">
                                    <a href="dashbord.php" class="nav-link active   fa fa-home"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="class.php" class="nav-link    fa fa-book"> Class</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student.php" class="nav-link fa fa-graduation-cap"> Student</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin.php" class="nav-link  fa fa-user"> Admin</a>
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
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/students.jpg" loading="lazy" class="card-img-top" alt="student.img">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Students</h5>
                            <p class="card-text">Total Number Of Students Enrolled</p>
                            <h1 class="text-center"><?php   echo"$r1"?></h1>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last Updated 1 minutes ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/class.jpg" loading="lazy" class="card-img-top " alt="student.img">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Class</h5>
                            <p class="card-text">Total Number Of Classes Registered</p>
                            <h1 class="text-center number"><?php   echo"$rows"?></h1>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last Updated 1 minutes ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/admin.jpg" loading="lazy" class="card-img-top" alt="student.img">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Admin</h5>
                            <p class="card-text">Total Number Of admins Created</p>
                            <h1 class="text-center"><?php   echo"$r2"?></h1>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last Updated 1 minutes ago</small>
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


        <script src="./bootstrap/js/jquery.min.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    </body>

</html>
