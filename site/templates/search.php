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
  <?php $variableName = $_GET['q']; ?>
  <?php if($articles): ?>
  <h2>Search results for "<?php echo $variableName; ?>"</h2>
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
<?php elseif($articles == 0): ?>
  <h2>Sorry, no posts match your search for "<?php echo $variableName; ?>"</h2>

  <?php endif ?>
</section>

<?php snippet('footer') ?>