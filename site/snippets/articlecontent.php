<?php if($page->hasImages()): ?>
	<div class="image-wrap"><img class="header-image" src="<?php echo $page->images()->first()->url(); ?>" /></div>
	<div class="image-opacity-fade"></div>
	<div class="image-opacity"></div>
	<div class="title-wrap">
		<h1 class="page-title"><?php echo html($page->title()) ?></h1>
		<h2 class="page-subheader"><?php echo html($page->subheader()) ?></h2>
		<div class="page-meta">
			<!-- bread posts -->
			<?php if($page->template() == 'blogarticle.bread'): ?> 
				<div class="post-icon post-icon-detail post-icon-bread"></div>
			<!-- sweet posts -->
			<?php elseif($page->template() == 'blogarticle.sweet'): ?> 
				<div class="post-icon post-icon-detail post-icon-sweet"></div>
			<!-- savory posts -->
			<?php elseif($page->template() == 'blogarticle.savory'): ?> 
				<div class="post-icon post-icon-detail post-icon-savory"></div>
			<?php endif ?> 
			<div class="post-date post-date-detail">Written on <?php echo $page->date('m-d-y') ?></div>
		</div>
	</div>

<?php endif ?>

<div class="false-background">
	<section class="content blogarticle">
		<article>
			<?php echo kirbytext($page->text()) ?>
		</article>
		<ul class="tags">
			<?php foreach(str::split($page->tags()) as $tag): ?>
			<li><a href="<?php echo url('/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
			<?php endforeach ?>
		</ul>
	</section>
</div>