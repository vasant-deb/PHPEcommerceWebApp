<?php ?>

<div class="checkout-page">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="checkout_details_area checkout-1 mt-50 clearfix">
               <div class="row">
                  <div class="col-md-9">

                     <h2>Update Profile</h2>
                     <hr> 
					<div class="contactinformation">
					<div class="row">
					<div class="col-lg-6">
					<p class="heading">Contact Information</p>
					<p><?php echo $customer_data['User']['first_name'];?></p>
					<p><?php echo $customer_data['User']['email'];?></p>
					<p><a href="#">Change Password</a></p>
					</div>
					<div class="col-lg-6">
					<p class="heading">Newsletters</p>
					
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-6">
					<?php 
 $customer_address = array( $customer_data['User']['address'],
					$customer_data['User']['address2'],
					$customer_data['User']['city'],
					 $customer_data['User']['state']);
$customer_address = implode('<br>',array_filter($customer_address));					 ?>
					
					<p class="heading">Details Billing Address</p>
					<p><?php echo $customer_address; ?></p>
					</div>
					<div class="col-lg-6">
					<p class="heading">Details Billing Address</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
					</div>
					</div><!--contactinformation-->



					 
                      
                  </div>
                  <div class="col-md-3">
				  <?php echo $this->element('mwomen/myaccount_menu'); ?>				  
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
 