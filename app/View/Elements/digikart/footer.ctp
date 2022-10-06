<?php ?>
<footer class="footer-light">
   
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo"><img src="images/<?=$sitelogo;?>" alt=""></div>
                        <p><?=$footer_text;?></p>
                        <div class="footer-social">
                            <ul>
                                <?php if(!empty($facebook_url)){?><li><a href="<?=$facebook_url;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }?>
                                <?php if(!empty($googleplus_url)){?><li><a href="<?=$googleplus_url;?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php }?>
                               <?php if(!empty($twitter_url)){?>  <li><a href="<?=$twitter_url;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>
                               <?php if(!empty($instagram_url)){?>  <li><a href="<?=$instagram_url;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php }?>
                              <?php if(!empty($skype_url)){?>   <li><a href="<?=$skype_url;?>"><i class="fa fa-skype" aria-hidden="true"></i></a></li><?php }?>
							 <?php if(!empty($pinterest_url)){?>	<li><a href="<?=$pinterest_url;?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li><?php }?>
							 <?php if(!empty($linkedin_url)){?>	<li><a href="<?=$linkedin_url;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>my account</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">mens</a></li>
                                <li><a href="#">womens</a></li>
                                <li><a href="#">clothing</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">featured</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>why choose Us</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">shipping & return</a></li>
                                <li><a href="#">secure shopping</a></li>
                                <li><a href="#">gallary</a></li>
                                <li><a href="#">affiliates</a></li>
                                <li><a href="#">contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>store information</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i><?=$company_address;?></li>
                                <li><i class="fa fa-phone"></i>Call Us: <?=$company_phone;?></li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#"><?=$company_email;?></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 <?=$footer_text_title;?></p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="digikart/assets/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="digikart/assets/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="digikart/assets/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="digikart/assets/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="digikart/assets/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->



<!-- Quick-view modal popup end-->



<!-- exit modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal exit-modal" id="exit_popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="media">
                                    <img src="digikart/assets/images/stop.png" class="stop img-fluid blur-up lazyload mr-3" alt="">
                                    <div class="media-body text-left align-self-center">
                                        <div>
                                            <h2>wait!</h2>
                                            <h4>We want to give you
                                                <b>10% discount</b>
                                                <span>for your first order</span>
                                            </h4>
                                            <h5>Use discount code Alpha at checkout</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add to cart modal popup end-->




<!-- cart start -->


<!-- tap to top -->
<div class="tap-top top-cls">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="digikart/assets/js/jquery-3.3.1.min.js"></script>

<!-- fly cart ui jquery-->
<script src="digikart/assets/js/jquery-ui.min.js"></script>

<!-- exitintent jquery-->
<script src="digikart/assets/js/jquery.exitintent.js"></script>
<script src="digikart/assets/js/exit.js"></script>

<!-- popper js-->
<script src="digikart/assets/js/popper.min.js"></script>

<!-- slick js-->
<script src="digikart/assets/js/slick.js"></script>

<!-- menu js-->
<script src="digikart/assets/js/menu.js"></script>

<!-- lazyload js-->
<script src="digikart/assets/js/lazysizes.min.js"></script>

<!-- Bootstrap js-->
<script src="digikart/assets/js/bootstrap.js"></script>

<!-- Bootstrap Notification js-->
<script src="digikart/assets/js/bootstrap-notify.min.js"></script>

<!-- Fly cart js-->
<script src="digikart/assets/js/fly-cart.js"></script>

<!-- Theme js-->
<script src="digikart/assets/js/script.js"></script>

<script>
</script>

<script>
    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

</body>
</html>
