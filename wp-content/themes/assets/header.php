<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FancyShop - Ecommerce Bootstrap Template</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet">  -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">  
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/animate.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/meanmenu.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/venobox.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/fonts/fontawesome-pro/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/bootstrap.min.css" />  
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/responsive.css" /> 
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/customsize.css" /> 
</head>
<?php wp_head(); ?>
    <body <?php echo body_class( '' ); ?>>
    
        <!--  Preloader  -->
        
        <!-- <div class="preloader">
            <div class="status-mes">
                <div class="bigSqr">
                    <div class="square first"></div>
                    <div class="square second"></div>
                    <div class="square third"></div>
                    <div class="square fourth"></div>
                </div>
                <div class="text_loading text-center">loading</div>
            </div>
        </div> -->
        
        <!--  Start Header  -->
        <header id="header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="hdr_tp_left">
                                <!-- <div class="call_area">
                                    <span class="single_con_add"><i class="fa fa-phone"></i> +0123456789</span>
                                    <span class="single_con_add"><i class="fa fa-envelope"></i> example@gmail.com</span>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6">
                            <ul class="hdr_tp_right text-right">
                                <!-- <li class="account_area"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-lock"></i> My Account</a></li>
                                <li class="lan_area"><a href="#"><i class="fa fa-language "></i> Language <i class="fa fa-caret-down"></i></a>
                                    <ul class="csub-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Portuguese</a></li>
                                    </ul>
                                </li>
                                <li class="currency_area"><a href="#"><i class="fa fa-gg "></i> $USD <i class="fa fa-caret-down"></i></a>
                                    <ul class="csub-menu">
                                        <li><a href="#">€Euro</a></li>
                                        <li><a href="#">৳BDT</a></li>       
                                    </ul>                               
                                </li> -->
                                <li class="pr-1"><i class="fab fa-facebook-f" aria-hidden="true"></i></li>
                                <li class="pr-1"><i class="fab fa-instagram" aria-hidden="true"></i></li>
                                <li class="pr-1"><i class="fab fa-youtube" aria-hidden="true"></i></li>
                                <li class="ml-3"><i class="fa fa-phone"></i>&nbsp&nbsp +0123456789</li>
                                <li><i class="fa fa-envelope"></i>&nbsp&nbsp example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!--  HEADER START  -->
            
            <div class="header_btm_area">
                <div class="container-fluid">
                    <div class="row">      
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <a class="logo" href="<?php echo esc_url(home_url('')); ?>"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-79road.png"></a> 
                            <div class="menu_wrap text-right">
                                <div class="main-menu">
                                    <nav>
                                        <?php
                                            $args = array(
                                                'theme_location' => 'main-menu',
                                                'container' => '',
                                                'menu_id' => '',
                                                'menu_class' => 'nav navbar-nav',
                                            );
                                            wp_nav_menu( $args );
                                        ?>
                                        
                                    </nav>
                                </div> <!--  End Main Menu -->                  

                                <div class="mobile-menu text-right ">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">home</a></li>                                                                      
                                            <li><a href="#">Shop</a>
                                                <!-- Sub Menu -->
                                                <ul>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Men</a>                                                                     
                                                <ul>
                                                    <li><a href="#">Blazers</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Collections</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                    <li><a href="#">jens pant’s</a></li>
                                                    <li><a href="#">sports shoes</a></li>
                                                </ul>                                                                               
                                            </li>
                                            
                                            <li><a href="#">Women</a>
                                                <ul>
                                                    <li><a href="#">gagets</a></li>
                                                    <li><a href="#">laptop</a></li>
                                                    <li><a href="#">mobile</a></li>
                                                    <li><a href="#">lifestyle</a></li>
                                                    <li><a href="#">jens pant’s</a></li>
                                                    <li><a href="#">sports items</a></li>
                                                </ul>
                                            </li>
                                        
                                            <li><a href="#">pages</a>                                           
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">contact</a></li>
                                        </ul>
                                    </nav>
                                </div> <!--  End mobile-menu -->
                                
                                <div class="right_menu">
                                    <ul class="nav justify-content-end">
                                        <li>
                                            <div class="search_icon">
                                                <i class="fa fa-search search_btn" aria-hidden="true"></i>
                                                <div class="search-box">
                                                    <form action="<?php echo esc_url(home_url('')); ?>" method="get">
                                                        <div class="input-group">
                                                           <input type="text" name="s" id="s" class="form-control"  placeholder="Tìm kiếm..."/>
                                                          
                                                            <button type="submit" id="searchsubmit" class="btn btn-default"><i class="fa fa-search"></i></button>         
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="cart_menu_area">
                                                <div class="cart_icon">
                                                    <a href="#"><i class="fa fa-shopping-bag " aria-hidden="true"></i></a>
                                                    <span class="cart_number">2</span>
                                                </div>
                                                
                                                
                                                <!-- Mini Cart Wrapper -->
                                                <div class="mini-cart-wrapper">
                                                    <!-- Product List -->
                                                    <div class="mc-pro-list fix">
                                                        <div class="mc-sin-pro fix">
                                                            <a href="#" class="mc-pro-image float-left"><img src="<?php echo bloginfo('template_directory');?>/img/mini-cart/1.jpg" alt="" /></a>
                                                            <div class="mc-pro-details fix">
                                                                <a href="#">This is Product Name</a>
                                                                <span>1x$25.00</span>
                                                                <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="mc-sin-pro fix">
                                                            <a href="#" class="mc-pro-image float-left"><img src="<?php echo bloginfo('template_directory');?>/img/mini-cart/2.jpg" alt="" /></a>
                                                            <div class="mc-pro-details fix">
                                                                <a href="#">This is Product Name</a>
                                                                <span>1x$25.00</span>
                                                                <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Sub Total -->
                                                    <div class="mc-subtotal fix">
                                                        <h4>Subtotal <span>$50.00</span></h4>                                               
                                                    </div>
                                                    <!-- Cart Button -->
                                                    <div class="mc-button">
                                                        <a href="#" class="checkout_btn">checkout</a>
                                                    </div>
                                                </div>                                          
                                            </div>  
                                            
                                        </li>
                                    </ul>
                                </div>                          
                            </div>
                        </div><!--  End Col -->                                     
                    </div>
                </div>
            </div>
        </header>
        <!--  End Header  -->