<?php use Roots\Sage\Titles; ?>

<?php if ( is_page("What is Michelada?") || is_page("Who is Don Roberto?") || is_page("History of Michelada") ) : ?>

<?php if ( has_post_thumbnail) : {
  the_post_thumbnail();
} endif; ?>

<?php endif; ?>

<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
</div>
