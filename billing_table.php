<div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ClientsID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>IDNo.</th>
                                            <th>Email Adress</th>
                                            <th>Phone No.</th>
                                            <th>Ward</th>
                                            <th>Estate</th>
                                            <th>update user info</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    include("dbconnect.php");
                                    

                                    $sql = "SELECT `clientsID`, `client_fname`, `client_lname`, `client_uname`, `cID`, `client_phone_number`, `client_email`, `client_ward`, `client_estate`, `client_password` FROM `clients`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {     ?>


                                        <tr class="odd gradeX">
                                            <td> <?php echo $row["clientsID"]; ?> </td>
                                            <td> <?php echo $row["client_fname"]; ?> </td>
                                            <td> <?php echo $row["client_lname"]; ?> </td>
                                            <td class="center"> <?php echo $row["client_uname"]; ?> </td>
                                            <td class="center"> <?php echo $row["cID"]; ?> </td>
                                            <td class="center"> <?php echo $row["client_phone_number"]; ?> </td>
                                            <td class="center"> <?php echo $row["client_email"]; ?> </td>
                                            <td class="center"> <?php echo $row["client_ward"]; ?> </td>
                                            <td class="center"> <?php echo $row["client_estate"]; ?> </td>
                                            <td class="center"><a href="#" class="btn"><span class="fa fa-eye"> View</span> </a></td>
                                        </tr>
                                        <br>

                                        

                                            <?php
                                            }
                                            }
                                            ?>  

                                    </tbody>
                                </table>

                            </div>
                            
                        </div>
                    </div>
                    <?php
                    include("footer.php");
                ?>