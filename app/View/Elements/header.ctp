<?php ?>

<header class="main-header">
                <!-- top navigation -->
                <nav class="navbar top-nav">
                    <div class="container">
                        <div class="navbar-header hidden-xs">
                            <a class="navbar-brand" href="admin"> <img src="images/alpha/<?php echo substr(strtolower($company_name),0,1);?>.png" alt=""></a>
 <a class="navbar-brand" href="admin" style="padding-top:20px"><?php echo $company_name;?>    </a>                   
 </div>
                      
                        <!-- /.navbar-header -->
                        <ul class="nav navbar-top-links navbar-right">
                      
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                  <li><a href="admin/users/"> <i class="icon-user"></i>My Account</a> </li>
            <li><a href="admin/settings"> <i class="icon-gear"></i>Account Settings</a> </li>
            <li><a href="users/logout"> <i class="icon-signout"></i>Logout</a> </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li> <!-- /.dropdown -->
                        </ul> <!-- /.navbar-top-links -->
                    </div> <!-- /. container -->
                </nav> <!-- /. top navigation -->
                <!--  main navigation -->
                <nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav">
                    <!-- Start Top Search -->
                   
                    <!-- End Top Search -->
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand hidden-md hidden-lg" href="#brand"><img src="assets/dist/img/logo2.png" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
  <li class="dropdown">
                <a href="admin">
                <i class="fa fa-home"></i> <span>Home</span>
                </a>
              </li>
			  <li class="dropdown">
                <a href="admin/banners/index">
                <i class="fa fa-camera"></i> <span>Banners</span>
                </a>
              </li>
			  <li class="dropdown">
                <a href="admin/categories/index">
                <i class="fa fa-sitemap"></i> <span>Categories</span>
                </a>
              </li>
			  <li class="dropdown">
                <a href="admin/products/index">
                <i class="fa fa-th-large"></i> <span>Products</span>
                </a>
              </li>
			   <li class="dropdown">
                <a href="admin/sitepages/index">
                <i class="fa fa-files-o"></i> <span>Sitepages</span>
                </a>
              </li>
			   <li class="dropdown">
                <a href="admin/colors/index">
                <i class="fa fa-files-o"></i> <span>Colors</span>
                </a>
              </li>
			   <li class="dropdown">
                <a href="admin/sizes/index">
                <i class="fa fa-files-o"></i> <span>Sizes</span>
                </a>
              </li>
			   <li class="dropdown">
                <a href="admin/enquiries/index">
                <i class="fa fa-envelope"></i> <span>Enquiries </span>
                   </a>          
              </li>
			   <li class="dropdown"> <a href="admin/users"> <i class="fa fa-users"></i> <span>Users</span>
                </a>
              </li>
			   <li class="dropdown">
                <a href="<?php echo $this->webroot;?>admin/settings">
                <i class="fa fa-cog"></i> <span>Website Settings </span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="dropdown-menu">
            <li> <a href="<?php echo $this->webroot;?>admin/settings">Website Settings</a> </li>
			<li> <a href="<?php echo $this->webroot;?>admin/homepages">Home Page Items</a> </li>
 <li>
					<a href="<?php echo $this->webroot;?>admin/faqs">Faqs</a>
				</li>
            <li> <a href="<?php echo $this->webroot;?>admin/galleries">Galleries</a> </li>
            <li> <a href="<?php echo $this->webroot;?>admin/testimonials">Testimonials</a> </li>
            <li> <a href="<?php echo $this->webroot;?>admin/blogs">Blogs</a> </li>
          </ul>
              </li>
			   <li class="dropdown">
                <a href="users/logout">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
              </li>
			   <li class="dropdown">
                <a href="<?php echo $this->webroot;?>">
                <i class="fa fa-star-o"></i> <span>Website</span>
                </a>
              </li>
                             
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                   
                </nav> <!-- /. main navigation -->
                <div class="clearfix"></div>
            </header> <!-- /. main header -->
            <!-- /.content-wrapper -->
