<?php namespace Inkwell\HTML;

	$this->expand('content', 'master.html');
	$this->set('title', 'Forum (High in Fruit Juice)');

	?>

	<div>

		<ul>

		<?php foreach ($this('categories') as $category) { ?>
			<li><?= $category->encodeName()?></li>
		<?php } ?>

		</ul>

	</div>