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

    </head>

    <body>

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
                        <table class="table table-bordered display  text-center  table-striped" width="100%">
                            <thead class="text-center fs-5">
                                <th>Semester</th>
                                <th>Subjects</th>
                                <th>Marks</th>
                            </thead>
                            <tbody class="">
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
            <div class=" d-flex justify-content-center pb-3 gap-3">
                <button onclick="window.print();" id="print" class="btn btn-primary">print</button>
                <a href="javascript:history.go(-1)" onmouseover="self.status.referrer;return true"
                    class="btn btn-danger text-decoration-none text-light">
                    back</a>
            </div>


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
