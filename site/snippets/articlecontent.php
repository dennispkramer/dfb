<section class="content blogarticle">
	<article>
		<!-- bread posts -->
		<?php if($page->template() == 'blogarticle.bread'): ?> 
			<div class="post-icon post-icon-bread"></div>
			<div class="post-title">
			    <h3><?php echo html($page->title()) ?></h3>
			</div>
		<?php echo $page->date('m-d-y') ?>
		<?php echo kirbytext($page->text()) ?>

		<!-- sweet posts -->
		<?php elseif($page->template() == 'blogarticle.sweet'): ?> 
			<div class="post-icon post-icon-sweet"></div>
			<div class="post-title">
			    <h3><?php echo html($page->title()) ?></h3>
			</div>
		<?php echo $page->date('m-d-y') ?>
		<?php echo kirbytext($page->text()) ?>

		<!-- savory posts -->
		<?php elseif($page->template() == 'blogarticle.savory'): ?> 
			<div class="post-icon post-icon-savory"></div>
			<div class="post-title">
			    <h3><?php echo html($page->title()) ?></h3>
			</div>
		<?php echo $page->date('m-d-y') ?>
		<?php echo kirbytext($page->text()) ?>

		<?php endif ?> 
	</article>
	<ul class="tags">
		<?php foreach(str::split($page->tags()) as $tag): ?>
		<li><a href="<?php echo url('/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></li>
		<?php endforeach ?>
	</ul>
</section>