<?php namespace Inkwell\HTML;

	$this->expand('content', 'master.html');
	$this->set('title', 'Forum (High in Fruit Juice)');

	?>

	<div>

		<ul>

		<?php foreach ($this('records') as $category => $topics) { ?>
			<li>
				<?= $category?>
				<ul>
					<?php foreach ($topics as $topic) { ?>
						<li>
							<a href="<?= $topic->makeUrl()?>"><?= $topic->encodeName() ?></a>
						</li>
					<?php }?>
				</ul>
			</li>
		<?php } ?>

		</ul>

	</div>