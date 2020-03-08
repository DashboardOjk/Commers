  <?php $no = 1; foreach ($hasil as $hasil) {?>
  <section class="hero-area">
        <div class="hero-slides owl-carousel">
      
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo base_url();?>gambar/<?php echo $hasil['foto_profil'];?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms"><?php echo $hasil['nama_profil'];?></h2>
                                <p data-animation="fadeInUp" data-delay="400ms"><?php echo $hasil['alamat_profil']?></p>
                                <a href="#" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Get a membership</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo base_url();?>gambar/uika3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Long life Fitness.</h2>
                                <p data-animation="fadeInUp" data-delay="400ms"><?php echo $hasil['visi_profil'];?></p>
                                <a href="#" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo base_url();?>gambar/uika4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Fitness wonder.</h2>
                                <font color="white" data-animation="fadeInUp" data-delay="400ms"><?php echo $hasil['misi_profil'];?></font>
                                <a href="#" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
 <!-- ##### Fitness Adds Area Start ##### -->
    <div class="fitness-adds-area">
        <div class="container">
            <div class="row">

                <!-- Single Add Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-add-area mt-100">
                        <a href="#"><img src="<?php echo base_url();?>assets/img/bg-img/add1.gif" alt=""></a>
                    </div>
                </div>

                <!-- Single Add Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-add-area mt-100">
                        <a href="#"><img src="<?php echo base_url();?>assets/img/bg-img/add2.png" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

     <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h6>Fitness Gym</h6>
                        <h2>Why choose Fitness Gym?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <!-- About Text -->
                        <div class="col-12 col-lg-6">
                            <div class="about-text">
                                <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie. Duis at lobortis neque, in maximus leo. Donec nec blandit ex, in finibus tortor. Curabitur aliquet fermentum ultrices.</p>
                            </div>
                        </div>
                        <!-- About Text -->
                        <div class="col-12 col-lg-6">
                            <div class="about-text">
                                <p>Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie. Duis at lobortis neque, in maximus leo. Donec nec blandit ex, in finibus tortor. Curabitur aliquet fermentum ultrices.</p>
                            </div>
                        </div>
                        <!-- About Button Group -->
                        <div class="col-12">
                            <div class="about-btn-group mt-50">
                                <a href="#" class="btn fitness-btn mr-3">Get a membership</a>
                                <a href="#" class="btn fitness-btn btn-2">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="about-thumb">
                        <img src="<?php echo base_url();?>assets/img/bg-img/man.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Experts Area Start ##### -->
    <div class="meet-the-experts-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(<?php echo base_url();?>assets/img/bg-img/bg-6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <h6>Fitness Gym</h6>
                        <h2>Ask the experts</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="experts-text">
                        <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="experts-team-members">

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.2s">
                            <img src="<?php echo base_url();?>assets/img/team-img/1.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Julia Smith</h3>
                                <h6>Personal trainer</h6>
                            </div>
                        </div>

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.3s">
                            <img src="<?php echo base_url();?>assets/img/team-img/2.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Mick Hamilton</h3>
                                <h6>Personal trainer</h6>
                            </div>
                        </div>

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.4s">
                            <img src="<?php echo base_url();?>assets/img/team-img/3.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Jack Black</h3>
                                <h6>Personal trainer</h6>
                            </div>
                        </div>

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.5s">
                            <img src="<?php echo base_url();?>assets/img/team-img/4.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Criss James</h3>
                                <h6>Fitness trainer</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Experts Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <div class="fitness-services-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="<?php echo base_url();?>assets/img/core-img/dumbbell.png" alt="">
                            </div>
                            <h4>Business School</h4>
                        </div>
                        <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="<?php echo base_url();?>assets/img/core-img/slim-down.png" alt="">
                            </div>
                            <h4>Fitness Pro</h4>
                        </div>
                        <p>Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="<?php echo base_url();?>assets/img/core-img/lotus-position.png" alt="">
                            </div>
                            <h4>Yoga Courses</h4>
                        </div>
                        <p>Nullam vulputate a lectus non molestie. Duis at lobortis neque, in maximus leo. Donec nec blandit ex, in finibus tortor.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="<?php echo base_url();?>assets/img/core-img/apple.png" alt="">
                            </div>
                            <h4>Diet Specialists</h4>
                        </div>
                        <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="<?php echo base_url();?>assets/img/core-img/swimming.png" alt="">
                            </div>
                            <h4>Swimming Pool</h4>
                        </div>
                        <p>Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="<?php echo base_url();?>assets/img/core-img/stationary-bike.png" alt="">
                            </div>
                            <h4>Spinning Class</h4>
                        </div>
                        <p>Nullam vulputate a lectus non molestie. Duis at lobortis neque, in maximus leo. Donec nec blandit ex, in finibus tortor.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Service Area End ##### -->

    <!-- ##### Pricing Table Area Start ##### -->
    <div class="fitness-pricing-table-area section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(<?php echo base_url();?>assets/img/bg-img/bg-7.jpg);">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Single Price Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-table mb-100">
                        <img src="<?php echo base_url();?>assets/img/bg-img/bg-8.jpg" alt="">
                        <div class="price-table-content">
                            <!-- price -->
                            <h2 class="price">
                                $50<span>/ Month</span>
                            </h2>
                            <h5>Woman Fitness Class</h5>
                            <!-- Price Data -->
                            <ul class="price-data">
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Donec molestie tincidunt tellus</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Sit amet aliquet auctor nisi</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Dut purus eleifentincid</li>
                            </ul>
                            <!-- btn -->
                            <a href="#" class="btn fitness-btn mt-30">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <!-- Single Price Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-table mb-100">
                        <img src="<?php echo base_url();?>assets/img/bg-img/bg-9.jpg" alt="">
                        <div class="price-table-content">
                            <!-- price -->
                            <h2 class="price">
                                $70<span>/ Month</span>
                            </h2>
                            <h5>Spinning Class + BONUS</h5>
                            <!-- Price Data -->
                            <ul class="price-data">
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Donec molestie tincidunt tellus</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Sit amet aliquet auctor nisi</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Dut purus eleifentincid</li>
                            </ul>
                            <!-- btn -->
                            <a href="#" class="btn fitness-btn mt-30">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <!-- Single Price Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-table mb-100">
                        <img src="<?php echo base_url();?>assets/img/bg-img/bg-10.jpg" alt="">
                        <div class="price-table-content">
                            <!-- price -->
                            <h2 class="price">
                                $90<span>/ Month</span>
                            </h2>
                            <h5>All Inclusive Gym</h5>
                            <!-- Price Data -->
                            <ul class="price-data">
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Donec molestie tincidunt tellus</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Sit amet aliquet auctor nisi</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Dut purus eleifentincid</li>
                            </ul>
                            <!-- btn -->
                            <a href="#" class="btn fitness-btn mt-30">Enroll Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Pricing Table Area End ##### -->

    <!-- ##### Working Hours Area Start ##### -->
    <div class="fitness-working-hours-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Fitness Working Hours -->
                <div class="col-12 col-lg-6">
                    <div class="fitness-working-hours mb-100">
                        <div class="section-heading">
                            <h6>Fitness Gym</h6>
                            <h2>Working Hours</h2>
                        </div>
                        <!-- Working Hours -->
                        <ul class="working-hours">
                            <li><span>Monday</span> <span>16:00 - 20:00</span></li>
                            <li><span>Tuesday</span> <span>12:00 - 20:00</span></li>
                            <li><span>Wednesday</span> <span>12:00 - 20:00</span></li>
                            <li><span>Thursday</span> <span>12:00 - 20:00</span></li>
                            <li><span>Friday</span> <span>15:00 - 21:00</span></li>
                            <li><span>Saturday</span> <span>10:00 - 20:00</span></li>
                            <li><span>Sunday</span> <span>Closed</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Our Newsletter Area -->
                <div class="col-12 col-lg-6">
                    <div class="our-newsletter-area mb-100">
                        <div class="section-heading">
                            <h6>Fitness Gym</h6>
                            <h2>Our Newsletter</h2>
                        </div>

                        <!-- Newsletter Form -->
                        <form action="#" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="form-group mb-0">
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Your E-mail">
                                <small id="emailHelp" class="form-text text-muted">*Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id.</small>
                            </div>
                            <button type="submit" class="btn fitness-btn btn-white mt-50">Subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Working Hours Area End ##### -->