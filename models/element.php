<?php

class Element {
	public static function create($user_id, $name, $content) {

		require __DIR__.'/database.php';

		$creator = $database->prepare('INSERT INTO element(user_id, name, content) VALUES (:user_id, :name, :content)');

		$creator->execute(array(
				'user_id' => $user_id,
				'name' => $name,
				'content' => $content
			));

		echo 'L\'élément \'' . $name . '\' vient d\'être ajouté !';

		$creator->closeCursor();
	}
}