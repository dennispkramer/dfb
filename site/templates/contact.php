<?php snippet('header') ?>

<div class="header-image">
	<h1><?php echo html($page->title()) ?></h1>
</div>

<div class="false-background">
	<section class="content">

		<h2><?php echo html($page->subtitle()) ?></h2>
		<?php echo kirbytext($page->text()) ?>
	</section>
</div>

<?php snippet('footer') ?>