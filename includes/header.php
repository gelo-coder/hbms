    <div class="header-top">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-brand">

                        <h1 style="margin-left: -180px; margin-top: -12px; font-size: 20px; color: red;"> <img src="images/logoo.png" img align="left-content" width="70" height="70" /> <a href="index.php"></a>HOTEL BOOKING/RESERVATION SYSTEM</h1>


                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 ">
                    <ul class="nav navbar-nav">
                        <!--  <li><a href="index1.php">Home</a></li> -->
                        <li class=""><a href="index.php">Facilities <span class="sr-only">(current)</span></a></li>
                        <!--  
                                    <li><a href="services.php">Facilities</a></li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campus <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!-- <?php
                                        $ret = "SELECT * from tblcategory";
                                        $query1 = $dbh->prepare($ret);
                                        $query1->execute();
                                        $resultss = $query1->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($resultss as $rows) {               ?>
                                    <li><a href="category-details.php?catid=<?php echo htmlentities($rows->ID) ?>"><?php echo htmlentities($rows->CategoryName) ?></a></li>
                                <?php } ?> -->


                                <?php
                                $ret = "SELECT * from tblhotel";
                                $query1 = $dbh->prepare($ret);
                                $query1->execute();
                                $resultss = $query1->fetchAll(PDO::FETCH_OBJ);
                                foreach ($resultss as $rows) {               ?>
                                    <li><a href="category-details.php?hotel_id=<?php echo htmlentities($rows->hotel_id) ?>"><?php echo htmlentities($rows->hotel_name) ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php if (strlen($_SESSION['hbmsuid'] == 0)) { ?>


                            <li><a href="signup.php">Sign Up</a></li>
                            <li><a href="signin.php">Login</a></li><?php } ?>
                        <?php if (strlen($_SESSION['hbmsuid'] != 0)) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="my-booking.php">My Booking</a></li>
                                    <li><a href="change-password.php">Change Password</a></li>
                                    <li><a href="logout.php">Logout</a></li>

                                </ul>
                            </li><?php } ?>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>