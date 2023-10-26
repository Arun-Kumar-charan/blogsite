<?php

/*****************************************
 Weaver's Web Functions & Definitions 
*****************************************/
$functions_path = get_template_directory().'/functions/';
// $post_type_path = get_template_directory().'/inc/post-types/';
/*--------------------------------------*/
/* Optional Panel Helper Functions
/*--------------------------------------*/
require_once($functions_path.'admin-functions.php');
require_once($functions_path.'admin-interface.php');
require_once($functions_path.'theme-options.php');
function weaversweb_ftn_wp_enqueue_scripts(){
    if(!is_admin()){
        wp_enqueue_script('jquery');
        if(is_singular()and get_site_option('thread_comments')){
            wp_print_scripts('comment-reply');
			}
		}
	}
add_action('wp_enqueue_scripts','weaversweb_ftn_wp_enqueue_scripts');
function weaversweb_ftn_get_option($name){
    $options = get_option('weaversweb_ftn_options');
    if(isset($options[$name]))
        return $options[$name];
	}
function weaversweb_ftn_update_option($name, $value){
    $options = get_option('weaversweb_ftn_options');
    $options[$name] = $value;
    return update_option('weaversweb_ftn_options', $options);
	}
function weaversweb_ftn_delete_option($name){
    $options = get_option('weaversweb_ftn_options');
    unset($options[$name]);
    return update_option('weaversweb_ftn_options', $options);
	}
function get_theme_value($field){
	$field1 = weaversweb_ftn_get_option($field);
	if(!empty($field1)){
		$field_val = $field1;

		}
	return	$field_val;
	}
/*--------------------------------------*/
/* Post Type Helper Functions
/*--------------------------------------*/

// require_once($post_type_path.'testimonials.php');
// require_once($post_type_path.'teams.php');
// require_once($post_type_path.'projects.php');
// require_once($post_type_path.'perks.php');

/*--------------------------------------*/
/* Theme Helper Functions
/*--------------------------------------*/
if(!function_exists('weaversweb_theme_setup')):
	function weaversweb_theme_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'primary' => __('Primary Menu','weaversweb'),
			'secondary'  => __('Secondary Menu','weaversweb'),
			'mobile_menu'  => __('Mobile Menu','weaversweb'),
			));

		add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));
		}
	endif;
add_action('after_setup_theme','weaversweb_theme_setup');
function weaversweb_widgets_init(){
	register_sidebar(array(
		'name'          => __('Widget Area','weaversweb'),

		'id'            => 'sidebar-1',

		'description'   => __('Add widgets here to appear in your sidebar.','weaversweb'),

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget'  => '</div>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',
		));

	}
