<?php require_once 'nav.php'; ?>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule.php">
              <i class="far fa-calendar-alt menu-icon"></i>
              <span class="menu-title">Schedule</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="station.php">
              <i class="fas fa-store menu-icon"></i>
              <span class="menu-title">Railway Stations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="train.php">
              <i class="fas fa-train menu-icon"></i>
              <span class="menu-title">Trains</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">
              <i class="fas fa-images menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bookings.php">
              <i class="far fa-calendar-check menu-icon"></i>
              <span class="menu-title">Bookings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedbacks.php">
              <i class="fas fa-comments menu-icon"></i>
              <span class="menu-title">Feedbacks</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="custom.php">
              <i class="fas fa-palette menu-icon"></i>
              <span class="menu-title">Cusomize</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-11 col-xl-8 mb-4 mb-xl-0">
                  <h1 class="text-danger mt-1">Schedule Unavailable Date</h1>
                  <h3 class="font-weight-bold mt-3">Welcome! Railway Ticket Booking- Colombo Railway Department </h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! There have <span class="text-primary">Schedules Details to Change</span></h6>
                </div>
                <div class="col-2">
                  <button class="btn btn-info btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                       <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <label class="text-dark" for="original_price"><b>Unavailable Date</b></label><br>
                            <input type="date" id="bookingtime" name="udate" class="form-control">
                      </div>
                    </div>
   

                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="window.location.href='schedule.php'" data-bs-dismiss="modal">Back</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    <?php 
                    if(isset($_POST['submit'])){

                      $udate = $_REQUEST['udate'];
                      $id = $_REQUEST['sch_id'];

                      $cdate = date("Y/m/d");

                        if (!empty($udate)) {
                          if (new DateTime() < new DateTime($udate)){

                            $q1="INSERT INTO  unavailable(sch_id,un_date) values('$id','$udate')";
                              $res1=mysqli_query($con,$q1);

                              if ( $res1)
                              {
                                  echo '<script>alert("Unavailable Schedule Saved is Scussessfully."); window.location.href="schedulunavailable.php?sch_id='.$id.'";
                                    </script>'; 
                              }else{
                                echo "<script>alert(\"Unavailable Schedule Save is Not Scussess\");</script>";
                              } 
                          }else{ echo "<script>alert(\"Please Select Future Date\");</script>";}
                        }else{ echo "<script>alert(\"Select Date\");</script>";}

                    }
                    ?>
                  </div>
                </form>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                      <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle text-center">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Schedule</th>
                                            <th class="border-top-0 text-white">Unavailable Date</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <?php $count=1;
                                      $getsch = "SELECT * FROM unavailable";
                                      $viewresult = mysqli_query($con, $getsch);
                                        
                                      ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                        $sch_id = $row['sch_id'];

                                        $getsch = "SELECT * FROM schedule where sch_id = '$sch_id' ";
                                        $viewresult4 = mysqli_query($con, $getsch);
                                        $row3 = mysqli_fetch_assoc($viewresult4);

                                        $train_id = $row3['train_id'];
                                        $station_id = $row3['to_station'];

                                        $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                        $viewresult1 = mysqli_query($con, $gettrain);
                                        $row1 = mysqli_fetch_assoc($viewresult1);

                                        $getstation = "SELECT * FROM station where station_id ='$station_id' ";
                                        $viewresult2 = mysqli_query($con, $getstation);
                                        $row2 = mysqli_fetch_assoc($viewresult2);?>
                                        <tr>
                                            <td><h4><?php echo $row1['train_name']; ?> <?php echo $row2['Station_name']; ?> <?php echo $row3['depature_time']; ?></h4></td>
                                            <td><h4><?php echo $row['un_date']; ?></h4></td>
                                            <td>
                                              <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="delete.php?un_id=<?php echo $row['un_id']; ?>&sch_id=<?php echo $row['sch_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a>
                                                </div>
                                              </div>
                                            </td>
                                        </tr>
                                        <?php   $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
              </div>
          </div>


        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Railway Ticket Booking <br>
            Created By: P.K.N. BUDDHINIE SEU/IS/16/MIT/086</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

