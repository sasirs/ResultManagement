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
        <div class="container class">
            <div class="row">

                <div class="col-lg-12">

                    <div class="table table-responsive mt-3">
                        <table class="table table-bordered display nowrap table-hover  shadow" cellspacing="0"
                            id="table" width="100%">

                            <thead class="text-center">
                                <tr>
                                    <th>S.no</th>
                                    <th>Roll No</th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Mobile No</th>
                                    <th>Semester</th>
                                    <th>Department</th>
                                    <th>Declare</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold">
                                <?php include'db_config.php';  
                 $rn=$_GET['rn'];
                 $sql = "SELECT * FROM student where  dept='$rn' order by name";
                 $no=1;
                 $result = $conn->query($sql);
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                     ?>

                                <tr class="text-center">
                                    <td><?php echo $no ?></td>
                                    <td><?php echo  $row['roll'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['dob']  ;?></td>
                                    <td><?php echo $row['mobileno'];?></td>
                                    <td><?php echo $row['sem']  ;?></td>
                                    <td><?php echo $row['dept']  ;?></td>
                                    <td> <?php echo "<a  href='result_declare.php?rn=$row[roll]&&dept=$row[dept]&&name=$row[name]'> "?><span
                                            class="fa fa-pencil btn btn-sm  edit">Declare</a></span></td>
                                </tr>
                                <?php
                     $no++;
                 } 
                
                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class=" d-grid  d-md-flex justify-content-md-center mb-3">
                <a href="javascript:history.go(-1)" onmouseover="self.status.referrer;return true"
                    class="btn btn-danger text-decoration-none text-light">
                    back</a>
            </div>
        </div>
        <?php include('script.php');?>
    </body>

</html>
