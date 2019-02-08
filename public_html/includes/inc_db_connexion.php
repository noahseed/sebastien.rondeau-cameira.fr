<?php
	// Connexion à la base de données avec PDO
	$dsn = 'mysql:host=localhost;dbname=rondeaucdlblog;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'rondeaucdlblog', '442ShpXOvMEmPzBo');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
