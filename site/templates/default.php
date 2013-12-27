<?php snippet('header') ?>
  <!-- display posts with a specific tag -->
  <?php if(param('tag')):

    $articles = $page->children()
                     ->visible()
                     ->filterBy('tags', param('tag'), ',')
                     ->flip()
                     ->paginate(10);
  ?>
  <div class="default-title-wrap">
    <h1 class="page-title">Posts tagged with "<?php echo param('tag'); ?>"</h1>
  </div>

  <!-- display all posts in blog -->
  <?php else:

    $articles = $page->children()
                     ->visible()
                     ->flip()
                     ->paginate(10);

  ?>
  <div class="default-header">
    <img class="page-title" src="/assets/images/logo.png"></img>
  </div>

  <!-- display tagcloud -->
  <?php

    $blog = $pages->find('home');
    $tags = tagcloud($blog, array(
    'limit'    => 20,
    'sort'     => 'name',
  ));

  ?>
  <section class="content blog">
    <ul class="tags tagcloud">
      <?php foreach($tags as $tag): ?>
        <li<?php if($tag->isActive()) echo ' class="active"' ?>><a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a></li>
      <?php endforeach ?>
    </ul>
  </section>

  <? endif; ?>
  <section class="content blog">
  <!-- display article list -->
  <?php snippet('articlelist', array('articles' => $articles)); ?>

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