<div class="viva">
<h1 style="text-align:center">Celebrate Life! Viva Michelada!</h1>
<?php
if (has_nav_menu('viva_navigation')) :
  wp_nav_menu(['theme_location' => 'viva_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav nav-tabs nav-justified']);
endif;
?>
</div>
