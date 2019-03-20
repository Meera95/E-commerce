<?php
/*Main footer file*/

?>

<footer class="footer">
<nav>
<?php

wp_nav_menu( $arg = array(
    'menu_class' => 'footer-navigation',
    'theme_location' => 'footer'
));

?>
</nav>
<p class ="copyright">
<small> All content on this site &copy; Hem to Hand </small>
</p>
</footer>
<?php wp_footer(); ?>
