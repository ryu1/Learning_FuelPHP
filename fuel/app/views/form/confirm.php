<p>
	名前:
	<?php echo $input['name']; ?>
</p>
<p>
	コメント:
	<?php echo $input['comment']; ?>
</p>

<?php
echo \Fuel\Core\Form::open('form/');
echo \Fuel\Core\Form::hidden('name',	$input['name']);
echo \Fuel\Core\Form::hidden('email',	$input['email']);
echo \Fuel\Core\Form::hidden('comment',	$input['comment']);
?>

<div class="actions">
	<?php echo \Fuel\Core\Form::submit('submit1', '修正'); ?>
</div>
<?php echo \Fuel\Core\Form::close(); ?>
<?php
echo \Fuel\Core\Form::open('form/send');

// CSRF対策
echo \Fuel\Core\Form::hidden(Config::get('security.csrf_token_key'), \Fuel\Core\Security::fetch_token());

echo \Fuel\Core\Form::hidden('name', $input['name'], array('id' => 'name'));
echo \Fuel\Core\Form::hidden('email', $input['email'], array('id' => 'email'));
echo \Fuel\Core\Form::hidden('comment', $input['comment'], array('id' => 'comment'));
%>

<div class="actions">
	<?php echo \Fuel\Core\Form::submit('submit2', '送信'); %>
</div>
<?php echo \Fuel\Core\Form::close() %>
