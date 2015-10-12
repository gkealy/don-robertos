<?php use Roots\Sage\Titles; ?>

<?php if ( !is_front_page() && !is_home() ) : ?>

<?php if ( has_post_thumbnail) : {
  the_post_thumbnail();
} endif; ?>

<?php endif; ?>

<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
</div>
