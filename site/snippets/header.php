<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="viewport" content="initial-scale=1">

  <?php snippet('less') ?>

  <?php echo js('assets/js/jquery-1.10.2.min.js') ?>
  <?php echo js('assets/js/control.js') ?>

</head>

<body>

  <header>
    <?php snippet('menu') ?>
  </header>