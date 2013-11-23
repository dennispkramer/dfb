<?php snippet('header') ?>

<section class="content blog">
  
  
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article>
  	<div class="post-icon"></div>
  	<div class="post-header">
	    <a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
	    <?php echo $article->date('Y-m-d') ?>
	</div>
    <p><?php echo excerpt($article->text(), 300) ?></p>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>