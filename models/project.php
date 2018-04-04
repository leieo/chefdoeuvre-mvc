<?php

function createProject($user_id, $title) {

	require __DIR__.'/../database.php';

	$create = $database->prepare('INSERT INTO project(user_id, title) VALUES (:user_id, :title)');

	$create->execute(array(
			'user_id' => $user_id,
			'title' => $title
		));

	echo 'Le projet \'' . $title . '\' vient d\'être créé !';

	$create->closeCursor();
}
/*
class Project {
	public $user_id = 2;
	public $title = 'in progress';

	public function create() {

		require __DIR__.'/../database.php';

		echo 'first step youpi';

		$create = $database->prepare('INSERT INTO project(user_id, title) VALUES (:user_id, :title)');

		echo ' - second step ok';

		echo ' - ' . $user_id . ' ' . $title ;

		$create->execute(array(
			'user_id' => $user_id,
			'title' => $title
		));

		echo ' - third step all right';

		echo ' - ' . $user_id . ' ' . $title ;

		$create->closeCursor();
	}
}
*/