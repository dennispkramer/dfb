<?php snippet('header') ?>


<section class="content">

  <!-- search plugin -->
  <?php

  $search = new search(array(
    'searchfield' => 'q',
    'words' => true,
    'score' => array('title' => 4, 'tags' => 2, 'text' => 1)
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

    <?php endif ?>
</section>

<?php snippet('footer') ?>