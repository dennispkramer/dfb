<?php snippet('header') ?>
<section class="content">

	<h2><?php echo html($page->subtitle()) ?></h2>
	<?php echo kirbytext($page->text()) ?>

</section>

<?php snippet('footer') ?>