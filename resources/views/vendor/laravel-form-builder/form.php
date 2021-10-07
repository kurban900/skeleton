<?php if ($showStart): ?>
    <?= Form::open(array_merge($formOptions, ['id' => $formOptions['id'] ?? 'form'])) ?>
<?php endif; ?>

<?php if ($showFields): ?>
    <?php foreach ($fields as $field): ?>
    	<?php if( ! in_array($field->getName(), $exclude) ) { ?>
        	<?= $field->render() ?>
		<?php } ?>
    <?php endforeach; ?>
<?php endif; ?>

<?php if ($showEnd): ?>
    <?= Form::close() ?>
<?php endif; ?>
