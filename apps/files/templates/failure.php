<?php if (isset($_['content'])): ?>
	<?php print_unescaped($_['content']) ?>
<?php else: ?>
	<ul>
		<li class="error">
			<?php p($l->t('Operation failed')); ?><br>
			<p class="hint"><?php p($_['errorMessage']); ?></p>
			<p class="hint"><a href="<?php p(\OC::$server->getURLGenerator()->linkTo('', 'index.php')) ?>"><?php p($l->t('You can click here to return to %s.', array($theme->getName()))); ?></a></p>
		</li>
	</ul>
<?php endif; ?>
