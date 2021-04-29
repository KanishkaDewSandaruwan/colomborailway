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
              <div class="col-md-10 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle text-center">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Train Name</th>
                                            <th class="border-top-0 text-white">1st Class Seats</th>
                                            <th class="border-top-0 text-white">2nd Class Seats</th>
                                            <th class="border-top-0 text-white">3rd Class Seats</th>
                                            <th class="border-top-0 text-white">Details</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <?php $count=1;
                                      $getcat = "SELECT * FROM train";
                                      $viewresult = mysqli_query($con, $getcat);
                                        
                                      ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                                        <tr>
                                            <td><h4><?php echo $row['train_name']; ?></h4></td>
                                            <td><h4><?php echo $row['one_class_seats']; ?></h4></td>
                                            <td><h4><?php echo $row['two_class_seats']; ?></h4></td>
                                            <td><h4><?php echo $row['tree_class_seats']; ?></h4></td>
                                            <td><h4><?php echo $row['details']; ?></h4></td>
                                            <td>
                                              <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="trainedit.php?train_id=<?php echo $row['train_id']; ?>"><i class="fas fa-edit"> Edit</i></a>
                                                  <a class="dropdown-item" href="delete.php?train_id=<?php echo $row['train_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a>
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

                        

                            if(!empty($train_name)){
                              if(!empty($one)){
                                if(!empty($two)){
                                  if(!empty($tree)){
                                    if(!empty($editordata)){
                                        $q4 = "SELECT * FROM train WHERE train_name='$train_name'";
                                        $res4 = mysqli_query($con,$q4);

                                            if(mysqli_num_rows($res4)>0)
                                            {
                                              echo '<script>alert("This Train Alrady Saved.");
                                              </script>';
                                            }
                                            else{
                                              $q1="INSERT INTO  train(train_name,one_class_seats,two_class_seats,tree_class_seats,details) values('$train_name','$one','$two','$tree','$editordata')";
                                                    $res1=mysqli_query($con,$q1);

                                                        if ( $res1)
                                                        {
                                                            echo '<script>alert("Train Saved is Scussessfully."); window.location.href="train.php";
                                                              </script>'; 
                                                        }else{
                                                          echo "<script>alert(\"Train Save is Not Scussess\");</script>";
                                                        }
                                            
                                          }  
                                    }else{ echo "<script>alert(\"Please Enter Train Details\");</script>";}
                                  }else{ echo "<script>alert(\"Please Enter 3rd Class Seats\");</script>";}
                                }else{ echo "<script>alert(\"Please Enter 2nd Class Seats\");</script>";}
                              }else{ echo "<script>alert(\"Please Enter 1st Class Seats\");</script>";}
                            }else{ echo "<script>alert(\"Please Enter Train Name\");</script>";}
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

