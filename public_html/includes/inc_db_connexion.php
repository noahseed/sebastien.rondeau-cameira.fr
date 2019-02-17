<?php
	// Connexion à la base de données avec PDO
	$dsn = 'mysql:host=localhost;port=3306;dbname=sebastien;charset=utf8';
    $pdo = new PDO($dsn, 'sebastien', '6spCeWFu8smHKY51');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