add_action('widgets_init','weaversweb_widgets_init');
function weaversweb_scripts(){
	wp_enqueue_style('bootstrap.min.css',get_template_directory_uri().'/assets/css/bootstrap.min.css',array());
	wp_enqueue_style('image/x-icon"',get_template_directory_uri().'/assets/images/favicon.ico',array());
	wp_enqueue_style('image/png',get_template_directory_uri().'/assets/images/fav-icon.png"',array());
	wp_enqueue_style('animate.min.css',get_template_directory_uri().'/assets/css/animate.min.css',array());
	wp_enqueue_style('owl.carousel.min.css',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array());
   	wp_enqueue_style('owl.theme.default.min.css',get_template_directory_uri().'/assets/css/owl.theme.default.min.css',array());
	wp_enqueue_style('style.css',get_template_directory_uri().'/style.css',array());
	wp_enqueue_style('custom.css',get_template_directory_uri().'/assets/css/custom.css',array());
	// Load the Internet Explorer specific script.

	global $wp_scripts;

    wp_enqueue_script('bootstrap.bundle.min.js',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',array('jquery'),time(),true);
	wp_enqueue_script('jquery.min.js','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',array('jquery'),time(),true);
	wp_enqueue_script('popper.min.js','https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js',array('jquery'),time(),true);
	wp_enqueue_script('kit.fontawesome.com','https://kit.fontawesome.com/f1e72c46da.js',array('jquery'),time(),true);
	wp_enqueue_script('owl.carousel.min.js',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'),time(),true);
	wp_enqueue_script('scrollspy.js',get_template_directory_uri().'/assets/js/scrollspy.js',array('jquery'),time(),true);
	wp_enqueue_script('wow.min.js',get_template_directory_uri().'/assets/js/wow.min.js',array('jquery'),time(),true);
	wp_enqueue_script('text-roller.js',get_template_directory_uri().'/assets/js/text-roller.js',array('jquery'),time(),true);
	wp_enqueue_script('particles.min.js',get_template_directory_uri().'/assets/js/particles.min.js',array('jquery'),time(),true);
	wp_enqueue_script('main.js"',get_template_directory_uri().'/assets/js/main.js"',array());
 }
add_action('wp_enqueue_scripts','weaversweb_scripts');
add_action('wp_head','hook_javascript');
function hook_javascript() {
?>
<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url('admin-ajax.php')  ?>";
</script>
<?php 
}


// Body Class
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


add_action( 'woocommerce_before_add_to_cart_button', 'single_page_input', 5 );
function single_page_input(){


// echo '<input type="number" name="custom_input_price" id="coustomprice" placeholder="$" onkeyup="myfun();"> ';
// echo '<br>';
// echo '<br>';
// echo 'gift card price:<select name="input-price-value" onclick="myfun();" id="giftCard">
// <option value="">choose</option>
// <option value="100">100</option>
// <option value="100">200</option>
// <option value="300">300</option>
// <option value="500">500</option>
// </select>';
global $product;
echo '<div>
<label>modify color:price-$14<input type="checkbox" name="coustom_color" value="14" data-amount="14" id="modify_color"></label><br>
<label>modify pocket:price-$20 <input type="checkbox" name="coustom_pocket" value="20" data-amount="20" id="modify_pocket"></label><br>
<label>modify print:price-$25<input type="checkbox" name="coustom_print" value="25" data-amount="25" id="modify_print"></label><br>
<label>modify backside:price-$8<input type="checkbox" name="coustom_backside" value="8" data-amount="8" id="modify_backside"></label><br>
</div>
<div class="total" id="result"><h6>Total Price:</h6><span></span></div>';




$price = $product->get_price();
$currency = get_woocommerce_currency_symbol();
wc_enqueue_js( " 
$('#modify_color:checkbox').on('click',function() {
	myFun_sou();
});
$('#modify_pocket:checkbox').on('click',function() {
	myFun_sou();
});
$('#modify_print:checkbox').on('click',function() {
	myFun_sou();
});
$('#modify_backside:checkbox').on('click',function() {
	myFun_sou();
});


const checkboxes = document.querySelectorAll('input[type=checkbox]');      
checkboxes.forEach(function(checkbox)
 {
        checkbox.addEventListener('change', function() {
            const runningTotal =
                Array.from(checkboxes) 
                .filter(i => i.checked) // remove unchecked checkboxes.
                .map(i => i.dataset.amount ??= 0) //extract the amount, or 0
                .reduce((total, item) => { return total + parseFloat(item)}, 0)
                
            console.log(runningTotal);
			$('[name=quantity]').on('input change', function() { 
				var qty = $(this).val();
				var price = " . esc_js( $price ) . "+runningTotal;

				var price_string = (price*qty).toFixed(2);
				$('#result > span').html('" . esc_js( $currency ) . "'+price_string);
			 }).change();
			 
           
            
        })
    });

 
   
" 



);

}
//=============================================================================================================
// add_action('woocommerce_before_add_to_cart_form','single_page_input');




// add_filter('woocommerce_add_cart_item_data','addCoustomInput',20,2);
// function addCoustomInput($cart_item_data,$product_id){

// 	if(!isset($_POST['input-price'])){
// 		return $cart_item_data;
// 	}
// 	$coustom_input=sanitize_text_field($_POST['input-price']);
// 	if(empty($coustom_input)){
// 		return $cart_item_data;
// 	}
// 	$product= wc_get_product($product_id); // The WC_Product Object
// 	$additional_price=$coustom_input;
	
// 	$cart_item_data['custom_data']['price_data']=$additional_price;
// 	print_r ($cart_item_data); die ();
// 	return $cart_item_data;
	

// 	}
//===========================================================================================================
add_filter('woocommerce_add_cart_item_data', 'add_coustom_color', 20, 2 );
function add_coustom_color( $cart_item_data, $product_id ){
	
if (!isset($_POST['coustom_color']))
{
    return $cart_item_data;
}
$custom_price = (float) sanitize_text_field($_POST['coustom_color']);
if( empty($custom_price) )
{
	return $cart_item_data;
}
$new_price =$custom_price;

$cart_item_data['custom_data']['new_price_1'] = (float) $new_price;  
$cart_item_data['custom_data']['label-1']='modify color:price-$14';

return $cart_item_data;
}
//=============================================================================================================
add_filter('woocommerce_add_cart_item_data', 'add_coustom_pocket', 20, 2 );
function add_coustom_pocket( $cart_item_data, $product_id ){
	
if (!isset($_POST['coustom_pocket']))
{
    return $cart_item_data;
}
$custom_price = (float) sanitize_text_field($_POST['coustom_pocket']);
if( empty($custom_price) )
{
	return $cart_item_data;
}
$new_price =$custom_price;

$cart_item_data['custom_data']['new_price_2'] = (float) $new_price;  
$cart_item_data['custom_data']['label-2']='modify pocket:price-$20';
return $cart_item_data;
}
//=============================================================================================================
add_filter('woocommerce_add_cart_item_data', 'add_coustom_print', 20, 2 );
function add_coustom_print( $cart_item_data, $product_id ){
	
if (!isset($_POST['coustom_print']))
{
    return $cart_item_data;
}
$custom_price = (float) sanitize_text_field($_POST['coustom_print']);
if( empty($custom_price) )
{
	return $cart_item_data;
}
$new_price =$custom_price;

$cart_item_data['custom_data']['new_price_3'] = (float) $new_price;  
$cart_item_data['custom_data']['label-3']='modify print:price-$25';
return $cart_item_data;
}
//==============================================================================================================
add_filter('woocommerce_add_cart_item_data', 'add_coustom_backside', 20, 2 );
function add_coustom_backside( $cart_item_data, $product_id ){
	
if (!isset($_POST['coustom_backside']))
{
    return $cart_item_data;
}
$custom_price = (float) sanitize_text_field($_POST['coustom_backside']);
if( empty($custom_price) )
{
	return $cart_item_data;
}
$new_price =$custom_price;

$cart_item_data['custom_data']['new_price_4'] = (float) $new_price;  
$cart_item_data['custom_data']['label-4']='modify backside:price-$8';
return $cart_item_data;
}

//============================================================================================================
add_filter( 'woocommerce_cart_item_name', 'addcoustom_field_text1',30,20 );
function addcoustom_field_text1($item_name, $cart_item, $cart_item_key){

	if(!isset($cart_item['custom_data']['label-1'])){
	
	 $newvalue=$item_name;
	return $newvalue;
	}else{
		$newvalue=$item_name ."<br>".$cart_item['custom_data']['label-1'];
		return $newvalue;
	}
}

add_filter( 'woocommerce_cart_item_name', 'addcoustom_field_text2',30,20 );
function addcoustom_field_text2($item_name, $cart_item, $cart_item_key){

	if(!isset($cart_item['custom_data']['label-2'])){
	
	 $newvalue=$item_name;
	return $newvalue;
	}else{
		$newvalue=$item_name ."<br>".$cart_item['custom_data']['label-2'];
		return $newvalue;
	}
}

add_filter( 'woocommerce_cart_item_name', 'addcoustom_field_text3',30,20 );
function addcoustom_field_text3($item_name, $cart_item, $cart_item_key){
	
	if(!isset($cart_item['custom_data']['label-3'])){
	
	 $newvalue=$item_name;
	return $newvalue;
	}else{
		$newvalue=$item_name ."<br>".$cart_item['custom_data']['label-3'];
		return $newvalue;
	}
}
add_filter( 'woocommerce_cart_item_name', 'addcoustom_field_text4',30,20 );
function addcoustom_field_text4($item_name, $cart_item, $cart_item_key){
	
	if(!isset($cart_item['custom_data']['label-4'])){
		
	 $newvalue=$item_name;
	return $newvalue;
	}else{
		$newvalue=$item_name ."<br>".$cart_item['custom_data']['label-4'];
		return $newvalue;
	}
}

// Set the new calculated cart item price
add_action( 'woocommerce_before_calculate_totals', 'extra_price_add_custom_price', 20,1 );
function extra_price_add_custom_price( $cart ) {

if ( is_admin() && !defined('DOING_AJAX') )
    return;
	
foreach ( $cart->get_cart() as $cart_item ) {
	
	 $wc_product = $cart_item['data'];
	$product_price = floatval($wc_product->get_price());
	
if($product_price>0){

	$val_1=(float) $cart_item['custom_data']['new_price_1'];
	$val_2=(float) $cart_item['custom_data']['new_price_2'];
	$val_3=(float) $cart_item['custom_data']['new_price_3'];
    $val_4=(float) $cart_item['custom_data']['new_price_4'];
	$total_val=$product_price+$val_1+$val_2+$val_3+$val_4;
	
$cart_item['data']->set_price($total_val);
}

}

}



//================================================================================================================
// add_filter('woocommerce_add_cart_item_data', 'add_custom_field_data', 20, 2 );
// function add_custom_field_data( $cart_item_data, $product_id ){

// if (!isset($_POST['custom_input_price']))
// {
//     return $cart_item_data;
// }
// $custom_price = (float) sanitize_text_field($_POST['custom_input_price']);
// //print_r($custom_price );
// //$rental_date = (float) sanitize_text_field( $_POST['rental_date'] );
// if( empty($custom_price) )
// {
// 	return $cart_item_data;
// }
    
          


// //'$product= wc_get_product($product_id); // The WC_Product Object

// // $base_price = (float) $product->get_regular_price(); // Product reg price

// // New price calculation
// $new_price =$custom_price;

// // Set the custom amount in cart object
// //$cart_item_data['custom_data']['rental'] = (float) $custom_price;

// $cart_item_data['custom_data']['new_price'] = (float) $new_price;  

// //$cart_item_data['custom_data']['unique_key'] = md5( microtime() . rand() ); 
// // Make each item unique
// //print_r($cart_item_data);
// return $cart_item_data;

// }
//===========================================================================================================
// add_filter('woocommerce_add_cart_item_data', 'add_custom_option_data', 20, 2 );
// function add_custom_option_data( $cart_item_data, $product_id ){
	
// if (!isset($_POST['input-price-value']))
// {
//     return $cart_item_data;
// }
// $custom_price = (float) sanitize_text_field($_POST['input-price-value']);

// if( empty($custom_price) )
// {
// 	return $cart_item_data;
// }
// // '$product= wc_get_product($product_id); // The WC_Product Object

// // $base_price = (float) $product->get_regular_price(); // Product reg price

// // New price calculation
// $new_price =$custom_price;

// $cart_item_data['custom_data']['new_price'] = (float) $new_price;  


// return $cart_item_data;

// }
//==========================================================================================================
// Set the new calculated cart item price
// add_action( 'woocommerce_before_calculate_totals', 'add_custom_price', 20, 1 );
// function add_custom_price( $cart ) {
// foreach ( $cart->get_cart() as $cart_price ) {
//     if( isset($cart_price['custom_data']['new_price']) )
//         $cart_price['data']->set_price( (float) $cart_price['custom_data']['new_price'] );
// }
// }

//==================================================================================================================
add_filter('woocommerce_add_to_cart_fragments','add_to_cart_sign');
function add_to_cart_sign($fragments){
	ob_start();
	$items_count= WC()->cart->get_cart_contents_count();
	?>
	<span class="cart-item"><?php echo $items_count ? $items_count : '0';?></span>
	<?php
	$fragments['.cart-item']=ob_get_clean();
	
	return $fragments;
}

//============================================================================================================
function wooc_extra_register_fields() {?>
	<p class="form-row form-row-wide">
	<label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
	<input type="text" class="input-text" name="phone" id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" />
	</p>
	<p class="form-row form-row-first">
	<label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label>
	<input type="text" class="input-text" name="first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
	</p>
	<p class="form-row form-row-last">
	<label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
	<input type="text" class="input-text" name="last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
	</p>
	<p class="form-row form-row-first">
		<label for="reg_role"><?php _e( 'Privat or commercial?', 'woocommerce' ); ?></label>
		<select class="input-text" name="role" id="reg_role"> 
		<option <?php if ( ! empty( $_POST['role'] ) && $_POST['role'] == 'Retail') esc_attr_e( 'selected' ); ?> value="Retail">Retail</option> 
		<option <?php if ( ! empty( $_POST['role'] ) && $_POST['role'] == 'wholesale') esc_attr_e( 'selected' ); ?> value="wholesale">wholesale</option>
		</select> 
	</p>
	<div class="clear"></div>
	<?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );





function wooc_save_extra_register_fields( $customer_id ) {
    if ( isset( $_POST['phone'] ) ) {
                 // Phone input filed which is used in WooCommerce
                 update_user_meta( $customer_id, 'phone', sanitize_text_field( $_POST['phone'] ) );
          }
      if ( isset( $_POST['first_name'] ) ) {
             //First name field which is by default
             update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
             // First name field which is used in WooCommerce
             update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
      }
      if ( isset( $_POST['last_name'] ) ) {
             // Last name field which is by default
             update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['last_name'] ) );
             // Last name field which is used in WooCommerce
             update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['last_name'] ) );

      
	
 }
 if (isset($_POST['role'])) {
	update_user_meta($customer_id, 'role', sanitize_text_field($_POST['role']));
}
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );
$user_id=get_current_user_id();
$query = "SELECT * FROM wp_usermeta INNER JOIN wp_users ON wp_users.ID = wp_usermeta.user_id WHERE wp_usermeta.user_id =$user_id And wp_usermeta.meta_value LIKE('wholesale');";
$query2 = "SELECT * FROM wp_usermeta INNER JOIN wp_users ON wp_users.ID = wp_usermeta.user_id WHERE wp_usermeta.user_id =$user_id And wp_usermeta.meta_value LIKE('Retail');";            
$data = $wpdb->get_results($query,ARRAY_A);
$data2 = $wpdb->get_results($query2,ARRAY_A);
if($data>0){
	foreach($data as $values){
	
		if($values['meta_value']=='wholesale'){
			add_action( 'woocommerce_cart_calculate_fees', 'cart_progressive_discount', 50, 1 );
function cart_progressive_discount( $cart ) {
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    // For 1 item (quantity 1) we EXIT;
    if( $cart->get_cart_contents_count() == 1 )
        return;

    ## ------ Settings below ------- ##

    // $percent = 10; // Percent rate: Progressive discount by steps of 5%
    $max_percentage = 15; 
    $discount_text = __( 'Quantity discount', 'woocommerce' ); // Discount Text

    ## ----- ----- ----- ----- ----- ##

    $cart_items_count = $cart->get_cart_contents_count();
    $cart_lines_total = $cart->get_subtotal() - $cart->get_discount_total();

    // Dynamic percentage calculation
   //$percentage = $percent * ($cart_items_count -1);
$percentage= 10;
if($cart_items_count>=10 && $cart_items_count<20){
	$discount_text .=  ' (' . $percentage . '%)';
	$discount = $cart_lines_total * $percentage / 100;
	$cart->add_fee( $discount_text, -$discount );
}elseif($cart_items_count>=20){
	$discount_text .=  ' (' .  $max_percentage . '%)';
	$discount = $cart_lines_total *  $max_percentage / 100;
	$cart->add_fee( $discount_text, -$discount );
}
else{
	$discount_text .=  ' (' . $percentage . '%)';
	$discount = 0.00;
	$cart->add_fee( $discount_text, -$discount );
}

   
   
}
		}
	}
}
if($data2>0){
	foreach($data2 as $values){
		if($values['meta_value']=='Retail'){
			add_action( 'woocommerce_cart_calculate_fees', 'cart_progressive_discount', 50, 1 );
function cart_progressive_discount( $cart ) {
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    // For 1 item (quantity 1) we EXIT;
    if( $cart->get_cart_contents_count() == 1 )
        return;
		
		$discount_text = __( 'Quantity discount', 'woocommerce' ); // Discount Text
	
		## ----- ----- ----- ----- ----- ##
	
		$cart_items_count = $cart->get_cart_contents_count();
		$cart_lines_total = $cart->get_subtotal() - $cart->get_discount_total();
	
		// Dynamic percentage calculation
	   //$percentage = $percent * ($cart_items_count -1);
	$percentage= 5;
	if($cart_items_count>=2){
		$discount_text .=  ' (' . $percentage . '%)';
		$discount = $cart_lines_total * $percentage / 100;
		$cart->add_fee( $discount_text, -$discount );
	}
}
		}
	}
}
///=====================================================================================================
// function woocommerce_edit_my_account_page() {
//     return apply_filters( 'woocommerce_forms_field', array(
//         'woocommerce_my_account_page' => array(
// 			'type'    => 'select',
// 			'label'   => __( 'Select Field', 'cloudways' ),
// 			'options' => array(
// 				'' => __( 'Select an options.', 'cloudways' ),
// 				1  => __( 'user', 'cloudways' ),
// 				2  => __( 'Retail  ', 'cloudways' ),
// 				3  => __( 'whole-sale', 'cloudways' ),
				
