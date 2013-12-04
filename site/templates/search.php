<?php snippet('header') ?>

<div class="header-image">
    <!-- search plugin -->
    <?php

    $search = new search(array(
      'searchfield' => 'q',
      'words' => true,
      'score' => array('title' => 4, 'tags' => 2, 'text' => 1),
      'ignore' => array('error', 'about', 'contact'),
      'paginate' => 10
    ));

    $articles = $search->results();

    ?>
    <?php $query = $_GET['q']; ?>
      <?php if($articles): ?>
        <h1>Search results for "<?php echo $query; ?>"</h1>
      <?php elseif($articles == 0): ?>
        <h1>Sorry, no posts match your search for "<?php echo $query; ?>"</h1>
    <?php endif ?>
</div>

<div class="false-background">
  <section class="content">


    <!-- search results -->
      <?php if($articles): ?>
        <!-- display article list -->
        <?php snippet('articlelist', array('articles' => $articles)); ?>
      <?php elseif($articles == 0): ?>
        <p>Feel free to search again or use the tags below:</p>
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

      <?php endif ?>
  </section>
</div>

<?php snippet('footer') ?>