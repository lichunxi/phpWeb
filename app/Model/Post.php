<?php

/*
 * Created on 2013��11��5��
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

class Post extends AppModel {
	public $validate = array (
		'title' => array (
			'rule' => 'notEmpty'
		),
		'body' => array (
			'rule' => 'notEmpty'
		)
	);
}
?>
