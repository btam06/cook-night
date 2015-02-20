<?php namespace Inkwell\HTML;

	$this->expand('content', 'master.html');
	$this->set('title', 'Forum (High in Fruit Juice)');

	?>

	<div>
		<h3><?= $this('category')?></h3>
		<ul>

		<?php foreach ($this('records') as $record) { ?>
			<li>
				
				<a href="#"><?= $record->encodeTitle()?></a>
			</li>
		<?php } ?>

		</ul>

	</div>