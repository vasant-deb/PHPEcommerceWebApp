<?php /* ?>
<?php   
if(count($homeproduct) > 0) { 
?>

<div class="featured-product-area section-padding" id="arrival">
      <div class="container">
        <div class="row rp-style">
          <div class="col-md-12">
            <div class="section-title text-center mb-35">
              <h2 class="text-uppercase"><strong>FRESH NEW ARRIVAL</strong></h2>
              <p class="text-defualt">ALL NEW ITEAMS</p>
			  <div class="col-md-12 text-right">
			<a href="new-arrival.html" class="product-name view">View all</a>
			</div>
              <img alt="" src="mwomen/images/section-border.png">  </div>
          </div>
        </div>
        <div class="row rp-style">
          <div class="featured-carousel indicator-style">
            
			<?php foreach($homeproduct as $products):
 $frontImageurl1 = $this->Html->url('/images/products/'.$products['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$products['Product']['back_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
            <div class="product-container cp-style-2">
              <div class="product-inner"> <a href="<?php echo $products['Product']['slug']; ?>.html">
                <div class="product-img b-img">
 <?php 
				if($products['Product']['image'] != '') {
				?>
				<img alt="" src="<?php echo $frontImageurl1; ?>"> 
				<?php } else { ?>
				<img alt="" src="<?php echo $ddthumbImageurl; ?>"> 
				<?php } ?>
				</div>
                </a> <?php 
				if($products['Product']['product_alt'] != '') {
				?>		 <span class="product-tag text-uppercase theme-bg"><?php echo $products['Product']['product_alt']; ?></span>
				<?php } ?>
                 				
                  <div class="product-text pt-15">                 
                  <ul class="pricing list-inline text-center">            
					<p class="prdo">
					 <a href="<?php echo $products['Product']['slug']; ?>.html">
					<?php echo $products['Product']['name']; ?>
					</a>
					</p>
					<p class="product-desc"><?php echo $products['Product']['tagline']; ?></p>
					<p class="price-sec">
					<?php if($products['Product']['discounted_price'] > 0) { ?>
					 <?php  
					 $rel=$products['Product']['price'];
					 $dis=$products['Product']['discounted_price'];
					 $dico=($rel-$dis);
					 $dicount=($dico/$rel)*100;
				
					 
					  
					 ?>
					
					<i class="fa fa-rupee"></i><?php echo $products['Product']['discounted_price']; ?> 
					<span>
					<i class="fa fa-rupee"></i>  <?php echo $products['Product']['price']; ?>
					</span> 
					<span class="off">(<?php echo ceil($dicount); ?>% off)</span>
					 <?php } else { ?>
					 <i class="fa fa-rupee"></i><?php echo $products['Product']['price']; ?> 
					 <?php } ?>
					</p>				 
                  </ul>
                  <div class="clear"></div>               
                </div>
				
				
              </div>
            </div>
			<?php endforeach; ?>                      
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } */ ?>


<div class="title1 section-t-space">
    <h4>special offer</h4>
    <h2 class="title-inner1">top collection</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="product-para">
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
        </div>
    </div>
</div>
<!-- Paragraph end -->


<!-- Product slider -->
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-4 product-m no-arrow">
				<?php foreach($homeproduct as $products):
 $frontImageurl1 = $this->Html->url('/images/products/'.$products['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$products['Product']['back_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
                   
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                            <div class="front">
                                <a href="<?php echo $products['Product']['slug']; ?>.html">
                                    <img src="<?php echo $frontImageurl1; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="<?php echo $products['Product']['slug']; ?>.html"><img src="<?php echo $backImageurl1 ; ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <h6><?php echo $products['Product']['name']; ?></h6>
                            </a>
                            <h4><?php echo $products['Product']['discounted_price']; ?> <del><?php echo $products['Product']['price']; ?></del></h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                   
                  <?php endforeach ;?>
                   
                </div>
            </div>
        </div>
    </div>
</section>






