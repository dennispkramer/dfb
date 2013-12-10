<?php if($page->hasImages()): ?>
	<div class="image-wrap"><img class="header-image" src="<?php echo $page->images()->first()->url(); ?>" /></div>
	<div class="image-opacity-fade"></div>
	<div class="image-opacity"></div>
	<h1 class="page-title"><?php echo html($page->title()) ?></h1>
	<!-- bread posts -->
	<?php if($page->template() == 'blogarticle.bread'): ?> 
		<div class="post-icon post-icon-detail post-icon-bread"></div>
	<div class="post-date post-date-detail">Written on <?php echo $page->date('m-d-y') ?></div>

	<!-- sweet posts -->
	<?php elseif($page->template() == 'blogarticle.sweet'): ?> 
		<div class="post-icon post-icon-detail post-icon-sweet"></div>
	<div class="post-date post-date-detail">Written on <?php echo $page->date('m-d-y') ?></div>

	<!-- savory posts -->
	<?php elseif($page->template() == 'blogarticle.savory'): ?> 
		<div class="post-icon post-icon-detail post-icon-savory"></div>
	<div class="post-date post-date-detail">Written on <?php echo $page->date('m-d-y') ?></div>

	<?php endif ?> 
<?php endif ?>

<div class="false-background">
	<section class="content blogarticle">
		<article>
			<?php echo kirbytext($page->text()) ?>
		</article>
		<ul class="tags">
			<?php foreach(str::split($page->tags()) as $tag): ?>
			<li><a href="<?php echo url('/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></li>
			<?php endforeach ?>
		</ul>
	</section>
</div>