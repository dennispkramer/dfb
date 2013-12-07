<?php snippet('header') ?>

<div class="header-image"></div>
<div class="default-header">
  <img class="page-title" src="/assets/images/logo.png"></img>
</div>
<div class="false-background">
  <section class="content blog">

    <!-- display posts with a specific tag -->
    <?php if(param('tag')):

      $articles = $page->children()
                       ->visible()
                       ->filterBy('tags', param('tag'), ',')
                       ->flip()
                       ->paginate(10);
    ?>

    <h2>Posts tagged with "<?php echo param('tag'); ?>"</h2>

    <!-- display all posts in blog -->
    <?php else:

      $articles = $page->children()
                       ->visible()
                       ->flip()
                       ->paginate(10);

    ?>

    <!-- display tagcloud -->
    <?php

      $blog = $pages->find('home');
      $tags = tagcloud($blog, array(
      'limit'    => 20,
      'sort'     => 'name',
    ));

    ?>

    <ul class="tags tagcloud">
      <?php foreach($tags as $tag): ?>
        <li<?php if($tag->isActive()) echo ' class="active"' ?>><a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a></li>
      <?php endforeach ?>
    </ul>

    <? endif; ?>
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
</div>

<?php snippet('footer') ?>