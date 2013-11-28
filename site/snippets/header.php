<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php snippet('less') ?>

</head>

<body>

  <header>
      <h1><a href="<?php echo url() ?>">Dinner For Breakfast</a></h1>
      <?php snippet('menu') ?>
  </header>