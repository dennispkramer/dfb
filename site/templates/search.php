<?php snippet('header') ?>


<section class="content">

  <!-- search plugin -->
  <?php

  $search = new search(array(
    'searchfield' => 'q',
    'words' => true,
    'score' => array('title' => 4, 'tags' => 2, 'text' => 1)
  ));

  $results = $search->results();

  ?>

  <!-- search results -->
  <ul>
    <?php foreach($results as $result): ?>
    <li>
      <h2><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h2>
      <?php echo $result->date('Y-m-d') ?>
      <p><?php echo excerpt($result->text(), 300) ?><a href="<?php echo $result->url() ?>" class="read-more"> read more</a></p>
    </li>
    <?php endforeach ?>
  </ul>
</section>

<?php snippet('footer') ?>