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
                  <h3 class="font-weight-bold">Welcome! Railway Ticket Booking- Colombo Railway Department </h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! There have <span class="text-primary">All Feedbacks From Users</span></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="table-responsive" style="text-align: center;">
                                <table class="table v-middle" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Action</th>
                                            <th class="border-top-0 text-white">Train</th>
                                            <th class="border-top-0 text-white">User</th>
                                            <th class="border-top-0 text-white">Departure Time </th>
                                            <th class="border-top-0 text-white">Arrive Station</th>
                                            <th class="border-top-0 text-white">Arrive Time</th>
                                            <th class="border-top-0 text-white">Amount</th>
                                            <th class="border-top-0 text-white">Payment</th>
                                            <th class="border-top-0 text-white">Booking Date</th>
                                            <th class="border-top-0 text-white">Seats</th>

                                            <th class="border-top-0 text-white">Progress</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                      $count=1;
                                      $id = $_SESSION['user_id'];
                                        $viewquery = " SELECT * FROM booking order by trndate desc";
                                        $viewresult = mysqli_query($con,$viewquery);
                                    
                                         ?>
                                        <tbody>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                                $viewquery1 = " SELECT * FROM schedule where sch_id='".$row['sch_id']."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                                $row1 = mysqli_fetch_assoc($viewresult1);
                                                $train_id = $row1['train_id'];
                                                $station_id = $row1['to_station'];

                                                $viewquery2 = " SELECT * FROM user where user_id='".$row['user_id']."'";
                                                $viewresult3 = mysqli_query($con,$viewquery2);
                                                $row2 = mysqli_fetch_assoc($viewresult3);


                                                $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                                $viewresult1 = mysqli_query($con, $gettrain);
                                                $row3 = mysqli_fetch_assoc($viewresult1);

                                                $getstation = "SELECT * FROM station where station_id ='$station_id' ";
                                                $viewresult2 = mysqli_query($con, $getstation);
                                                $row4 = mysqli_fetch_assoc($viewresult2);
                                                ?>
                                                <tr>
                                                    <td>
                                                      <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="manage.php?accept=<?php echo $row['booking_id']; ?>"><i class="fas fa-check-circle"> Accept</i></a>
                                                          <a class="dropdown-item" href="manage.php?reject=<?php echo $row['booking_id']; ?>"><i class="fas fa-times-circle"> Reject</i></a>
                                                          <a class="dropdown-item" href="delete.php?booking_id=<?php echo $row['booking_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td><?php echo $row3['train_name']; ?></td>
                                                    <td><?php echo $row2['name']; ?><br><?php echo $row2['email']; ?><br><?php echo $row2['phone']; ?></td>
                                                    <td><?php echo $row1['depature_time']; ?></td>
                                                    <td><?php echo $row4['Station_name']; ?></td>
                                                    <td><?php echo $row1['arrive_time']; ?></td>
                                                    <td>LKR <?php echo $row['total_amount']; ?></td>
                                                    <td><?php echo $row['payment']; ?></td>
                                                    <td><?php echo $row['booking_date']; ?></td>
                                                    <td><?php echo $row['traveller']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                </tr>
                                            <?php   $count++;   }?>
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

