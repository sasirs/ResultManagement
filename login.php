<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login page</title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
        <link rel="stylesheet" href="login.css">


    </head>

    <body>
        <div class="container class ">
            <?php  session_start();
           
       if(isset($_SESSION['failed']) && $_SESSION['failed']!='')
         { ?>
            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                <?php echo '<strong>Sorry!! </strong> Your data is Wrong , Please try again ..' ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> <?php     unset($_SESSION['failed']);

            }

            ?>
            <div class="mycard col-md-10 ms-md-5 ms-sm-2">
                <div class="row">
                    <div class="col">
                        <div class="myleft">
                            <form action="login_student.php" class="myform text-center" method="post">
                                <header class="fs-4 fw-bolder mb-3 ">Student Login! </header>
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <input type="number" class="myinput ps-5 " placeholder="Enter roll number" id="roll"
                                        name="roll" required>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input type="date" class="myinput ps-5 w-auto" id="dob" name="dob" required>
                                </div>

                                <button type="submit" class="btn w-50 text-light mt-4">Login</button>

                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <div class="myright">
                            <form action="login_admin.php" method="post" class="myform text-center">
                                <header class="fs-4 fw-bolder mb-3">Admin Login!</header>
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <input type="number" class="myinput ps-5" placeholder="Enter Id number" id="adminId"
                                        name="adminID" required>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="myinput ps-5" placeholder="Enter Password" id="aswd"
                                        name="apswd" required>
                                </div>
                                <button type="submit" class="btn  w-50 text-light mt-4 ">Login</button>

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
