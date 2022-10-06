<?php ?>

<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 pro">
                    
                     <!-- Start Product List -->
            <div class="product-list-tab modify-tnm">
                <div class="container-fluid">
                    <div class="row rp-style-2">
                        <div class="product-list tab-content inner-sec">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="product-container-list rp-style-2">
                                    	<?php if($category > 0) { ?>	
					<?php 
				
				foreach ($category['ChildCategory'] as $product_item):
		       
			    $frontImageurl = $this->Html->url('/images/categories/'.$product_item['image']);
		       
                 $ddthumbImageurl = "images/no-image.jpg";
				?> 
                                    <div class="product-inner cp-style-2 mt-30 col-3">
                                        <a href="category/<?php echo $category['Category']['slug']; ?>/<?php echo $product_item['slug']; ?>.html">
                                            <div class="product-img b-img">
											  <?php 
				if($product_item['image'] != '') {
				?>
                <img alt="" src="<?php echo $frontImageurl; ?>">
				<?php } else { ?>
				 <img alt="" src="<?php echo $ddthumbImageurl; ?>">
				<?php } ?>
                </div>
                 </a>
                 <div class="product-text pt-10">
                  <div class="clear"></div>
                  <h6 class="product-name m-0">
                  <a title="<?php echo $product_item['name']; ?>" href="category/<?php echo $category['Category']['slug']; ?>/<?php echo $product_item['slug']; ?>.html"><?php echo $product_item['name']; ?></a>
                                            </h6>
                                        </div>
                                    </div>
									 <?php endforeach; ?>
									<?php } ?>
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