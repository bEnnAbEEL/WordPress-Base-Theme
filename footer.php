<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apartment Fit
 * @since 1.0.0
 */

// Include header.
get_header();

// Global variables.
global $option_fields;
global $pID;
global $fields;

$aptfit_page_cta_pagevisibility = $fields['aptfit_page_cta_pagevisibility'];

?>

</main> <?php get_template_part( 'partials/cta' ); ?>


<?php

// aptfit_Schema Markup - Advanced custom fields variables.
$aptfit_schema_locality            = $option_fields['locality'];
$aptfit_schema_region              = $option_fields['region'];
$aptfit_schema_postal_code         = $option_fields['postal_code'];
$aptfit_schema_street_address      = $option_fields['street_address'];
$aptfit_schema_map_short_link      = $option_fields['map_short_link'];
$aptfit_schema_latitude            = $option_fields['latitude'];
$aptfit_schema_longitude           = $option_fields['longitude'];
$aptfit_schema_business_name       = $option_fields['business_name'];
$aptfit_schema_opening_hours       = $option_fields['opening_hours'];
$aptfit_schema_telephone           = $option_fields['telephone'];
$aptfit_schema_business_email      = $option_fields['business_email'];
$aptfit_schema_business_image_logo = $option_fields['business_image_logo'];
$aptfit_schema_business_legal_name = $option_fields['business_legal_name'];
$aptfit_schema_price_range         = $option_fields['price_range'];

// Footer Socials - Advanced custom fields variables.
$aptfit_to_ftrcol1           = $option_fields['aptfit_to_ftrcol1'];
$aptfit_to_ftrcol2           = $option_fields['aptfit_to_ftrcol2'];
$aptfit_to_ftrcol3           = $option_fields['aptfit_to_ftrcol3'];
$aptfit_to_ftr_copyrightmenu = $option_fields['aptfit_to_ftr_copyrightmenu'];
$aptfit_to_ftr_copyrighttext = $option_fields['aptfit_to_ftr_copyrighttext'];
$aptfit_to_ftr_btmlogo       = $option_fields['aptfit_to_ftr_btmlogo'];
$aptfit_to_ftr_btmlink       = $option_fields['aptfit_to_ftr_btmlink'];

?>

<?php if ( is_page_template( 'templates/template-howwehelp.php' ) ) { ?>

	<footer class="how-we-help-footer">
		<div class="footer-widgets">
			<div class="wrapper">
				<div class="footer-bottom">
					<div class="footer-bottom-left">
						<div class="copy-right"><?php echo $aptfit_to_ftr_copyrighttext; ?></div>
					</div>
					<div class="footer-bottom-right">
						<div class="allie-logo">
							<a href="<?php echo $aptfit_to_ftr_btmlink; ?>">
							<?php
								$size = 'thumb_400';
								echo wp_get_attachment_image( $aptfit_to_ftr_btmlogo, $size );
							?>
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</footer>

<?php } else { ?>

<footer class="<?php if(!$aptfit_page_cta_pagevisibility){ echo 'nocta'; } ?>">
		<div class="footer-widgets">
			<div class="wrapper">
				<div class="footer-widget-one">
					<div class="footer-logo">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt=""><span>Find your fit.</span></a>
					</div>
					<?php if ( $aptfit_to_ftrcol1 ) { ?>
					<div class="footer-socials">
						<?php if ( $aptfit_to_ftrcol1['instagram'] ) { ?>
							<a href="<?php echo $aptfit_to_ftrcol1['instagram']; ?>" target="_blank" class="instagram"></a>
						<?php } ?>
						<?php if ( $aptfit_to_ftrcol1['facebook'] ) { ?>
							<a href="<?php echo $aptfit_to_ftrcol1['facebook']; ?>" target="_blank" class="facebook"></a>
						<?php } ?>
						<?php if ( $aptfit_to_ftrcol1['twitter'] ) { ?>
							<a href="<?php echo $aptfit_to_ftrcol1['twitter']; ?>" target="_blank" class="twitter"></a>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				<div class="footer-widget-two">
					<?php
						echo $aptfit_to_ftrcol2['menu_selection'];
					?>
				</div>
				<div class="footer-widget-three">
					<?php
						echo $aptfit_to_ftrcol3['menu_selection'];
					?>
				</div>
				<div class="clear"></div>
				<div class="footer-bottom">
					<div class="footer-bottom-left">
						<div class="footer-bottom-menu">
							<?php
								echo $aptfit_to_ftr_copyrightmenu;
							?>
						</div>
						<div class="copy-right"><?php echo $aptfit_to_ftr_copyrighttext; ?></div>
					</div>
					<div class="footer-bottom-right">
						<div class="allie-logo">
							<a href="<?php echo $aptfit_to_ftr_btmlink; ?>">
							<?php
								$size = 'thumb_400';
								echo wp_get_attachment_image( $aptfit_to_ftr_btmlogo, $size );
							?>
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<script type="application/ld+json">
	{
		"@context": "http://aptfit_schema.org",
		"@type": "Restaurant",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo $aptfit_schema_locality; ?> ",
			"addressRegion": "<?php echo $aptfit_schema_region; ?> ",
			"postalCode": "<?php echo $aptfit_schema_postal_code; ?> ",
			"streetAddress": "<?php echo $aptfit_schema_street_address; ?> "
		},
		"hasMap": "<?php echo $aptfit_schema_map_short_link; ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo $aptfit_schema_latitude; ?> ",
			"longitude": "<?php echo $aptfit_schema_longitude; ?> "
		},
		"name": "<?php echo $aptfit_schema_business_name; ?>",
		"openingHours": [ < ? php echo $aptfit_schema_opening_hours; ? > ],
		"telephone": "<?php echo $aptfit_schema_telephone; ?> ",
		"email": "<?php echo $aptfit_schema_business_email; ?> ",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo $aptfit_schema_business_image_logo; ?> ",
		"legalName": "<?php echo $aptfit_schema_business_legal_name; ?> ",
		"priceRange": "<?php echo $aptfit_schema_price_range; ?>"
	}
	</script>
</footer>

<?php } ?>

<?php wp_footer(); ?> </body>

</html>
