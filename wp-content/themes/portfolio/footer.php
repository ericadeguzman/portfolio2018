<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bootstrap to WordPress
 */
?>

<?php wp_footer(); ?>


<section id="footer">
	
<div class="container">
<div class="col-lg-12">
	<div id="footer-right">
		<ul class="footer-social">
		<li><a target="_blank" href="https://www.linkedin.com/in/ericadg">LinkedIn</a></li>
		<li><a target="_blank" href="https://github.com/ericadeguzman">GitHub</a></li>
			<li><a target="_blank" href="https://gurushots.com/edgphoto/photos">GuruShots</a></li>	
		<li><a target="_blank" href="https://dribbble.com/ericadg">Dribble</a></li>	
		<li><a target="_blank" href="https://twitter.com/erricadg">Twitter</a></li>	
		</ul>
		</div>
	<div id="footer-left">
	<?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> 
	</div>

</div>
</div>
</section>
<a href="#0" class="cd-top">Top</a>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/back-to-top.js"></script>

</body>
</html>
