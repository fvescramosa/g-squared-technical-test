<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
        <footer class="footer" role="contentinfo">

            <div class="semi-footer">
                <div class="container">
                    <div class="semi-footer-container">
                        <div class="semi-footer-container__text">
                            <?php the_field('content', 'option'); ?>
                        </div>
                        <div class="semi-footer-container__maps">
                            <div class="maps-container">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="footer-content">
                        <div class="footer-content-copyright">
                            &copy; <?php echo date('Y') . ' ' .get_bloginfo('title'); ?>
                        </div>
                        <div class="footer-content-socials">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->