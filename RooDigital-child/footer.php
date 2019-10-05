<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="mt-auto py-3 footer-bg">
        <div class="container pt-5">
            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <h3 class="font-weight-bold">Roo Digital</h3>
                </div>
                <div class="col-md-6">
                    <a href="#top"><i class="fa fa-chevron-circle-up float-right" style="font-size: 3rem;" aria-hidden="true"></i></a>
                </div>
			</div>
			
            <div class="row mt-5 mb-5">

                <div class="col-md-6" style="display: none;">
                    <nav class="nav flex-column">
                        <p><b>Sitemap:</b></p>
                        <a href="<?php echo is_front_page() ? '#offer' : 'https://roo.digital/#offer' ?>">What we offer</a>
                        <a href="<?php echo is_front_page() ? '#why' : 'https://roo.digital/#why' ?>">Why work with us?</a>
                        <a href="<?php echo is_front_page() ? '#previous' : 'https://roo.digital/#previous' ?>">Previous work</a>
                        <a href="<?php echo is_front_page() ? '#packages' : 'https://roo.digital/#packages' ?>">Packages</a>
                        <a href="/terms.html" style="display: none;">Terms and conditions</a>
                    </nav>
				</div>

				<div class="col-md-6">
					<nav class="nav flex-column">
						<!-- The WordPress Menu goes here -->
						<p><b>Sitemap:</b></p>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => '',
								'container_id'    => 'footerNav',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => '',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
					</nav>
				</div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <p class="float-right"><a href="mailto:roodigitalco@gmail.com">roodigitalco@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="row mt-5" style="display: none;">
                        <div class="col footer-icons">
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in float-right pl-5" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram float-right pl-5" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f float-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
				</div>
				
            </div>
            <div class="row mt-r mb-5">
                <div class="col text-center">
                    <p><span class="text-white-50 testy">Copyright &copy; <?php echo date("Y"); ?> Roo Digital<br>ABN - 40 343 075 283</span></p>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

