<?php ?>

        <div class="register-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <h4 class="text-uppercase mb-20"><strong>REGISTERED CUSTOMERS</strong></h4>
                               <form class="form-horizontal product-form" action="" method="post">
                                    <div class="login-account p-30 box-shadow">
                                        <p>If you have an account with us, Please log in.</p>
                                       <input type="email" name="email" required="required" placeholder="Email Address" id="email" aria-describedby="emailHelp" placeholder="Enter email">
									  <input type="password" name="password" required="required"  id="password" placeholder="Password">
                                       <p>
							<?php 
							$msg = $this->Session->flash(); 
							echo $msg; 							
							?> 
							</p>
                                        <p><small><a href="customer/forgot-password" class="cart-size-value">Forgot our password?</a></small></p>
										<p><a href="customer/register" class="cart-size-value">Customer Register</a></p>
										
										<input type="hidden" name="mode" value="login">
                                        <button type="submit" value="register" class="cart-button text-uppercase">login</button>
                                    </div>
                                </form>                                
                            </div>
                        </div>
     <!--new div--->                  
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <h4 class="text-uppercase mb-20"><strong>Create An Account</strong></h4>
                                       
                     <p>Register and save time!</p>					
                     <p>Register with us for future convenience:</p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Fast and easy check out <br>
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Easy access to your order history and status
                     </p>
                     <a href="customer/register" class="cart-button text-uppercase">Register</a>  
                            </div>
                        </div>
                        
                        
                    </div>
                    </div>
            </div>
     
