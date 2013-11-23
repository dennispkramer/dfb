<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
    <h2><?php echo html($page->title()) ?></h2>
    <?php echo $page->date('Y-m-d') ?>
    <?php echo kirbytext($page->text()) ?>

  </article>
</section>

<?php snippet('footer') ?>