<?php echo $this->Html->script(array('shop_address.js'), array('inline' => false)); ?><?php echo $this->Form->create('Order'); ?>
<?php $order_data = $shop;?> 
<?php echo $this->set('title_for_layout', 'Shopping Cart'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php $this->Html->addCrumb('Shopping Cart'); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('script'); ?>


<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Review Your Order</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $this->webroot; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Review Your Order</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>		
<div class="shopping-cart-page">
   <div class="container">
   
   
      <?php echo $this->Form->create(NULL, ['url' => ['controller' => 'shop', 'action' => 'cartupdate']]); ?>
      <?php if(empty($shop['OrderItem'])) : ?>
      Shopping Cart is empty.
      <?php else: ?>
					<h5> <?php 
                         $msg = $this->Session->flash(); 
                         echo $msg; 
                         ?> 
						 </h5>
					  
      <!--Shopping Cart-->
      <section>
        
          <div class="row">
            <div class="col col-sm-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Customer Info</h3>
                  </div>
                  <div class="panel-body"> <?php echo $order_data['Order']['first_name'];?> <?php echo $order_data['Order']['last_name'];?><br />
                     Email: <?php echo $order_data['Order']['email'];?><br />
                     Phone: <?php echo $order_data['Order']['phone'];?><br>
                     &nbsp; 
                  </div>
               </div>
            </div>
            <div class="col col-sm-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Billing Address</h3>
                  </div>
                  <div class="panel-body"> <?php echo $order_data['Order']['first_name'];?> <?php echo $order_data['Order']['last_name'];?><br />
                     <?php echo $order_data['Order']['billing_address'];?><br />
                     <?php echo $order_data['Order']['billing_address2'];?><br />
                     <?php echo $order_data['Order']['billing_city'];?>, <?php echo $order_data['Order']['billing_state'];?> <?php echo $order_data['Order']['billing_zip'];?><br />
                  </div>
               </div>
            </div>
            <div class="col col-sm-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Shipping Address</h3>
                  </div>
                  <div class="panel-body"> <?php echo $order_data['Order']['first_name'];?> <?php echo $order_data['Order']['last_name'];?><br />
                     <?php echo $order_data['Order']['shipping_address'];?><br />
                     <?php echo $order_data['Order']['shipping_address2'];?><br />
                     <?php echo $order_data['Order']['shipping_city'];?>, <?php echo $order_data['Order']['shipping_state'];?> <?php echo $order_data['Order']['shipping_zip'];?><br />
                  </div>
               </div>
            </div>
         </div>
         <!--Cart Column-->
		 <section class="cart-section section-b-space">
          <div class="container">
	
        <div class="row">
            <div class="col-sm-12">
			   
			                   <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
						<th scope="col">size</th>
						
                        <th scope="col">color</th>
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
						
						  <td><?php echo $item['size'];?></td>
                                               
                                              
                                             
                                                
                                               
						
						
						
						
                        <td><?php echo $item['color'];?></td>
						
                        <td>
                            <h2 class="td-color"> <?php echo $shop['Order']['total']; ?></h2></td>
                    </tr>
					<?php endforeach ;?>
                    </tbody>
                  
			  </table>
			   
               </div>
            </div>
         </div>
		 </section>
         <!--End Cart Column-->
       
         <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="continue-column pull-left clearfix">
                  <a href="<?php echo $this->webroot;?>shop/cart" class="cart-button">Back to Cart</a>
               </div>
               <div class="continue-column pull-right clearfix">
                 <a href="shop/orderpayment" class="cart-button">Proceed to Payment</a>
				<!--  <button class="theme-btn btn-style-two proceed-btn">Complete Your Order</button> -->
               </div>
            </div>
         </div>
		 </br>
		   <?php echo $this->Form->end(); ?>
		   
      </section>
      <?php endif; ?>
   </div>
</div>