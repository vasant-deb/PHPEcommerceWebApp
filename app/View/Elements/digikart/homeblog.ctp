<?php ?>
<?php 
if(count($ourblogs) > 0) { 
?>
<!-- blog section -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="title1 section-t-space">
                <h4>Recent Story</h4>
                <h2 class="title-inner1">from the blog</h2>
            </div>
        </div>
    </div>
</div>
<section class="blog p-t-0 ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-3 no-arrow">
				  <?php foreach($ourblogs as $blog): ?>
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="images/blogs/<?php echo $blog['Blog']['image']; ?>" class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4><?php 
$ab=$blog['Blog']['created'];
$date = strtotime($ab);
echo date('M jS', $date); ?></h4>
                            <a href="blogs/<?php echo $blog['Blog']['slug']; ?>.html">
                                <p><?php echo $blog['Blog']['name']; ?></p>
                            </a>
                            <hr class="style1">
                            <h6>by: Admin , 2 Comment</h6>
                        </div>
                    </div>
                   <?php endforeach ;?>
				</div>
            </div>
        </div>
    </div>
</section>

<?php } ?>




<!-- instagram section -->
<section class="instagram ratio_square">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <h2 class="title-borderless"># instagram</h2>
                <div class="slide-7 no-arrow slick-instagram">
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/2.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/3.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/4.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/6.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/7.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/8.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"> <img src="digikart/assets/images/slider/2.jpg" class="bg-img" alt="Avatar" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instagram section end -->