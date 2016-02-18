  </div> <!-- #container -->

  <div id="footer-wrap" class="clearfix">
    <footer>
      <ul>
        <?php wp_nav_menu( array('theme_location' => 'footer', 'container' => '', 'items_wrap' => '%3$s' )); ?> 
        <li><a href="http://www.linkedin.com/company/xg-sciences" target="_blank"><i class="icon-linkedin-sign"></i></a></li>
      </ul><br />
      <p>&copy; <?php echo date('Y'); ?> XG Sciences <span>&middot;</span>  3101 Grand Oak Drive - Lansing, MI 48911 <span>&middot;</span> <a href="http://www.hiledesign.com" target="_blank">Website Design by Hile Design</a></p>
    </footer>
  </div>

<?php	wp_footer(); ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


</body>
</html>
