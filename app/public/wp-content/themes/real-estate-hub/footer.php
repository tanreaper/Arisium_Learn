<?php
/**
 * The template for displaying the footer
 *
 * @package Real Estate Hub
 * @subpackage real_estate_hub
 */

?>

		</div>
		<footer id="footer" class="site-footer" role="contentinfo">
			<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				get_template_part( 'template-parts/footer/site', 'info' );
			?>
				<div class="return-to-header">
					<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
				</div>
		</footer>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
