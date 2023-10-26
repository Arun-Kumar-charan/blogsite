
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/AkiraExpanded-SuperBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<?php wp_head(); ?>
<title><?php wp_title()?></title>
</head>
<body <?php body_class(); ?>>

        <!--header section-->
        <header class="header-section">
            <div class="main-header-container">
                <div class="container-fluid">
                    <div class="inner-panel">
                        <div class="left-panel">
                            <div class="logo-holder">
                                <a href="index.html">
                                    <img src="<?php echo get_theme_value('driverite_header_logo');?>"class="logo" alt="" />
                                </a>
                            </div>
                        </div>

                        <div class="right-panel">
                            <div class="menu-holder">
                                <div class="main-menu">
                                    <ul>      
                                    <?php
                wp_nav_menu(array('theme_location'=>'primary'));
           ?>                                  
                                    </ul>
                                </div>
                            </div>
                            <div class="search-login"><a href="#" class="" id="search-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/search.png" alt="" /> </a></div>
                            <div class="cart-icon">
                            <?php $items_count=WC()->cart->get_cart_contents_count(); ?>    
                         <a href="<?php echo site_url();?>/cart/" class=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/cart.png" alt="" />  <span class="cart-item"> <?php echo $items_count ? $items_count :'0';?> </span></a></div>
                            <div class="account-icon"><a href="<?php echo site_url();?>/profile/" class=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/account.png" alt="" /> </a></div>
                            <div class="hamburger-nav">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div id="search-menu">
                                <div class="wrapper">
                                  <form id="form" action="#" method="">
                                    <input id="popup-search" type="text" name="u" placeholder="Search..."/>
                                    <button id="popup-search-button" type="submit" name="search"><img src="images/search-white.png" alt="" /></button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container">
                <div class="inner-container">
                    <div class="mobile-top-section">
                        <form id="form" action="#" method="">
                            <input id="mobile-search" type="text" name="mu" placeholder="Search"/>
                            <button id="mobile-search-button" type="submit" name="search"><img src="images/search.png" alt="" /></button>
                        </form>
                    </div>
                    <div class="mobile-menu">
                           <ul>      
                                <li class=""><a href="#">About Us</a></li>
                                <li class=""><a href="#">Services</a></li>
                                <li class=""><a href="#">Network</a></li>
                                <li class=""><a href="#">News</a></li>
                                <li class=""><a href="#">Blog</a></li>    
                          </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--header section-->


<!--header sction-->
<script>

jQuery(document).ready(function() {
	jQuery(".search-box-field").click(function() {
	   jQuery(".search-box").toggle();
     jQuery(this).toggleClass("active-search")
	 });
});

</script>
