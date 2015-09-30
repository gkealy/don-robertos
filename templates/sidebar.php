<?php if ( is_page("What is Michelada?") || is_page("Who is Don Roberto?") || is_page("History of Michelada") ) : ?>
  <div class="sidebar-banner visible-lg">
  	<img class="carousel-banner-logo"src="<?= get_template_directory_uri(); ?>/dist/images/carousel-banner-logo.png" alt="Don Robertos Michelada Mix">
  	<div class="carousel-banner-buttons">
  		<a href="#"><button type="button" class="btn btn-primary">Order Michelada Mix Bottle</button></a>
  		<a href="#"><button type="button" class="btn btn-primary">Order Michelada Mix Case</button></a>
  		<a href="#"><button type="button" class="btn btn-primary">Order Beer Salt AMOR Case</button></a>
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
