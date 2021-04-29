<div class="popular-location section-padding30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Most Beautiful</span>
                            <h2>OUR GALLERY</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php 
                $galary="SELECT * FROM galary";
                $query1 = mysqli_query($con,$galary); 
                while ($row3 = mysqli_fetch_assoc($query1)) { 
                $galaryimage = $row3['galary_image'];
                $galaryimage_src = "upload/gallery/".$galaryimage; ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img height="300px" src="<?php echo $galaryimage_src; ?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>