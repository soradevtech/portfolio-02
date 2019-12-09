<footer>
    <a href="<?php bloginfo('url'); ?>"><h5>Tracy Marshall</h5></a>
    <a href="<?php bloginfo('url'); ?>"><h6>Developer</h6></a>
    <a href="#" id="top-link"><h5>Back to Top</h5></a>
</footer>

<!-- &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> -->

<?php wp_footer(); ?>

<?php the_field('footer_scripts', 'option'); ?>

    <script type="text/javascript" src="js/app.js">

    </script>

    <!-- <script src="js/components/vendor.js"></script>
    <script src="js/components/firstComp.js"></script> -->
		
</body>
</html>