<?php
/**
 * Displays the header section of the theme.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<?php
		/**
		 * travelify_meta hook
		 */
		do_action( 'travelify_meta' );

		/**
		 * travelify_links hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_add_links 10
		 * travelify_favicon 15
		 * travelify_webpageicon 20
		 *
		 */
		do_action( 'travelify_links' );

		/**
		 * This hook is important for WordPress plugins and other many things
		 */
		wp_head();
	?>

<!-- BEE 3/6/2017 Floating back to top feature -->
<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
<style>
.back-to-top-button {
   background: none;
   border: none;
   margin: 0;
   position: fixed;
   bottom: 0;
   right: 0;
   width: 70px;
   height: 70px;
   z-index: 100;
   display: none;
   text-decoration: none;
   color: #c4c4c4;
   background-color: none;
}
.back-to-top-button i {
  font-size: 60px;
}
</style>
</head>

<body <?php body_class(); ?>>
	<?php
		/**
		 * travelify_before hook
		 */
		do_action( 'travelify_before' );
	?>

	<div class="wrapper">
		<?php
			/**
			 * travelify_before_header hook
			 */
			do_action( 'travelify_before_header' );
		?>
		<header id="branding" >
			<?php
				/**
				 * travelify_header hook
				 *
				 * HOOKED_FUNCTION_NAME PRIORITY
				 *
				 * travelify_headerdetails 10
				 */
				do_action( 'travelify_header' );
			?>
		</header>
		<?php
			/**
			 * travelify_after_header hook
			 */
			do_action( 'travelify_after_header' );
		?>

		<?php
			/**
			 * travelify_before_main hook
			 */
			do_action( 'travelify_before_main' );
		?>
		<div id="main" class="container clearfix">