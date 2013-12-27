<?php foreach($articles as $article): ?>
  <article>
  	<div class="post-title">
  	    <a href="<?php echo $article->url() ?>"><h3><?php echo html($article->title()) ?></h3></a>
    </div>
    <span class="post-date">Written on <?php echo $article->date('m-d-y') ?></span>
    <a href="<?php echo $article->url() ?>">
      <div class="image-preview">  
        <?php
          $i = 0;
          foreach($article->images() as $image):
            if ($i == 3) { break; }
        ?>
          <span><img src="<?php echo $image->url() ?>" /></span>
        <? $i++; endforeach ?>
      </div>
    </a>
    <p><?php echo excerpt($article->text(), 300) ?><a href="<?php echo $article->url() ?>" class="read-more"> read more</a></p>
  </article>
<?php endforeach ?>