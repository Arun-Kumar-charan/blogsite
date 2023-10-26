<footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-4 col-md-6">
                                <div class="footer-nav-links">
                                    <h5>Products</h5>
                                    <ul>
                                        <li><a href="#">Best Seller</a></li>
                                        <li><a href="#">Immune Multivitamin Blends</a></li>
                                        <li><a href="#">mmunity Shots</a></li>
                                        <li><a href="#">Energy + Immune Shots</a></li>
                                        <li><a href="#">New Products</a></li>
                                        <li><a href="#">Bundle & Save</a></li>
                                        <li><a href="#">Subscribe & Save</a></li>
                                        <li><a href="#">Wholesale</a></li> 
                                     </ul>
                                     <div class="spcl-note t-white"><p>Do Not Sell My Personal Information</p></div>
                               </div>
                         </div>
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-nav-links">
                                <h5>Enhanced Immune</h5>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Glossary</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Return & Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-nav-info t-white">
                                <h5>Sign Up For The EI Newsletter</h5>
                                <p>Receive special offers, discounts and educational updates</p>
                            </div>
                            <div class="subscribe-newsletter">
                                <form action="">
                                     <div class="formgrp">
                                         <input type="text" placeholder="Enter email address">
                                         <input type="submit" class="btn rounded" value="Submit">
                                     </div>
                                 </form>
                             </div>
                            <div class="footer-social-nav t-white">
                                <h5>Follow Us</h5>
                                <ul>
                                   <li>
                                      <a href="#"><i class="fab fa-facebook-f"></i> </a>
                                   </li>
                                   <li>
                                      <a href="#"><i class="fab fa-twitter"></i></a>
                                   </li>
                                   <li>
                                      <a href="#"><i class="fab fa-instagram"></i></a>
                                   </li>
                                   <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                 </li>
                              </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
               <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12 text-center">
                            <div class="footer-logo">
                                <a href="#"><img src="images/footer-logo.png" alt=""/></a>
                            </div>
                            <div class="footer-note t-white text-center"><h6>* these statements have not been evaluated by the food and drug administration. our products are not intended to diagnose, treat, cure, or prevent any disease.</h6></div>
                            <div class="footer-copyright text-center"><p>© 2020-2022 Enhanced Immune, LLC. ALL RIGHTS RESERVED.</p></div>
                        </div>
                   </div>
                </div>
            </div>
        </footer>


  <script>
jQuery(document).ready(function($){
    var timeoutMinus;
  jQuery('body').on('click', '.minus', function (e) {
    var $input = jQuery(this).parent().find('input.qty');
    var val = parseInt($input.val());
    var step = $input.attr('step');
    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
    if (val > 1) {
        $input.val(val - step).change();
    }

   if( timeoutMinus != undefined ) {
            clearTimeout(timeoutMinus)
        }
        timeoutMinus = setTimeout(function(){
            $('[name="update_cart"]').trigger('click');
        }, ); 
});
var timeoutPlus;
jQuery('body').one().on('click', '.plus', function (e) {
    var $input = jQuery(this).parent().find('input.qty');
    var val = parseInt($input.val());
    var step = $input.attr('step');
    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
    $input.val(val + step).change();

    if( timeoutPlus != undefined ) {
            clearTimeout(timeoutPlus)
        }
        timeoutPlus = setTimeout(function(){
          jQuery('[name="update_cart"]').trigger('click');
        }, ); 
});

var timeoutInput;
    jQuery('div.woocommerce').on('change', 'input.qty', function(){
        if( timeoutInput != undefined ) {
            clearTimeout(timeoutInput)
        }
        timeoutInput = setTimeout(function(){
          jQuery('[name="update_cart"]').trigger('click');
        }, );
    });

});
</script>

<script src="js/function.js"></script>

<?php wp_footer(); ?>

</body>

</html>