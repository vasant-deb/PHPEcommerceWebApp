<?php ?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>contact</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $this->webroot; ?>">Home</a></li>
                        <li class="breadcrumb-item active">contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="contact-page section-b-space">
    <div class="container">
        <div class="row section-b-space">
            <div class="col-lg-7 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.811957341231!2d25.45976406005396!3d36.3940974010114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550912388321"  allowfullscreen></iframe>
            </div>
            <div class="col-lg-5">
                <div class="contact-right">
                    <ul>
                        <li>
                            <div class="contact-icon"><img src="digikart/assets/images/icon/phone.png" alt="Generic placeholder image">
                                <h6>Contact Us</h6></div>
                            <div class="media-body">
                                <p><?php echo $company_phone; ?></p>
                                <p><?php echo $company_phone2; ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h6>Address</h6></div>
                            <div class="media-body">
                                <p><?php echo $company_address; ?></p>
                                
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><img src="digikart/assets/images/icon/email.png" alt="Generic placeholder image">
                                <h6>Email</h6></div>
                            <div class="media-body">
                                <p><?php echo $company_email; ?></p>
                                <p><?php echo $company_email2; ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                <h6>Website</h6></div>
                            <div class="media-body">
                                <p>www.digidiya.com</p>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="theme-form" method="post"  action="enquiries/add">
				 <p id="successmsg"></p>
		  <input type="hidden" name="enquiry_for" value="Enquiry For Contact Us">
				<input type="hidden" name="page_url" value="<?php echo $this->Html->url( null, true ); ?>">	
				
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Your name" required="">
                        </div>
                       <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                        </div>
						<div class="col-md-6">
                            <label for="email">Address</label>
                            <input type="text" class="form-control" name="address" id="email" placeholder="Address" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">Phone number</label>
                           <input type="text"  class="form-control" name="phone" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 43 || event.charCode == 45 || event.charCode == 0" minlength="10" maxlength="15" placeholder="Phone" required>
                        </div>
                        
                        <div class="col-md-12">
                            <label for="review">Write Your Message</label>
                            <textarea class="form-control" name="message" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-solid" type="submit">Send Your Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->

				

			
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script> 
 

<script>
$(function() {
	$("#contact-form form").on('submit', function(event) {
		
		var $form = $(this);		
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function() {
 			$('#successmsg').html('Thank you for your enquiry with us, <br> Our representative will get in touch with you soon.');
		 	$('#successmsg').addClass(' alert alert-success');
						 			 
			 $("#successmsg").show();
			 setTimeout(function() { $("#successmsg").hide(); }, 15000);
			 $('#contact-form form')[0].reset();			 
  			
			}
		});
		event.preventDefault();		 
	});
});
</script>