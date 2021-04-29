<?php 
$viewquery = " SELECT * FROM feedback where accept = 'Accept' order by trn_date ";
$viewresult = mysqli_query($con,$viewquery); 
if ($row = mysqli_fetch_assoc($viewresult)) { ?>
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Customers Feedback</span>
                            <h2>What our client say</h2>
                        </div> 
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-11 col-md-11">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->

                            <!-- Single Testimonial -->
                            <?php 
                            $viewquery = " SELECT * FROM feedback where accept = 'Accept' order by trn_date ";
                            $viewresult = mysqli_query($con,$viewquery); 
                            if ($row = mysqli_fetch_assoc($viewresult)) {

                            $viewquery = " SELECT * FROM feedback where accept = 'Accept' order by trn_date ";
                            $viewresult = mysqli_query($con,$viewquery);  

                                while($row = mysqli_fetch_assoc($viewresult)) { ?>
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p><?php echo $row['feedback']; ?></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">
                                        <div class="founder-text">
                                            <span><?php echo $row['name']; ?>s</span>
                                            <p><?php echo $row['email']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>