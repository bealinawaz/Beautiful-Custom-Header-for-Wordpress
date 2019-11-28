<?php
/*
Plugin Name: Beautiful Custom Header By Ali Nawaz
Plugin URI: http://codeconvolution.com/
description: Beautiful Custom Header for any theme that open from the Right sidebar
Version: 1.0
Author: Ali Nawaz
Author URI: http://bealinawaz.com/
License: GPL2
*/
 

function left_side_menu() { ob_start(); ?>
		<style>
            body { overflow:hidden; }
			div#outer-wrap{background:#FFF}
			.left-side-menu{display:none;width:100%;max-width:320px;background-color:#000;padding:0 0 60px 60px;box-sizing:border-box;position:fixed;left:auto;top:0;bottom:0;right:0;z-index:0;height:100%}
			.left-side-menu.move { display:block; z-index:1;}
			.right-menu-container {top:50% !important; left:50% !important; transform:translate(-50%,-50%) !important; position:relative !important;list-style:none !important;width:100% !important;margin:0 !important;padding:0 !important;text-align: left !important;}
			.right-menu-container ul{list-style:none;margin:0;padding:0}
			.right-menu-container ul li a{font-family:Montserrat,sans-serif;font-weight:300;font-style:normal;font-stretch:normal;text-align:center;text-transform:uppercase;line-height:3.2rem;letter-spacing:.4em;transition:all .5s;color:#fff;font-size:15px}
			.right-menu-container ul li a{font-family:Montserrat,sans-serif;font-weight:300;font-style:normal;font-stretch:normal;text-align:center;text-transform:uppercase;line-height:3.2rem;letter-spacing:.4em;transition:all .5s;color:#fff;font-size:15px}
			.right-menu-container ul li.current_page_item a{color:#FFF;font-weight:700;}
			.right-menu-container ul li.current_page_item a:hover,
			.right-menu-container ul li a:hover{color:#3c4858;text-decoration:none;}
			.right-menu-container ul li.search-toggle-li{display:none}
			div#outer-wrap{position:relative;z-index:1;-webkit-transition:all 0.5s ease;transition:all 0.5s ease;}
			div#outer-wrap.move{transform:translate3d(-320px,0,.1px);z-index:0}
		</style>
	<div id="left_side_menu" class="left-side-menu">
	    <div class="right-menu-container">
		<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
		</div>
	</div>
<?php $output = ob_get_contents(); ob_get_clean(); echo $output; } add_action("wp_footer", "left_side_menu");

function burger_menu_icon_Shortcode($atts) { $atts = shortcode_atts( array(), $atts); ob_start(); ?>
	<style>.burger{display:inline-block;border:0;background:0 0;outline:0;padding:0;cursor:pointer;border-bottom:4px solid currentColor;width:28px;transition:border-bottom 1s ease-in-out;-webkit-transition:border-bottom 1s ease-in-out}.burger::-moz-focus-inner{border:0;padding:0}.burger:after,.burger:before{content:"";display:block;border-bottom:4px solid currentColor;width:100%;margin-bottom:5px;transition:-webkit-transform .5s ease-in-out;transition:transform .5s ease-in-out;transition:transform .5s ease-in-out,-webkit-transform .5s ease-in-out;-webkit-transition:-webkit-transform .5s ease-in-out}.burger-check{display:none}.burger-check:checked~.burger{border-bottom:4px solid transparent;transition:border-bottom .8s ease-in-out;-webkit-transition:border-bottom .8s ease-in-out}.burger-check:checked~.burger:before{transform:rotate(-405deg) translateY(1px) translateX(-3px);-webkit-transform:rotate(-405deg) translateY(1px) translateX(-3px);transition:-webkit-transform .5s ease-in-out;transition:transform .5s ease-in-out;transition:transform .5s ease-in-out,-webkit-transform .5s ease-in-out;-webkit-transition:-webkit-transform .5s ease-in-out}.burger-check:checked~.burger:after{transform:rotate(405deg) translateY(-4px) translateX(-5px);-webkit-transform:rotate(405deg) translateY(-4px) translateX(-5px);transition:-webkit-transform .5s ease-in-out;transition:transform .5s ease-in-out;transition:transform .5s ease-in-out,-webkit-transform .5s ease-in-out;-webkit-transition:-webkit-transform .5s ease-in-out}input#burger-check{display:none;}</style>
	<input class="burger-check" id="burger-check" type="checkbox">
	<label for="burger-check" id="left_menu_trigger" class="burger"></label>
	<script>jQuery("#left_menu_trigger").click(function(){
		jQuery("#outer-wrap").toggleClass("move");
		jQuery("#left_side_menu").addClass("move");
	});</script>
<?php $output = ob_get_contents(); ob_get_clean(); return $output; } add_shortcode( 'burger_menu_icon', 'burger_menu_icon_Shortcode' );

function header_add_to_website() { ob_start(); ?>
	<?php /*<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">*/ ?>
	<style>
.menu-button-container {
    position: fixed;
    top: 0;
    right: 0;
    z-index: 9999999999;
	-webkit-transition:all 0.5s ease; transition:all 0.5s ease;
}
.menu-button-container {
    max-width: 290px;
    height: 80px;
    float: right;
    pointer-events: all;
    background-color: #707372;
}
.menu-button-container.move { right: 320px; }

.menu-button {
    pointer-events: all;
    width: 30px;
    margin: 40px;
    margin-bottom: 0;
    float: right;
    position: relative;
    cursor: pointer;
    padding-top: 10px;
}
.menu-bar.dark .menu-button {
    cursor: pointer;
}
.menu-button-container .menu-button {
    margin: 23px 27px 27px;
}


.menu-button .bar {
    width: 100%;
    height: 3px;
    background-color: gray;
    margin-bottom: 6px;
}
.menu-button .bar:last-child {
    margin-bottom: 0;
}
.menu-bar.dark .menu-button .bar {
    background-color: #fff;
}
.menu-button-container .menu-button .bar {
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.menu-button-container .menu-button .bar {
    background-color: #fff;
    height: 1px;
}
.mpve.menu-button-container .menu-button {
    transform: matrix(-1, 0, 0, -1, 0, 10);
}

.move.menu-button-container .menu-button .bar:nth-child(1) {
    transform: matrix(0.7071, -0.7071, 0.7071, 0.7071, 0, 7.14286);
}

.move.menu-button-container .menu-button .bar:nth-child(2) {
    opacity: 0;
}

.move.menu-button-container .menu-button .bar:nth-child(3) {
    transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, 0, -7.14286);
}

.menu-button-container .search-button {
    padding: 27px 0 0 22px;
    float: right;
}
.menu-button .bar:last-child {
    margin-bottom: 0;
}

.menu-button-container .search-button a {
    cursor: pointer;
}

.menu-button-container .search-button img {
    display: inline-block;
    vertical-align: middle;
    margin-right: 4px;
}

.menu-button-container .search-button .line, .menu-button-container .search-button img, .menu-button-container .search-button p {
    display: inline-block;
    vertical-align: middle;
}

.menu-button-container .search-button p {
    font-family: Montserrat,sans-serif;
    font-size: 12px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.33;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
	margin:0px;
}

.menu-button-container .search-button .line {
    width: 1px;
    height: 30px;
    background-color: #fff;
    position: relative;
    margin-top: -3px;
    margin-left: 16px;
}
@media only screen and (max-width: 480px) {
	.menu-button-container .search-button p span { display:none !important; }
	.menu-button-container { max-width:100%; width:100%; }
}
	</style>
	<div class="menu-button-container">
		<div id="menu-button" class="menu-button closed">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
		<div class="search-button">
			<img class="icon" src="https://1x1ymo1tm8um3o3jc33phtzf-wpengine.netdna-ssl.com/wp-content/themes/marktunstall/assets/images/search.svg">
			<a href="<?php echo site_url().'/'.get_theme_mod("pp_url"); ?>"><p>Search<span></span></p><div class="line"></div></a>
		</div>
	</div>
	<script>jQuery("#menu-button").click(function(){
		jQuery(this).parent().toggleClass("move");
		jQuery("div#outer-wrap").toggleClass("move");
		jQuery(".logo-area").toggleClass("move");
		jQuery("#left_side_menu").toggleClass("move");
	});
	jQuery(window).scroll(function(){
		var scroll = jQuery(window).scrollTop();
		var width = jQuery(document).width();
		if(width > 480) {
			if(scroll > 0) {
				jQuery(".menu-button-container .search-button p span").hide();
			} else {
				jQuery(".menu-button-container .search-button p span").show();
			}
		} else {
			jQuery(".menu-button-container .search-button p span").hide();
		}
	});</script>
	<style>
		.logo-area,.main-nav{position:fixed;top:0;background:#707372;z-index:99999999999999 !important;}
		.logo-area{max-width:150px;left:0;transform:translate3d(0,0,.1px);-webkit-transition:all .5s ease;transition:all .5s ease}
		.logo-area.move{transform:translate3d(-320px,0,.1px)}
		.logo-area .mobile{display:none;margin:0 auto;max-width:85px;padding:18px 0}
		.logo-area.scroll .desktop{display:none}
		.logo-area.scroll .mobile{display:block}
		.main-nav{right:0;padding:15px;transform:translate3d(0,0,.1px);-webkit-transition:all .5s ease;transition:all .5s ease}
		.main-nav.move{transform:translate3d(-320px,0,.1px)}.main-nav,.main-nav a{color:#FFF;outline:0;font-size:23px}
	</style>
	<div class="logo-area"><a href="<?php echo site_url("/"); ?>">
		<img src="<?php echo get_theme_mod("logo"); ?>" class="desktop" />
		<img src="<?php echo get_theme_mod("logo_scroll"); ?>" class="mobile" />
	</a></div>
	<script>jQuery(window).scroll(function(){
		var scroll = jQuery(window).scrollTop();
		if(scroll > 0) {
			jQuery(".logo-area").addClass("scroll");
		} else {
			jQuery(".logo-area").removeClass("scroll");
		}
	});</script>
<?php $output = ob_get_contents(); ob_get_clean(); echo $output; } add_action( 'wp_footer', 'header_add_to_website' );

#VM_CUSTOMIZE_REGISTER
function VM_CUSTOMIZE_REGISTER( $wp_customize ) {
	$wp_customize->add_section( 'logo_area', array( 'title' => __( 'LOGO', 'bb' ), 'priority' => 120, ) );

	$wp_customize->add_setting( 'logo', array( 'transport' => 'refresh' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array( 'label' => __( 'LOGO', 'theme_name' ), 'section' => 'logo_area', 'settings' => 'logo', 'context' => 'logo' )));

	$wp_customize->add_setting( 'logo_scroll', array( 'transport' => 'refresh' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_scroll', array( 'label' => __( 'LOGO Scroll', 'theme_name' ), 'section' => 'logo_area', 'settings' => 'logo_scroll', 'context' => 'logo_scroll' )));

	$wp_customize->add_section( 'property_spage', array( 'title' => __( 'Property Search Page', 'bb' ), 'priority' => 120, ) );

	$wp_customize->add_setting( 'pp_url', array( 'transport' => 'refresh' ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pp_url', array( 'label' => __( 'Property Page URL', 'theme_name' ), 'section' => 'property_spage', 'settings' => 'pp_url', 'type' => 'text' )));



} add_action( 'customize_register', 'VM_CUSTOMIZE_REGISTER' ); ?>