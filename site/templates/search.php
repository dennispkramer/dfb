<?php snippet('header') ?>


<section class="content">

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

  <!-- search results -->
  <?php $query = $_GET['q']; ?>
    <?php if($articles): ?>
      <h2>Search results for "<?php echo $query; ?>"</h2>
      <!-- display article list -->
      <?php snippet('articlelist', array('articles' => $articles)); ?>
    <?php elseif($articles == 0): ?>
      <h2>Sorry, no posts match your search for "<?php echo $query; ?>"</h2>
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

<?php snippet('footer') ?>