<?php ?>

<div class="title1 section-t-space">
    <h4>exclusive products</h4>
    <h2 class="title-inner1">special products</h2>
</div>
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="theme-tab">
                    <ul class="tabs tab-title">
                        <li class="current"><a href="tab-4">New Products</a></li>
                        <li class=""><a href="tab-5">Featured Products</a></li>
                        <li class=""><a href="tab-6">Best Sellers</a></li>
                    </ul>
                    <div class="tab-content-cls">
                        <div id="tab-4" class="tab-content active default">
                            <div class="no-slider row">
                               <?php foreach($newproducts as $new):
 $frontImageurl1 = $this->Html->url('/images/products/'.$new['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$new['Product']['back_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
								<div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span></div>
                                        <div class="front">
                                            <a href="<?php echo $new['Product']['slug']; ?>.html"><img src="<?php echo $frontImageurl1; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo $new['Product']['slug']; ?>.html"><img src="<?php echo $backImageurl1; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="<?php echo $new['Product']['slug']; ?>.html">
                                            <h6><?php echo $new['Product']['name']; ?></h6>
                                        </a>
                                        <h4>$<?php echo $new['Product']['discounted_price']; ?></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
								<?php endforeach;?>
							</div>
                        </div>
                        <div id="tab-5" class="tab-content">
                            <div class="no-slider row">
							 <?php foreach($hotproducts as $new):
 $frontImageurl1 = $this->Html->url('/images/products/'.$new['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$new['Product']['back_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        
                                     <div class="front">
                                            <a href="<?php echo $new['Product']['slug']; ?>.html"><img src="<?php echo $frontImageurl1; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo $new['Product']['slug']; ?>.html"><img src="<?php echo $backImageurl1; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="<?php echo $new['Product']['slug']; ?>.html">
                                            <h6><?php echo $new['Product']['name']; ?></h6>
                                        </a>
                                        <h4>$<?php echo $new['Product']['discounted_price']; ?></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
							<?php endforeach;?>
							</div>
                        </div>
                        <div id="tab-6" class="tab-content">
                            <div class="no-slider row">
							 <?php foreach($bestsellers as $new):
 $frontImageurl1 = $this->Html->url('/images/products/'.$new['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$new['Product']['back_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        
                                     <div class="front">
                                            <a href="<?php echo $new['Product']['slug']; ?>.html"><img src="<?php echo $frontImageurl1; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo $new['Product']['slug']; ?>.html"><img src="<?php echo $backImageurl1; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="<?php echo $new['Product']['slug']; ?>.html">
                                            <h6><?php echo $new['Product']['name']; ?></h6>
                                        </a>
                                        <h4>$<?php echo $new['Product']['discounted_price']; ?></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
							<?php endforeach;?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tab product end -->