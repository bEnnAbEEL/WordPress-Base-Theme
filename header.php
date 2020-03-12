<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apartment Fit
 * @since 1.0.0
 */

// Global variables
global $option_fields;
global $pID;
global $fields;
global $current_page_cta;
$current_page_cta = null;

$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

$option_fields = get_fields( 'option' );
$fields        = get_fields( $pID );

// Page variables - Advanced custom fields variables
$aptfit_to_hdr_button    = $option_fields['aptfit_to_hdr_button'];
$aptfit_to_menutitle     = $option_fields['aptfit_to_menutitle'];
$aptfit_to_menuselection = $option_fields['aptfit_to_menuselection'];



?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<script>
	// Identifies the Browser type in the HTML tag for specific browser CSS
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
	doc.setAttribute("data-platform", navigator.platform);
	</script> <?php wp_head(); ?>
</head>
<?php $post_type = get_post_type();
 if($post_type == 'listings') $body_classes = "listings-search";
 ?>
<body <?php body_class($body_classes);  ?>>
	<?php if ( ! is_page_template( 'templates/template-howwehelp.php' ) ) { ?>
	 <header class="site-header">
		<div class="big-wrapper">
			<div class="left-header">
				<div class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Site Logo"></a>
				</div>
			</div>
			<div class="right-header">
				<div class="menu-overlay">
					<div class="menu-container">
						<div class="menu-content">
							<div class="main-menu">
								<span class="header-menu-item"><?php echo $aptfit_to_menutitle; ?>
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main',
											'fallback_cb' => 'fallbackmenu',
										)
									);
								?>
								</span>
							</div>
							<div class="header-btns">
							<?php
							if ( $aptfit_to_hdr_button ) :
								echo build_acf_button( $aptfit_to_hdr_button, 'button' );
							endif;
							?>
							</div>
							<!-- /.header-btns -->
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="menu-btn">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- /.wrapper -->

	</header>
	<div class="header-dropdows-container">
		<div class="wrapper">
			<div id="header-drop-downs">
				<select id="header-selection" name="webmenu">
					<option value="overall" >What’s important to you?</option>
					<option title="<?php echo get_template_directory_uri(); ?>/assets/img/header-dropdown-1.png" value="kitchen">Kitchen</option>
					<option title="<?php echo get_template_directory_uri(); ?>/assets/img/header-dropdown-2.png" value="fitness">Workout Amenities</option>
					<option title="<?php echo get_template_directory_uri(); ?>/assets/img/header-dropdown-3.png" value="pool">Pool </option>
					<option title="<?php echo get_template_directory_uri(); ?>/assets/img/header-dropdown-4.png" value="pet">Pet Friendliness</option>
					<option title="<?php echo get_template_directory_uri(); ?>/assets/img/header-dropdown-5.png" value="size">Size</option>
					<option title="<?php echo get_template_directory_uri(); ?>/assets/img/header-dropdown-2.png" value="bath">Bathroom</option>
					<option title="<?php echo get_template_directory_uri(); ?>/assets/img/header-dropdown-3.png" value="quality">Unit Quality</option>
				</select>
				<div class="choose-city">
					<span id="city-dropdown-value">Choose a City</span>
				</div>
				<div class="location-popup">
					<div class="popup-heading">First, where do want to live?</div>
					<div class="our-locations">
						<a class="header-popup-selection hps-dallas" data-location="dallas" href="<?php echo home_url(); ?>/listings_category/dallas/">
						<span style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/lotus.svg)"></span>Dallas</a>

						<a class="header-popup-selection hps-austin" data-location="austin" href="<?php echo home_url(); ?>/listings_category/austin/">
						<span style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/acoustic-guitar.svg)"></span>Austin</a>
					</div>
					<div class="popup-close-btn">
						<a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-close-icon.svg" alt=""></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php } ?>
	<main id="content" class="site-content"> <?php
			/**
			 * Include masthead
			 *
			 * Contains masthead settings for each type and template for the theme
			 */
			get_template_part( 'partials/masthead' );
	?>
