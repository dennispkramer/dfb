<?php snippet('header') ?>

<div class="default-title-wrap">
  <h1 class="page-title"><?php echo html($page->title()) ?></h1>
</div>

<section class="content">

	<h2><?php echo html($page->subtitle()) ?></h2>
	<?php echo kirbytext($page->text()) ?>
</section>

<?php snippet('footer') ?>