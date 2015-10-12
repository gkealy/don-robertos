<?php if ( !is_front_page() && !is_home() ) : ?>
  <div class="sidebar-banner visible-lg">
  	<img class="img-responsive sidebar-banner-logo"src="<?= get_template_directory_uri(); ?>/dist/images/carousel-banner-logo.png" alt="Don Robertos Michelada Mix">
  	<div class="sidebar-banner-buttons">
  		<a href="http://www.amazon.com/gp/product/B00H9LLYAI?gwSec=1&redirect=true&ref_=s9_simh_gw_p325_d0_i1"><button type="button" class="btn btn-primary">Michelada Mix Bottle</button></a><br>
  		<a href="http://www.amazon.com/Don-Robertos-Premium-Michelada-Bottles/dp/B00DULUYDO/ref=pd_sim_sbs_325_1?ie=UTF8&refRID=11V2AKMMJPANA9GH6XD0&dpID=41oZlDv%2BUJL&dpSrc=sims&preST=_AC_UL160_SR160%2C160_"><button type="button" class="btn btn-primary">Michelada Mix Case</button></a><br>
  		<a href="http://www.amazon.com/Don-Robertos-Premium-Beer-Salt/dp/B00UGJ3L1U/ref=pd_sim_sbs_325_3?ie=UTF8&refRID=02Z8C9TXY7W0PMW7YDWR&dpID=415gNPMXEpL&dpSrc=sims&preST=_AC_UL160_SR107%2C160_"><button type="button" class="btn btn-primary">Beer Salt AMOR Case</button></a>
  	</div>
  </div>
<?php elseif ( is_page("Where Can I Buy Don Robertos?") ) : ?>
  <div class="sidebar-banner-retailers visible-lg">
  	<img class="carousel-banner-logo"src="<?= get_template_directory_uri(); ?>/dist/images/carousel-banner-logo.png" alt="Don Robertos Michelada Mix">
  	<div class="carousel-banner-buttons">
  		<a href="#"><button type="button" class="btn btn-primary">Order Michelada Mix Bottle</button></a>
  		<a href="#"><button type="button" class="btn btn-primary">Order Michelada Mix Case</button></a>
  		<a href="#"><button type="button" class="btn btn-primary">Order Beer Salt AMOR Case</button></a>
  	</div>
  </div>

<?php endif; ?>
<?php dynamic_sidebar('sidebar-primary'); ?>
