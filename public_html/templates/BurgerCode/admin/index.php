<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="noindex,nofollow">
    <meta name="Content-language" content="french">
    <meta name="Rating" content="General">
    <meta name="revisit-after" content="1 month">
    <meta name="author" content="Sébastien RONDEAU-CAMEIRA">
    <title>Burger Code</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Holtwood+One+SC">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
    <div class="container admin">
        <div class="row">
            <h1><strong>Liste des items </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
<?php
                        require 'database.php';

                        $db = Database::connect();
                        $statement = $db->query('SELECT items.id, items.name, items.description, items.price, categories.name
                        AS category
                        FROM items LEFT JOIN categories ON items.category = categories.id
                        ORDER BY items.id DESC');

                        while($item = $statement->fetch()){
?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['description']; ?></td>
                        <td><?php echo number_format((float)$item['price'], 2, '.', ''); ?></td>
                        <td><?php echo $item['category']; ?></td>
                        <td class="td">
                            <a href="view.php?id=<?php echo $item['id']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                            <a href="update.php?id=<?php echo $item['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                            <a href="delete.php?id=<?php echo $item['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                        </td>
                    </tr>
<?php

    }

    Database::disconnect();

?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>