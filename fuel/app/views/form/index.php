<?php if (isset($html_error)): ?>
<?php echo $html_error; ?>
<?php endif; ?>

<?php echo Form::open('form/confirm') ?>
<p>
	<?php echo \Fuel\Core\Form::label('名前', 'name'); ?>(*) :
	<?php \Fuel\Core\Form::input('name', Input::post('name')) ?>
</p>

<p>
	<?php echo \Fuel\Core\Form::label('メールアドレス', 'email')?>
	<?php echo \Fuel\Core\Form::input('email', Input::post()) ?>
</p>

<p>
	<?php echo \Fuel\Core\Form::label('コメント', 'comment')?>
	<?php echo \Fuel\Core\Form::textarea('comment', Input::post(), array('rows' => 6, 'cols' => 70)); ?>
</p>

<div class="actions">
	<?php echo \Fuel\Core\Form::submit('submit', '確認'); ?>
</div>
<?php echo \Fuel\Core\Form::close(); ?>