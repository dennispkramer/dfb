<?php snippet('header') ?>

<!-- search plugin -->
<?php

$search = new search(array(
  'searchfield' => 'q'
));

$results = $search->results();

?>

<!-- search form -->
<form action="<?php echo thisURL() ?>">
  <input type="text" placeholder="Search…" name="q" />
  <input type="submit" value="Search" />
</form>

<!-- search results -->
<?php if($results): ?>
<ul>
  <?php foreach($results as $result): ?>
  <li><a href="<?php echo $result->url() ?>"><?php echo $result->title() ?></a></li>
  <?php endforeach ?>
</ul>
<?php endif ?>

<section class="content blog">
  
  
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article>
    <?php if($article->template() == 'blogarticle.bread'): ?> 
    	<div class="post-icon post-icon-bread"></div>
    	<div class="post-header">
  	    <a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
  	    <?php echo $article->date('Y-m-d') ?>
      </div>
      <p><?php echo excerpt($article->text(), 300) ?></p>

    <?php elseif($article->template() == 'blogarticle.sweet'): ?> 
      <div class="post-icon post-icon-sweet"></div>
      <div class="post-header">
        <a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
        <?php echo $article->date('Y-m-d') ?>
      </div>
      <p><?php echo excerpt($article->text(), 300) ?></p>

    <?php elseif($article->template() == 'blogarticle.savory'): ?> 
      <div class="post-icon post-icon-savory"></div>
      <div class="post-header">
        <a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
        <?php echo $article->date('Y-m-d') ?>
      </div>
      <p><?php echo excerpt($article->text(), 300) ?></p>

      <?php endif ?> 
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>