//         ),
		
// 	)) );
// }
// function edit_my_account_page_woocommerce() {
//     $fields = woocommerce_edit_my_account_page();
//     foreach ( $fields as $key => $field_args ) {
//         woocommerce_form_field( $key, $field_args );
//     }
// }
// add_action( 'woocommerce_register_form', 'edit_my_account_page_woocommerce', 15 );



// function ui_new_role() {  
 
//     //add the new user role
//     add_role(
//         'Retail',
//         'Retail',
//         array(
//             'read'         => true,
//             'delete_posts' => false
//         )
//     );
// 	add_role(
// 		'wholesale',
//         'wholesale',
//         array(
//             'read'         => true,
//             'delete_posts' => false
//         )
//     );
 
// }
// add_action('admin_init', 'ui_new_role');

// $user_meta=get_userdata($user_id);
 
// $user_roles=$user_meta->roles; 


// $user = new WP_User(123); //123 is the user ID
// $user->roles; // ["subscriber"]
 
// $user->add_role('Retail');
// $user->roles; // ["subscriber", "power_member"]
 
// $user->set_role('wholesale');
// $user->roles; // ["editor"]

// function myplugin_registration_save( $user_login, $user ) {
    
//     //retrieve the number of sessions for this user
//     $sessions = get_user_meta( $user->ID, 'ui_user_sessions', true );
    
