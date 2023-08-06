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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container site">
		<h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
		<nav>
			<ul class="nav nav-pills">
<?php
	require 'admin/database.php';

	$db = Database::connect();
	$statement = $db->query('SELECT * FROM categories');
	$categories = $statement->fetchAll();

	foreach ($categories as $category) {
		if ($category['id'] == '1') {
?>
				<li role="presentation" class="active"><a href="#<?php echo $category['id']; ?>" data-toggle="tab"><?php echo $category['name']; ?></a></li>
<?php
		} else {
?>
				<li role="presentation"><a href="#<?php echo $category['id']; ?>" data-toggle="tab"><?php echo $category['name']; ?></a></li>
<?php
		}
	}
?>
			</ul>
		</nav>
		<div class="tab-content">
<?php
	foreach ($categories as $category) {
		if ($category['id'] == '1') {
?>
			<div class="tab-pane active" id="<?php echo $category['id']; ?>">
<?php
		} else {
?>
			<div class="tab-pane" id="<?php echo $category['id']; ?>">
<?php
		}
?>
				<div class="row">
<?php
		$statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
		$statement->execute(array($category['id']));

		while ($item = $statement->fetch()) {
?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/<?php echo $item['image']; ?>" alt="...">
							<div class="price"><?php echo number_format($item['price'], 2, '.', ''); ?> €</div>
							<div class="caption">
								<h4><?php echo $item['name']; ?></h4>
								<p><?php echo $item['description']; ?></p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
							</div>
						</div>
					</div>
<?php
		}
?>
				</div>
			</div>
<?php
	}
	Database::disconnect();
?>
		</div>
	</div>
</body>
</html>