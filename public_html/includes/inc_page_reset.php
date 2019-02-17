<?php
	if(isset($_GET['id']) && isset($_GET['token'])) {
		$req = $pdo->prepare("SELECT * FROM users WHERE id = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 60 MINUTE)");
		$req->execute([$_GET['id'], $_GET['token']]);
		$user = $req->fetch();
		if($user) {
			if(!empty($_POST)) {
				if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']) {
					$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
					$pdo->prepare('UPDATE users SET password = ?, reset_at = NULL, reset_token = NULL')->execute([$password]);

					$_SESSION['flash']['success'] = "Votre mot de passe a bien été modifié.";
					$_SESSION['auth'] = $user;

					header('Location: /?page=account');
    				exit();
				} elseif($_POST['password'] != $_POST['password_confirm']) {
				    $_SESSION['flash']['error'] = "Les mots de passe ne correspondent pas.";
				}
			}
		} else {
		  $_SESSION['flash']['error'] = "Ce token n'est pas valide.";
			header('Location: /?page=login');
    		exit();
		}
	} else {
    	header('Location: /?page=login');
    	exit();
	}
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php // Affichage des messages flash
    if(isset($_SESSION['flash'])) {
        foreach($_SESSION['flash'] as $type => $message){
            echo ('<p class="'.$type.'">'.$message.'</p>');
        }
    }
    unset($_SESSION['flash']);
?>
                <form action="" method="POST">
                    <table>
                        <tr>
                            <th><label>Mot de passe</label></th>
                            <td><input type="password" name="password" /></td> <!-- required -->
                        </tr>
                        <tr>
                            <th><label>Confirmation du mot de passe</label></th>
                            <td><input type="password" name="password_confirm" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Réinitialiser mon mot de passe</button></td>
                        </tr>
                    </table>
                </form>
                <hr />
<?php echo $text; ?>
            </div>
        </article>