//     //if our sessions counter isn't empty let's see how many sessions this user's got
//     if ( ! empty ($sessions) ) {
//         //let's increase our sessions counter
//         $sessions++;
        
//         //now we check if the current session is the 10th and if our user is a subscriber
//         if ( $sessions == 10 && in_array("wholesale", $user->roles) ) {
//             //here our magic is done, we're setting the new role
//             $user->set_role('wholesale');
//         }
//           //now we check if the current session is the 10th and if our user is a subscriber
// 		  if ( $sessions == 10 && in_array("Retail", $user->roles) ) {
//             //here our magic is done, we're setting the new role
//             $user->set_role('Retail');
//         }
//         //let's update our user's session counter
//         update_user_meta( $user->ID, 'ui_user_sessions', $sessions);
//     }
//     // in this case our sessions counter is empty, so let's create it
//     else {
//         update_user_meta( $user->ID, 'ui_user_sessions', 1);
//     }
// }
// add_action('wp_login', 'ui_check_logins', 10, 2);
// add_action( 'user_register', 'myplugin_registration_save', 10, 1 );



//===========================================================
// function action_woocommerce_cart_calculate_fees( $cart ) {
//     if ( is_admin() && ! defined( 'DOING_AJAX' ) )
//         return;
    
//     // Only for 'company' user role
   
// add_action( 'woocommerce_cart_calculate_fees', 'action_woocommerce_cart_calculate_fees', 10, 1 );

// add_action( 'woocommerce_before_calculate_totals', 'changing_cart_item_prices', 20, 1 );
// function changing_cart_item_prices( $cart ) {
//     if ( is_admin() && ! defined( 'DOING_AJAX' ) )
//         return;

//     if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
//         return;
// 		$minimun_quantity = 2;
    
// 		// Initialize
// 		$current_quantity = 0;
// 		$current_total = 0;
	
//     // Loop through cart items
//     foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) {
//         // The instance of the WC_Product Object
		
		
//         $product = $cart_item['data'];
	
//         $product_id = $product->get_id(); // The product ID

//         $price = $product->get_price(); // The product price

//         $new_price =$price-5/100;

//         // Set the new cart item price
//         $product->set_price( $new_price );
	
//     }
// }
// }

//================================================================
