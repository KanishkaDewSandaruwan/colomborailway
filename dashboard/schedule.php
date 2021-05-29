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
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! There have <span class="text-primary">All Trains with Details</span></h6>
                </div>
                <div class="col-2">
                  <button class="btn btn-info btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle text-center">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Action</th>
                                            <th class="border-top-0 text-white">Train Name</th>
                                            <th class="border-top-0 text-white">Depature Time</th>
                                            <th class="border-top-0 text-white">End Station</th>
                                            <th class="border-top-0 text-white">Arrive Time</th>
                                            <th class="border-top-0 text-white">1st Class Amount</th>
                                            <th class="border-top-0 text-white">2nd Class Amount</th>
                                            <th class="border-top-0 text-white">3rd Class Amount</th>
                                            <th class="border-top-0 text-white">Distance</th>
                                            <th class="border-top-0 text-white">Available</th>
                                            <th class="border-top-0 text-white">Date</th>
                                        </tr>
                                    </thead>
                                    <?php $count=1;
                                      $getsch = "SELECT * FROM schedule";
                                      $viewresult = mysqli_query($con, $getsch);
                                        
                                      ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                        $train_id = $row['train_id'];
                                        $station_id = $row['to_station'];

                                        $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                        $viewresult1 = mysqli_query($con, $gettrain);
                                        $row1 = mysqli_fetch_assoc($viewresult1);

                                        $getstation = "SELECT * FROM station where station_id ='$station_id' ";
                                        $viewresult2 = mysqli_query($con, $getstation);
                                        $row2 = mysqli_fetch_assoc($viewresult2);?>
                                        <tr>
                                            <td>
                                              <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="schedulunavailable.php?sch_id=<?php echo $row['sch_id']; ?>"><i class="fas fa-calendar-times"> Unavailable Dates</i></a>
                                                  <a class="dropdown-item" href="scheduledit.php?sch_id=<?php echo $row['sch_id']; ?>"><i class="fas fa-edit"> Edit</i></a>
                                                  <a class="dropdown-item" href="delete.php?sch_id=<?php echo $row['sch_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a>
                                                </div>
                                              </div>
                                            </td>
                                            <td><h4><?php echo $row1['train_name']; ?></h4></td>
                                            <td><h4><?php echo $row['depature_time']; ?></h4></td>
                                            <td><h4><?php echo $row2['Station_name']; ?></h4></td>
                                            <td><h4><?php echo $row['arrive_time']; ?></h4></td>
                                            <td><h4><?php echo $row['one_class_price']; ?></h4></td>
                                            <td><h4><?php echo $row['two_class_price']; ?></h4></td>
                                            <td><h4><?php echo $row['tree_class_price']; ?></h4></td>
                                            <td><h4><?php echo $row['distance']; ?></h4></td>
                                            <td><h4><?php echo $row['available']; ?></h4></td>
                                            <td><h4><?php echo $row['trn_date']; ?></h4></td>
                                        </tr>
                                        <?php   $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
          </div>
        <!-- partial:partials/_footer.html -->
        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h1 style="font-family: \"Times New Roman\",Times, serif; text-align:center" class ="text-danger text-center" >Add New Categori</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                        <label for="inputState"><b>Destination</b></label>
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
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
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

                      $cdate = date("Y/m/d m:H:s");

                        

                              if(!empty($train)){
                                if(!empty($dtime)){
                                  if(!empty($tostation)){
                                    if(!empty($atime)){
                                      if(!empty($oneprice)){
                                        if(!empty($twoprice)){
                                          if(!empty($treeprice)){
                                            if(!empty($distance)){
                                              if(!empty($available)){

                                                  $q1="INSERT INTO  schedule(train_id,depature_time,to_station,arrive_time,distance,available,trn_date,one_class_price,two_class_price,tree_class_price) values('$train','$dtime','$tostation','$atime','$distance','$available','$cdate','$oneprice','$twoprice','$treeprice')";
                                                        $res1=mysqli_query($con,$q1);

                                                      if ( $res1)
                                                      {
                                                          echo '<script>alert("Train Schedule Saved is Scussessfully."); window.location.href="schedule.php";
                                                            </script>'; 
                                                      }else{
                                                        echo "<script>alert(\"Train Schedule Save is Not Scussess\");</script>";
                                                      }      
                                                        
                                              }else{ echo "<script>alert(\"Select Train Availability\");</script>";}
                                            }else{ echo "<script>alert(\"Please Enter Distance\");</script>";}
                                          }else{ echo "<script>alert(\"Please Enter 3rd Class Ticket Amount\");</script>";}
                                        }else{ echo "<script>alert(\"Please Enter 2nd Class Ticket Amount\");</script>";}
                                      }else{ echo "<script>alert(\"Please Enter 1st Class Ticket Amount\");</script>";}
                                    }else{ echo "<script>alert(\"Please Enter Arrive Time\");</script>";}
                                  }else{ echo "<script>alert(\"Please Select Arrive Station\");</script>";}
                                }else{ echo "<script>alert(\"Please Enter Depature Time\");</script>";}
                              }else{ echo "<script>alert(\"Please Select Train\");</script>";}
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

