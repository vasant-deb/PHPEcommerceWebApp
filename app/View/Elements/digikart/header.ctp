<?php /* ?>
<div class="wrapper">
   <header>
    <div class="header-top gray-bg">
      <div class="container">
          <div class="wel push-left">  <p><a href="customer/myaccount">Welcome :   <?php if($customer_data) { echo $customer_data['User']['first_name']. " ".$customer_data['User']['last_name']; } else { echo "mwoman"; } ?> !</a></p>  </div> 
        <div class="row pull-right">
        

          <div class="col-sm-4 hidden-xs">
            <div class="header-top-left">
              <ul class="header-top-style text-capitalize mr-25">
                <li><a href="customer/myaccount"><span class="mr-10">My Account</span><i class="fa fa-angle-down"></i></a>
                  <ul class="ul-style my-account box-shadow white-bg">
                    <li><a href="customer/myaccount">My Account</a></li>
                    <li><a href="shop/cart">My Cart</a></li>
                   
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="header-top-middle">
              <ul class="header-top-style">
                <?php if($this->Session->read('User.id')) { ?>
                
                 <li><a href="customer/logout"> Logout</a></li>
                </li>
			   <?php } else { ?>
			   <li> <a href="customer/login"> <span>Login or Register</span> </a>
			   <?php } ?>
                </li>
              </ul>
            </div>
          </div>
          
          
          <div class="col-md-4 col-sm-4 hidden-xs">
            <div class="service-inner mt-10"> <span class="service-img b-img"> <img alt="" src="mwomen/images/service.png"> </span> <span class="service-content ml-15"><strong>24*7 Support</strong>
              081308 48771</span> </div>
          </div>
       
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row header-middle-content">
         
          <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="header-logo text-center"> <a href="<?php echo $this->webroot; ?>"><img alt="" src="/images/<?php echo $sitelogo; ?>"></a> </div>
          </div>
          
          <div class="col-md-6">
              <nav class="primary-menu">
            <ul class="header-top-style text-uppercase">
              <li> <a href="<?php echo $this->webroot; ?>">home</a></li>
              <li><a href="about-us.html">about us</a></li>
              <li class="mega-container"> <a href="shop.html" class="menu-tag">Shop</a>
                <div class="megamenu-area ul-style box-shadow white-bg">
                 <?php foreach ($categories as $category_data): ?>	
                  <div class="mega-inner ptb-40">
                    <h6 class="mega-title text-uppercase"><strong><?php echo h($category_data['Category']['name']); ?></strong></h6>
                    <ul class="text-capitalize forge-list">
					<?php foreach ($category_data['children'] as $cproduct): ?>
                      <li><a href="category/<?php echo h($category_data['Category']['slug']); ?>/<?php echo h($cproduct['Category']['slug']); ?>.html"><?php echo $cproduct['Category']['name'];?></a>
							<ul class="list2">
							 <?php foreach ($cproduct['ChildCategory'] as $product): ?>
								  <li><a href="category/<?php echo h($cproduct['Category']['slug']); ?>/<?php echo $product['slug']; ?>.html"><?php echo $product['name'];?></a></li>
								<?php endforeach; ?>
							</ul>
					  
					  </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                 <?php endforeach; ?>
                </div>
              </li>
             <li><a href="fanbook.html">FANBOOK</a></li>
              <li><a href="contact-us.html">Contact us</a></li>
            </ul>
          </nav>
          </div>
        
          	<div class="col-sm-3 col-xs-6">
           
                <form action="/products/search"  id="UserSearchForm" method="get" class="search">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
          </div>
        <?php  echo $this->element('mwomen/homecart'); ?>
         
      
        </div>
      </div>
    </div>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul>
                  <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
                  <li><a href="about-us.html">about</a></li>
                  <li><a href="womans.html">woman</a>
				   
                    <ul>
					<?php foreach ($categories as $category): ?>	
                      <li><a href="category/<?php echo h($category['Category']['slug']); ?>/<?php echo h($category['Category']['slug']); ?>.html"><?php echo h($category['Category']['name']); ?></a>
                        <ul>
						<?php foreach ($category['children'] as $categorys): ?>
                          <li><a href="category/<?php echo $categorys['Category']['slug'];?>/<?php echo h($categorys['Category']['slug']); ?>.html"><?php echo h($categorys['Category']['name']); ?></a></li>
                     
                      <?php endforeach; ?>
                        </ul>
                      </li>
                      <?php endforeach; ?>
                    </ul>
					
                  </li> 
                  <li><a href="fanbook.html">FANBOOK</a></li>
                  <li><a href="contact-us.html">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu End -->
  </header>
  <?php */ ?>
  
  <!-- header start -->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li><a href="customer/myaccount">Welcome :   <?php if($customer_data) { echo $customer_data['User']['first_name']. " ".$customer_data['User']['last_name']; } else { echo "Digikart"; } ?> !</a></p>  </a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +91-9818410294</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="header-dropdown">
                        <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i> My Account
                            <ul class="onhover-show-div">
                                <li><a href="customer/login" data-lng="en">Login</a></li>
                                <?php if($customer_data) {?> <li><a href="customer/logout" data-lng="es">Logout</a></li><?php }?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar">
                            <a href="javascript:void(0)" onclick="openNav()">
                                <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i></div>
                            </a>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                <nav>
                                    <div onclick="closeNav()">
                                        <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
                                    </div>
                                    <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                        <li> <a href="#">clothing</a>
                                            <ul class="mega-menu clothing-menu">
                                                <li>
                                                    <div class="row m-0">
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>women's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">dresses</a></li>
                                                                    <li><a href="#">skirts</a></li>
                                                                    <li><a href="#">westarn wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                    <li><a href="#">sport wear</a></li>
                                                                </ul>
                                                                <h5>men's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">sports wear</a></li>
                                                                    <li><a href="#">western wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>accessories</h5>
                                                                <ul>
                                                                    <li><a href="#">fashion jewellery</a></li>
                                                                    <li><a href="#">caps and hats</a></li>
                                                                    <li><a href="#">precious jewellery</a></li>
                                                                    <li><a href="#">necklaces</a></li>
                                                                    <li><a href="#">earrings</a></li>
                                                                    <li><a href="#">wrist wear</a></li>
                                                                    <li><a href="#">ties</a></li>
                                                                    <li><a href="#">cufflinks</a></li>
                                                                    <li><a href="#">pockets squares</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <a href="#" class="mega-menu-banner"><img src="digikart/assets/images/mega-menu/fashion.jpg" alt="" class="img-fluid blur-up lazyload"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">bags</a>
                                            <ul>
                                                <li><a href="#">shopper bags</a></li>
                                                <li><a href="#">laptop bags</a></li>
                                                <li><a href="#">clutches</a></li>
                                                <li> <a href="#">purses</a>
                                                    <ul>
                                                        <li><a href="#">purses</a></li>
                                                        <li><a href="#">wallets</a></li>
                                                        <li><a href="#">leathers</a></li>
                                                        <li><a href="#">satchels</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">footwear</a>
                                            <ul>
                                                <li><a href="#">sport shoes</a></li>
                                                <li><a href="#">formal shoes</a></li>
                                                <li><a href="#">casual shoes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">watches</a></li>
                                        <li> <a href="#">Accessories</a>
                                            <ul>
                                                <li><a href="#">fashion jewellery</a></li>
                                                <li><a href="#">caps and hats</a></li>
                                                <li><a href="#">precious jewellery</a></li>
                                                <li> <a href="#">more..</a>
                                                    <ul>
                                                        <li><a href="#">necklaces</a></li>
                                                        <li><a href="#">earrings</a></li>
                                                        <li><a href="#">wrist wear</a></li>
                                                        <li> <a href="#">accessories</a>
                                                            <ul>
                                                                <li><a href="#">ties</a></li>
                                                                <li><a href="#">cufflinks</a></li>
                                                                <li><a href="#">pockets squares</a></li>
                                                                <li><a href="#">helmets</a></li>
                                                                <li><a href="#">scarves</a></li>
                                                                <li> <a href="#">more...</a>
                                                                    <ul>
                                                                        <li><a href="#">accessory gift sets</a></li>
                                                                        <li><a href="#">travel accessories</a></li>
                                                                        <li><a href="#">phone cases</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">belts & more</a></li>
                                                        <li><a href="#">wearable</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">house of design</a></li>
                                        <li> <a href="#">beauty & personal care</a>
                                            <ul>
                                                <li><a href="#">makeup</a></li>
                                                <li><a href="#">skincare</a></li>
                                                <li><a href="#">premium beaty</a></li>
                                                <li> <a href="#">more</a>
                                                    <ul>
                                                        <li><a href="#">fragrances</a></li>
                                                        <li><a href="#">luxury beauty</a></li>
                                                        <li><a href="#">hair care</a></li>
                                                        <li><a href="#">tools & brushes</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">home & decor</a></li>
                                        <li><a href="#">kitchen</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <a href="<?php echo $this->webroot; ?>"><img src="images/<?php echo $sitelogo; ?>" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>">Home</a>
                                       
									</li>
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                   
                                    </li>
                                    
                                    <li class="mega" id="hover-cls"><a href="#">features
                                        <div class="lable-nav">new</div>
                                    </a>
                                        <ul class="mega-menu full-mega-menu">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>portfolio</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="grid-2-col.html">portfolio grid 2</a></li>
                                                                        <li><a href="grid-3-col.html">portfolio grid 3</a></li>
                                                                        <li><a href="grid-4-col.html">portfolio grid 4</a></li>
                                                                        <li><a href="masonary-2-grid.html">mesonary grid 2</a></li>
                                                                        <li><a href="masonary-3-grid.html">mesonary grid 3</a></li>
                                                                        <li><a href="masonary-4-grid.html">mesonary grid 4</a></li>
                                                                        <li><a href="masonary-fullwidth.html">mesonary full width</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>add to cart</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="nursery.html">cart modal popup</a></li>
                                                                        <li><a href="vegetables.html">qty. counter <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="bags.html">cart top</a></li>
                                                                        <li><a href="shoes.html">cart bottom</a></li>
                                                                        <li><a href="watch.html">cart left</a></li>
                                                                        <li><a href="tools.html">cart right</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>theme elements</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="element-title.html">title</a></li>
                                                                        <li><a href="element-banner.html">collection banner</a></li>
                                                                        <li><a href="element-slider.html">home slider</a></li>
                                                                        <li><a href="element-category.html">category</a></li>
                                                                        <li><a href="element-service.html">service</a></li>
                                                                        <li><a href="element-image-ratio.html">image size ratio <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>product elements</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li class="up-text"><a href="element-productbox.html">product box<span>10+</span></a></li>
                                                                        <li><a href="element-product-slider.html">product slider</a></li>
                                                                        <li><a href="element-no_slider.html">no slider</a></li>
                                                                        <li><a href="element-mulitiple_slider.html">multi slider</a></li>
                                                                        <li><a href="element-tab.html">tab</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template   </h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="email-order-success.html">order success</a></li>
                                                                        <li><a href="email-order-success-two.html">order success 2</a></li>
                                                                        <li><a href="email-template.html">email template</a></li>
                                                                        <li><a href="email-template-two.html">email template 2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                   
                                    <li>
                                        <a href="blog.html">blog</a>
                                
                                    </li>
									<li>
                                        <a href="contact-us.html">Contact Us</a>
                                
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="digikart/assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-setting">
                                        <div><img src="digikart/assets/images/icon/setting.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-settings"></i></div>
                                        <div class="show-div setting">
                                            <h6>language</h6>
                                            <ul>
                                                <li><a href="#">english</a></li>
                                                <li><a href="#">french</a></li>
                                            </ul>
                                            <h6>currency</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">euro</a></li>
                                                <li><a href="#">rupees</a></li>
                                                <li><a href="#">pound</a></li>
                                                <li><a href="#">doller</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div><img src="digikart/assets/images/icon/cart.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></div>
                                       	<?php  echo $this->element('digikart/homecart'); ?> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

  

  
  
  
