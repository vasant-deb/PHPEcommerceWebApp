<?php ?>

<div class="checkout-page">
   <div class="container">
      <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="checkout_details_area checkout-1 mt-50 clearfix">
               <div class="row">
                    <div class="col-md-6">
                     <h2>Create An Account</h2>
					 <hr>
                     <p>Register and save time!</p>					
                     <p>Register with us for future convenience:</p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Fast and easy check out <br>
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Easy access to your order history and status
                     </p>
                     <a href="customer/register" class="theme-btn btn-style-two proceed-btn">Register</a>
                  </div>
                
				
				  <div class="col-md-6">
                     <h2>Login</h2>
 					 <hr>
                     <p>Already registered? Please log in below:</p>
                        <form class="form-horizontal product-form" action="customer/login" method="post">
                        <div class="form-group">
                           <label for="email">Email address</label>
                           <input type="email" name="email" required="required" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" name="password" required="required" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-check">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Remember Me</label>
                           </div>
                        </div>
						 <small id="emailHelp" class="form-text text-muted">
							<p>
							<?php 
							$msg = $this->Session->flash(); 
							echo $msg; 							
							?> 
							</p>
						   </small>		
						<input type="hidden" name="mode" value="login">
						 <button  type="submit" class="cart-button text-uppercase mt-20">Login</button>
                       
                        <a class="forget_password" href="customer/forgot-password">Forget Password?</a>
                     </form>
					 </br>
                  </div>
               </div>
            </div>
         </div>
                   
      </div>
   </div>
</div>