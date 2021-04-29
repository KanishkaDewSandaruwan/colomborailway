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
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-11 col-xl-8 mb-4 mb-xl-0">
                  <h1 class="text-danger mt-1">Change Train Details</h1>
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
              <div class="col-md-7 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                  <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group col-md-12">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>Train Name</label>
                      <input type="text" class="form-control" name="train_name" placeholder="Train Name">
                      </div>
                    </div>

                    <div class="form-group col-md-12">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>1st Class Seats</label>
                      <input type="number" class="form-control" name="one" placeholder="1st Class Seats">
                      </div>
                    </div>

                    <div class="form-group col-md-12">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>2nd Class Seats</label>
                      <input type="number" class="form-control" name="two" placeholder="2nd Class Seats">
                      </div>
                    </div>

                    <div class="form-group col-md-12">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>3rd Class Seats</label>
                      <input type="number" class="form-control" name="tree" placeholder="3rd Class Seats">
                      </div>
                    </div>

                     <label for="title" class="a"><b>Details</b></label><br><br>
                    <textarea id="summernote" name="editordata"></textarea>
                        <script>
                          $('#summernote').summernote({
                            placeholder: 'Details About this Package',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                              ['style', ['style']],
                              ['font', ['bold', 'underline', 'clear']],
                              ['color', ['color']],
                              ['para', ['ul', 'ol', 'paragraph']],
                            ]
                          });
                        </script><br><br>
   

                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    <?php 
                    if(isset($_POST['submit'])){

                      $train_name = $_REQUEST['train_name'];
                      $one = $_REQUEST['one'];
                      $two = $_REQUEST['two'];
                      $tree = $_REQUEST['tree'];
                      $editordata = $_REQUEST['editordata'];

                      $id = $_REQUEST['train_id'];

                        if(!empty($train_name))
                        {
                          $query3="UPDATE train SET train_name='$train_name' WHERE train_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"train.php\";</script>";
                        }

                        if(!empty($one))
                        {
                          $query3="UPDATE train SET one_class_seats='$one' WHERE train_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"train.php\";</script>";
                        }

                        if(!empty($two))
                        {
                          $query3="UPDATE train SET two_class_seats='$two' WHERE train_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"train.php\";</script>";
                        }

                        if(!empty($tree))
                        {
                          $query3="UPDATE train SET tree_class_seats='$tree' WHERE train_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"train.php\";</script>";
                        }

                        if(!empty($editordata))
                        {
                          $query3="UPDATE train SET details='$editordata' WHERE train_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"train.php\";</script>";
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

