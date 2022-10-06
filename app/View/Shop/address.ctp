<?php echo $this->App->js(); ?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php echo $this->Html->script(array('shop_address.js'), array('inline' => false)); ?>
    <?php echo $this->fetch('script'); ?>

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Check-out</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $this->webroot; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
			 <?php echo $this->Form->create('Order'); ?>
               
                    <div class="row">
					<?php 
            $msg = $this->Session->flash(); 
            echo $msg; 							
            ?>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <div class="row check-out">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name</div>
									
                     <?php echo $this->Form->input('first_name', array('class' => 'form-control', 'value' => $customer_data['User']['first_name'])); ?>
 
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name</div>
                                 <?php echo $this->Form->input('last_name', array('class' => 'form-control', 'value' => $customer_data['User']['last_name'])); ?>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                       <?php echo $this->Form->input('phone', array('class' => 'form-control','value' => $customer_data['User']['phone'])); ?>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                   <?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email address', 'value' => $customer_data['User']['email'])); ?>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country</div>
                                     <select name="data[Order][billing_country]" id="OrderBillingCountry" class="form-control">
                        <option value="">Select Country</option>
                        <?php foreach ($countries as $item): ?>
                        <option value="<?php echo $item['Country']['name'];?>" <?php if($item['Country']['name'] == $customer_data['User']['country']) { echo "selected"; } ?>><?php echo $item['Country']['name'];?></option>
                        <?php endforeach; ?>
                     </select>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address</div>
                                     <?php echo $this->Form->input('billing_address', array('class' => 'form-control', 'label' => 'Address Line 1', 'value' => $customer_data['User']['address'])); ?>
                                </div>
								  
								 <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address2</div>
                                     <?php echo $this->Form->input('billing_address2', array('class' => 'form-control','value' => $customer_data['User']['address2'])); ?>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Town/City</div>
									 <?php echo $this->Form->input('billing_city', array('class' => 'form-control','value' => $customer_data['User']['city'])); ?>
                                  
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">State</div>
                                      <?php echo $this->Form->input('billing_state', array('class' => 'form-control','value' => $customer_data['User']['state'])); ?>
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Postal Code</div>
                                      <?php echo $this->Form->input('billing_zip', array('class' => 'form-control', 'label' => 'Zip / Postal Code','value' => $customer_data['User']['zipcode'])); ?>
                                </div>
                                
                            </div>
                        </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Shiiping Details</h3></div>
                            <div class="row check-out">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name</div>
									
                    <?php echo $this->Form->input('shipping_first_name', array('class' => 'form-control')); ?>
 
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name</div>
                                  <?php echo $this->Form->input('shipping_last_name', array('class' => 'form-control')); ?>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                      <?php echo $this->Form->input('shipping_phone', array('class' => 'form-control')); ?>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <?php echo $this->Form->input('shipping_email', array('class' => 'form-control', 'label' => 'Email address')); ?>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country</div>
                                     <select name="data[Order][shipping_country]" id="OrderShippingCountry" class="form-control">
                        <option value="">Select Country</option>
                        <?php foreach ($countries as $item): ?>
                        <option value="<?php echo $item['Country']['name'];?>"  <?php if($item['Country']['name'] == @$this->data['Order']['shipping_country']) { echo "selected"; } ?>><?php echo $item['Country']['name'];?></option>
                        <?php endforeach; ?>
                     </select>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address</div>
                                  <?php echo $this->Form->input('shipping_address', array('class' => 'form-control', 'label' => 'Address Line 1')); ?>
                                </div>
								  
								 <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address2</div>
                                  <?php echo $this->Form->input('shipping_address2', array('class' => 'form-control')); ?>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Town/City</div>
							      <?php echo $this->Form->input('shipping_city', array('class' => 'form-control')); ?>
                                  
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">State</div>
                                      <?php echo $this->Form->input('shipping_state', array('class' => 'form-control')); ?>
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Postal Code</div>
                             <?php echo $this->Form->input('shipping_zip', array('class' => 'form-control', 'label' => 'Zip / Postal Code')); ?>
                                </div>
                                
                            </div>
                        </div>
						  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="check-box">
               <?php echo $this->Form->input('sameaddress', array('div' => 'false', 'type' => 'checkbox', 'label' => '&nbspCopy Billing Address to Shipping Address')); ?>
            </div>
         </div>
         <div class="form-group col-md-12 col-sm-12 col-xs-12">
		  
				 <button value="register" type="submit" class="cart-button text-uppercase mt-20">Continue</button>			
          
         </div>
         <?php echo $this->Form->end(); ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->




     