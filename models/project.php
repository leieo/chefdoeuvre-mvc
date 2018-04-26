<?php

class Project {

	public static function create($user_id, $title) {

		require __DIR__.'/database.php';

		$create = $database->prepare('INSERT INTO project(user_id, title) VALUES (:user_id, :title)');

		$create->execute(array(
				'user_id' => $user_id,
				'title' => $title
			));

		echo 'Le projet \'' . $title . '\' vient d\'être créé !';

		$create->closeCursor();
	}


/* ... A MODIFIER ...
	public static function browse($userid) {

		require __DIR__.'/database.php';

		// je récupère dans la bdd toutes les entrées de la table project avec le bon userId
		$browse = $database->query('SELECT * FROM project');
		$test = $browse->fetch();
		return $test;
	}

... A MODIFIER ... */

}