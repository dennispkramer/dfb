<?php 

// main menu items
$items = $pages->visible();

// only show the menu if items are available
if($items->count() > 0): 

?>
<nav class="menu">
	<div class="content">
		<ul>
			<?php foreach($items as $item): ?>
			<li><a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
			<?php endforeach ?>
		</ul>
		<!-- search form -->
		<form action="<?php echo url('search') ?>" method="get">
			<input type="text" placeholder="Search…" name="q" />
			<input type="submit" value="Search" />
		</form>
	</div>
</nav>
<?php endif ?>