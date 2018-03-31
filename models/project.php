<?php

function create() {

	require __DIR__.'/../database.php';

	echo 'first step ok';

	}

class Project {

	public function create() {

		require __DIR__.'/../database.php';

		echo 'first step youpi';

		$user_id = 1;
		$title = 'v1 working';

		$create = $database->prepare('INSERT INTO project(user_id, title) VALUES (:user_id, :title)');

		$create->execute(array(
			'user_id' => $user_id,
			'title' => $title
		));

		echo ' - ' . $user_id . ' ' . $title ;

		$create->closeCursor();
	}
}