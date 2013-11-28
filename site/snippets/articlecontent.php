<section class="content blogarticle">
	<article>
		<h2><?php echo html($page->title()) ?></h2>
		<?php echo $page->date('Y-m-d') ?>
		<?php echo kirbytext($page->text()) ?>
	</article>
	<ul class="tags">
		<?php foreach(str::split($page->tags()) as $tag): ?>
		<li><a href="<?php echo url('/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
		<?php endforeach ?>
	</ul>
</section>