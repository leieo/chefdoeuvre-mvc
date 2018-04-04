<?php

class Project {
	public static function create($user_id, $title) {

		require __DIR__.'/../database.php';

		$creator = $database->prepare('INSERT INTO project(user_id, title) VALUES (:user_id, :title)');

		$creator->execute(array(
				'user_id' => $user_id,
				'title' => $title
			));

		echo 'Le projet \'' . $title . '\' vient d\'être créé !';

		$creator->closeCursor();
	}
}