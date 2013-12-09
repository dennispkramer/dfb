<?php foreach($articles as $article): ?>
  <article>
  <!-- bread posts -->
  <?php if($article->template() == 'blogarticle.bread'): ?> 
  	<div class="post-icon post-icon-bread"></div>
  	<div class="post-title">
  	    <a href="<?php echo $article->url() ?>"><h3><?php echo html($article->title()) ?></h3></a>
    </div>
    <?php echo $article->date('m-d-y') ?>
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

  <!-- sweet posts -->
  <?php elseif($article->template() == 'blogarticle.sweet'): ?> 
    <div class="post-icon post-icon-sweet"></div>
    <div class="post-title">
        <a href="<?php echo $article->url() ?>"><h3><?php echo html($article->title()) ?></h3></a>
    </div>
    <?php echo $article->date('m-d-y') ?>
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

  <!-- savory posts -->
  <?php elseif($article->template() == 'blogarticle.savory'): ?> 
    <div class="post-icon post-icon-savory"></div>
    <div class="post-title">
        <a href="<?php echo $article->url() ?>"><h3><?php echo html($article->title()) ?></h3></a>
    </div>
    <?php echo $article->date('m-d-y') ?>
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

    <?php endif ?> 
  </article>
<?php endforeach ?>