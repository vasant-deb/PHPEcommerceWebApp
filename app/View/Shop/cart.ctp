<?php ?>
<?php echo $this->set('title_for_layout', 'Shopping Cart'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php $this->Html->addCrumb('Shopping Cart'); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->Html->script(['cart.js'], ['inline' => false]); ?>
<?php echo $this->fetch('script'); ?>

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>cart</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active">cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-b-space">

    <div class="container">
	
        <div class="row">
            <div class="col-sm-12">
			<?php echo $this->Form->create(NULL, ['url' => ['controller' => 'shop', 'action' => 'cartupdate']]); ?>
                                    <?php if(empty($shop['OrderItem'])) : ?>
                                    Shopping Cart is empty.
                                    <?php else: ?>
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
						<th scope="col">size/color</th>
						
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    <tbody>
					 <?php $tabindex = 1; ?>
                                          <?php foreach ($shop['OrderItem'] as $key => $item): ?>
                    <tr>
                        <td>
                            <a href="#"><img src="images/products/<?=$item['Product']['image'];?>" alt=""></a>
                        </td>
                        <td><a href="<?php echo $item['Product']['slug'];?>.html"><?php echo $item['Product']['name'];?></a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><?php echo $item['price']; ?></h2></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a class="remove" id="<?php echo $key; ?>"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2><?php echo $item['price']; ?></h2></td>
							<?php
												
                                                   $mods = 0;
                                                   
                                                   $product_size  = $item['size'];
                                                   $product_color = $item['color'];
                                                   
                                                   if(isset($item['Product']['productmod_name'])) :
                                                   $mods = $item['Product']['productmod_id'];
												   
                                                   ?>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
																		<?php echo $this->Form->input('quantity-' . $key, ['div' => false, 'type' => 'tel', 'class' => 'form-control input-number', 'label' => false, 'size' => 2, 'maxlength' => 2, 'tabindex' => $tabindex++, 'data-id' => $item['Product']['id'], 'data-mods' => $mods, 'data-product_size' => $product_size, 'data-product_color' => $product_color, 'value' => $item['quantity']]); ?>	
                                   
                                </div>
                            </div>
							<small><?php echo $item['Product']['productmod_name']; ?></small>
                                                <?php endif; ?>
                                                
                                               
                                              
                        </td>
						
						  <td><?php echo $item['size'];?>/<?php echo $item['color'];?></td>
                                               
                                              
                                             
                                                
                                               
						
						
						
						
                        <td><a class="remove" id="<?php echo $key; ?>"><i class="ti-close"></i></a></td>
						
                        <td>
                            <h2 class="td-color"> <?php echo $shop['Order']['total']; ?></h2></td>
                    </tr>
					<?php endforeach ;?>
                    </tbody>
                  
			  </table>
			    <?php echo $this->Form->end(); ?>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h2> <?php echo $shop['Order']['total']; ?></h2></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="#" class="btn btn-solid">continue shopping</a></div>
            <div class="col-6"><a href="shop/checkout" class="btn btn-solid">check out</a></div>
        </div>
		  <?php endif; ?>
    </div>
</section>
<!--section end-->

                             