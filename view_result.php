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


                            <?php  include'db_config.php';
                            $rn=$_GET['rn'];
                            $sql = "SELECT * FROM result where dept='$rn'  order by name";
                            $result = $conn->query($sql);
                            $result1 = $conn->query($sql);
                            $no=1;
                            if($row1 = $result->fetch_assoc()) { ?>
                            <thead class="text-center"> <?php
                                echo "<tr>
                                <th>S.no</th>
                                <th>roll</th>
                                <th>name</th>
                                <th>Class</th>
                                <th>Test Name</th>
                                <th>".strtoupper( $row1["sn1"])."</th>                        
                                <th>".strtoupper( $row1["sn2"])."</th>    
                                <th>".strtoupper( $row1["sn3"])."</th>    
                                <th>".strtoupper( $row1["sn4"])."</th>    
                                <th>".strtoupper( $row1["sn5"])."</th>    
                                <th>".strtoupper( $row1["sn6"])."</th>     
                                <th>Delete</th>  
                                </tr>";
                                ?></thead> <?php
                            }
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result1->fetch_assoc()) { ?>
                            <tbody class="text-center"> <?php 
                                
                            echo "<tr>
                            <td>" . $no. "</td>
                            <td>" . $row["roll"] . "</td>
                            <td>". $row["name"]. "</td>
                            <td>". $row["dept"]."</td>
                            <td>". $row["tname"]."</td>
                            <td>". $row["sub1"]."</td>
                            <td>". $row["sub2"] .  "</td>
                            <td>". $row["sub3"] .  "</td>
                            <td>". $row["sub4"] .  "</td>
                            <td>". $row["sub5"] .  "</td>
                            <td>". $row["sub6"] .  "</td> "?>
                                <td> <?php echo "<a  href='delete_result.php?rn=$row[roll]'> "?><span
                                        class="fa fa-times btn btn-sm delete"></a></span></td><?php "
                            </tr>" ; ?>
                            </tbody> <?php
                            $no++;
                            }
                            echo "</table>";
                            } else { echo "0 results"; }
                            $conn->close();
                            ?>
                        </table>

                    </div>
                    <div class=" d-grid d-md-flex justify-content-md-center ">
                        <a href="javascript:history.go(-1)" onmouseover="self.status.referrer;return true"
                            class="btn btn-danger text-decoration-none text-light">
                            back</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include('script.php');?>

    </body>

</html>
