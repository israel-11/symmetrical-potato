		<!-- col-md-10 or page content -->
		</div>
	<!-- col-md-2 or sidebar -->
	</div>
<!-- end row -->
</div>
<?php get_footer(); ?>
<footer class='site-footer'>
	<div> 
		<?php  wp_nav_menu(array( theme_location => 'footer' ));  ?> 
	</div>
	<p><?php bloginfo('name') ?> - &copy; <?php echo date('Y'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>