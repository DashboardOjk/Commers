
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url();?>assets/img/bg-img/breadcumb-2.jpg);">
        <div class="bradcumbContent">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>News</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="fitness-blog-posts">
                        <div class="row">
                             <?php foreach ($isi->result() as $key){?>

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-100">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-30">
                                        <img src="<?php echo base_url();?>assets/img/blog-img/1.png" alt="">
                                        <div class="post-date">
                                            <p><span>May</span>10</p>
                                        </div>
                                    </div>
                                    <!-- Post Title -->
                                    <a href="<?php echo base_url('index.php/blog/readmore/'.$key->ID_content);?>" class="post-title"><?php echo $key->Judul_content;?></a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="#"><?php echo $key->Tanggal_content;?></a> | in <a href="#">Health</a> | <a href="#">3 comments</a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p><?php 
                                        $artikel = $key->Isi_content;
                                        $potong = substr($artikel,0, 100);
                                        echo $potong;
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="fitness-pagination-area">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="fitness-blog-sidebar">

                        <!-- Add Widget -->
                        <div class="add-widget mb-100">
                            <a href="#"><img src="<?php echo base_url();?>assets/img/bg-img/add3.png" alt=""></a>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-100">
                            <h5>Categories</h5>
                            <ul>
                                <li><a href="#"><span>Fitness</span> <span>(9)</span></a></li>
                                <li><a href="#"><span>Health</span> <span>(11)</span></a></li>
                                <li><a href="#"><span>Outdoor Sports</span> <span>(21)</span></a></li>
                                <li><a href="#"><span>Lifestyle</span> <span>(14)</span></a></li>
                                <li><a href="#"><span>Uncategorized</span> <span>(7)</span></a></li>
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-100">
                            <h5>Latest Posts</h5>

                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post">
                                <div class="post-thumbnail">
                                    <img src="<?php echo base_url();?>assets/img/blog-img/4.png" alt="">
                                </div>
                                <div class="post-content">
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">10 Healthy foods for a good living</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>By <a href="#">Admin</a> | in <a href="#">Health</a> | <a href="#">3 comments</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post">
                                <div class="post-thumbnail">
                                    <img src="<?php echo base_url();?>assets/img/blog-img/5.png" alt="">
                                </div>
                                <div class="post-content">
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">10 Healthy foods for a good living</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>By <a href="#">Admin</a> | in <a href="#">Health</a> | <a href="#">3 comments</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post">
                                <div class="post-thumbnail">
                                    <img src="<?php echo base_url();?>assets/img/blog-img/6.png" alt="">
                                </div>
                                <div class="post-content">
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">10 Healthy foods for a good living</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>By <a href="#">Admin</a> | in <a href="#">Health</a> | <a href="#">3 comments</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="<?php echo base_url();?>assets/img/bg-img/add4.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->