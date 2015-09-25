<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="col-md-3">
      <?php dynamic_sidebar('sidebar-footer-1'); ?>
    </div>
    <div class="col-md-3">
      <?php dynamic_sidebar('sidebar-footer-2'); ?>
    </div>
    <div class="col-md-3">
      <?php dynamic_sidebar('sidebar-footer-3'); ?>
    </div>
    <div class="col-md-3">
      <img class="footer-logo" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" alt="Don Robertos Michelada Mix">
      <?php dynamic_sidebar('sidebar-footer-4'); ?>
  </div>
  </div>
</footer>
