<?php snippet('header') ?>


<section class="content blog">
  <!-- display tagcloud -->
  <?php

    $blog = $pages->find('home');
    $tags = tagcloud($blog, array(
    'limit'    => 20,
    'sort'     => 'name',
  ));

  ?>

  <ul class="tagcloud">
    <?php foreach($tags as $tag): ?>
    <li<?php if($tag->isActive()) echo ' class="active"' ?>><a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a></li>
    <?php endforeach ?>
  </ul>

  <!-- display blog posts -->
  <?php if(param('tag')) {

    $articles = $page->children()
                     ->visible()
                     ->filterBy('tags', param('tag'), ',')
                     ->flip()
                     ->paginate(10);
  } else {

    $articles = $page->children()
                     ->visible()
                     ->flip()
                     ->paginate(10);

  } ?>

  <?php foreach($articles as $article): ?>
  
  <article>
    <!-- bread posts -->
    <?php if($article->template() == 'blogarticle.bread'): ?> 
    	<div class="post-icon post-icon-bread"></div>
    	<div class="post-header">
  	    <a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
  	    <?php echo $article->date('Y-m-d') ?>
      </div>
      <p><?php echo excerpt($article->text(), 300) ?><a href="<?php echo $article->url() ?>" class="read-more"> read more</a></p>

    <!-- sweet posts -->
    <?php elseif($article->template() == 'blogarticle.sweet'): ?> 
      <div class="post-icon post-icon-sweet"></div>
      <div class="post-header">
        <a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
        <?php echo $article->date('Y-m-d') ?>
      </div>
      <p><?php echo excerpt($article->text(), 300) ?><a href="<?php echo $article->url() ?>" class="read-more"> read more</a></p>

    <!-- savory posts -->
    <?php elseif($article->template() == 'blogarticle.savory'): ?> 
      <div class="post-icon post-icon-savory"></div>
      <div class="post-header">
        <a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
        <?php echo $article->date('Y-m-d') ?>
      </div>
      <p><?php echo excerpt($article->text(), 300) ?><a href="<?php echo $article->url() ?>" class="read-more"> read more</a></p>

      <?php endif ?> 
  </article>

  <?php endforeach ?>

  <!-- pagination -->
  <?php if($articles->pagination()->hasPages()): ?>
  <nav class="pagination">  

    <?php if($articles->pagination()->hasNextPage()): ?>
    <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
    <?php endif ?>

    <?php if($articles->pagination()->hasPrevPage()): ?>
    <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
    <?php endif ?>

  </nav>
  <?php endif ?>

</section>

<?php snippet('footer') ?>