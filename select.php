<?php

$SQLitePDO = new PDO('sqlite:database/posts.db');

$result = $SQLitePDO->query("SELECT post FROM post");

foreach($result as $row) {
	print $row['post'] . '<br>';
}

?>
