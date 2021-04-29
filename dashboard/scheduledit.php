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
                  <h1 class="text-danger mt-1">Change Schedule Details</h1>
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
                      <div class="form-group col-md-12">
                        <label for="inputState"><b>Train</b></label>
                        <select id="inputState" name="train" class="form-control">
                          <option selected></option>';
                         <?php 
                             $q3 = "SELECT * FROM train";
                             $res3 = mysqli_query($con,$q3);
                             $c=1;
                             while($row=mysqli_fetch_assoc($res3)){
                              $id = $row['train_id'];
                               echo "<option value='$id'>".$row['train_name']."</option>";
                               $c++;
                             }
                         ?>
                        </select>
                      </div>
                      </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label class="text-dark" for="original_price"><b>Departure Time</b></label><br>
                          <input type="time" id="bookingtime" name="dtime" class="form-control">
                    </div>
                  </div>


                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="inputState"><b>To</b></label>
                        <select id="inputState" name="tostation" class="form-control">
                          <option selected></option>';
                         <?php 
                             $q3 = "SELECT * FROM station";
                             $res3 = mysqli_query($con,$q3);
                             $c=1;
                             while($row=mysqli_fetch_assoc($res3)){
                              $id = $row['station_id'];
                               echo "<option value='$id' >".$row['Station_name']."</option>";
                               $c++;
                             } ?>
                        </select>
                      </div>
                      </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <label class="text-dark" for="original_price"><b>Arrival Time</b></label><br>
                            <input type="time" id="bookingtime" name="atime" class="form-control">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>1st Class Amount</label>
                      <input type="number" class="form-control" name="oneprice" placeholder="Price">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>2nd Class Amount</label>
                      <input type="number" class="form-control" name="twoprice" placeholder="Price">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>3rd Class Amount</label>
                      <input type="number" class="form-control" name="treeprice" placeholder="Price">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>Distance</label>
                      <input type="number" class="form-control" name="distance" placeholder="Distance">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="inputState"><b>Availability</b></label>
                        <select id="inputState" name="available" class="form-control">
                          <option selected></option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                      </div>
   

                  <div class="modal-footer">
                    <button type="button" onclick="window.location.href='schedule.php'" class="btn btn-dark" data-bs-dismiss="modal">Back</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    <?php 
                    if(isset($_POST['submit'])){

                      $train = $_REQUEST['train'];
                      $dtime = $_REQUEST['dtime'];
                      $tostation = $_REQUEST['tostation'];
                      $atime = $_REQUEST['atime'];
                      $oneprice = $_REQUEST['oneprice'];
                      $twoprice = $_REQUEST['twoprice'];
                      $treeprice = $_REQUEST['treeprice'];
                      $distance = $_REQUEST['distance'];
                      $available = $_REQUEST['available'];

                      $id = $_REQUEST['sch_id'];

                      $cdate = date("Y/m/d m:H:s");

                        if(!empty($train))
                        {
                          $query3="UPDATE schedule SET train_id='$train' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }

                        if(!empty($dtime))
                        {
                          $query3="UPDATE schedule SET depature_time='$dtime' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }

                        if(!empty($tostation))
                        {
                          $query3="UPDATE schedule SET to_station='$tostation' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }

                        if(!empty($atime))
                        {
                          $query3="UPDATE schedule SET arrive_time='$atime' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }

                        if(!empty($oneprice))
                        {
                          $query3="UPDATE schedule SET one_class_price='$oneprice' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }
                        if(!empty($twoprice))
                        {
                          $query3="UPDATE schedule SET two_class_price='$twoprice' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }

                        if(!empty($treeprice))
                        {
                          $query3="UPDATE schedule SET tree_class_price='$treeprice' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }

                        if(!empty($distance))
                        {
                          $query3="UPDATE schedule SET distance='$distance' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }

                        if(!empty($available))
                        {
                          $query3="UPDATE schedule SET available='$available' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"schedule.php\";</script>";
                        }
                    }
                    ?>
                  </div>
                </form>
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

