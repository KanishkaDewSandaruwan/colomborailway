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
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! There have <span class="text-primary">All Station</span></h6>
                </div>
                <div class="col-2">
                  <button class="btn btn-info btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle text-center">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Station Name</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <?php $count=1;
                                      $getcat = "SELECT * FROM station";
                                      $viewresult = mysqli_query($con, $getcat);
                                        
                                      ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                                        <tr>
                                            <td><h4><?php echo $row['Station_name']; ?></h4></td>
                                            <td><h3><a style="text-decoration: none; color: red; font-size: 15px;" href="delete.php?station_id=<?php echo $row['station_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a></h3></td>
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
                    <div class="form-group col-md-12">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>Railway Station Name</label>
                      <input type="text" class="form-control" name="station_name" placeholder="Railway Station Name">
                      </div>
                    </div>
   

                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    <?php 
                    if(isset($_POST['submit'])){

                      $station_name = $_REQUEST['station_name'];

                        

                            if(!empty($station_name)){
                                $q4 = "SELECT * FROM station WHERE station_name='$station_name'";
                                $res4 = mysqli_query($con,$q4);

                                    if(mysqli_num_rows($res4)>0)
                                    {
                                      echo '<script>alert("This Station Alrady Saved.");
                                      </script>';
                                    }
                                    else{
                                      $q1="INSERT INTO station(Station_name) values('$station_name')";
                                            $res1=mysqli_query($con,$q1);

                                                if ( $res1)
                                                {
                                                    echo '<script>alert("Station Saved is Scussessfully."); window.location.href="station.php";
                                                      </script>'; 
                                                }else{
                                                  echo "<script>alert(\"Station Save is Not Scussess\");</script>";
                                                }
                                            
                                    }  
                            }else{ echo "<script>alert(\"Please Enter Railway Station Name\");</script>";}
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

