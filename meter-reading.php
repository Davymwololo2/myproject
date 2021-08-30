<?php
include("header.php")
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          METER READING ENTRY TABLE
                        </div>
                        <?php

                        $uname= $_SESSION["customer_name"];
                        $Mnumber="MT005S";
                        echo "USERNAME:  "."<b>". $uname ."</b>"."<br>"."METER-NUMBER:  " ."<b>".$Mnumber."</b>";
                  

                        include("dbconnect.php");
                        $fetch="SELECT `clientsID`, `client_fname`, `client_lname`, `client_uname`, `cID`, `client_phone_number`, `client_email`, `client_ward`, `client_estate`, `client_password` FROM `clients` WHERE `client_uname`=$uname";


                             $data = mysqli_query($conn, $fetch);

                        ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>previous reading</th>
                                                <th>current reading</th>
                                                <th>Units consumed</th>
                                                <th>Total-cost</th>
                                                <th>date of billing</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include("dbconnect.php");
                                            $sql = "SELECT `PRReading`, `CUReading`, `UNconsumed`, `Tcost`, `date` FROM `mreading` WHERE `clientsID`='36477364'";
                                             $result = mysqli_query($conn, $sql);
                
                                            if (mysqli_num_rows($result)> 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {     ?>

                                                <tr>
                                                    <td value=""><?php echo $row['PRReading'];?></td>

                                                    <td value=""><?php echo $row['CUReading'];?></td>

                                                    <td value=""><?php echo $row['UNconsumed'];?></td>

                                                    <td value=""><?php echo $row['Tcost'];?></td>

                                                    <td><?php echo $row['date'];?></td>
                                                   

                                                </tr>
                                                <?php
                                                }
                                             
                                            }

                                            
                                                ?>
                                            <tr>
                                                <td><input class="form-control"  value="" disabled></td>
                                                <td><input class="form-control"  value=""></td>
                                                <td><input class="form-control"  value="" disabled></td>
                                                <td><input class="form-control" value=""disabled="true"></td>
                                                <td><button class="btn-info">update</button> </td>
                                               

                                            </tr>
                                        </tbody>
                                    </table>
                                    <button name="meter-reading" class="btn btn-success">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
            <?php
                include("footer.php");
            ?>