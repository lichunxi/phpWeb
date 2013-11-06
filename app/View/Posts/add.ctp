<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => false,
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well form-inline'
));
echo $this->Form->input('title');
echo $this->Form->input('body', array (
	'rows' => '3'
));
echo $this->Form->end('Save Post');
?>