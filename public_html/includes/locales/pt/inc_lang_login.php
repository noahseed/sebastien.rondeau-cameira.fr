<?php require('includes/functions.php'); ?>
<?php // Redirection si déjà connecté
    if(isset($_SESSION['auth'])) {
        header('Location: /?page=account');
        exit();
    }
?>
<?php // Traitement du formulaire
    if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {

        $req = $pdo->prepare("SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL");
        $req->execute(['username' => $_POST['username']]);
        $user = $req->fetch();

        if(password_verify($_POST['password'], $user->password)) {
            $_SESSION['auth'] = $user;

            if($_POST['remember']) {
            	$remember_token = str_random(250);
            	$req = $pdo->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
            	$req->execute([$remember_token, $user->id]);
            	setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'seb'), time() + 60 * 60 * 24 * 7);
            }

            header('Location: /?page=account');
            exit();
        } else {
            $_SESSION['flash']['error'] = "Nome de utilizador ou senha incorretos.";
        }
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
                <form method="POST">
                    <table>
                        <tr>
                            <th><label for="username">Nome de utilizador ou Email</label></th>
                            <td><input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>" required /></td>
                        </tr>
                        <tr>
                            <th><label for="password">Senha</label></th>
                            <td><input type="password" name="password" id="password" required /></td>
                        </tr>
                        <tr>
                            <th><label for="remember">Lembrar-se de mim</label></th>
                            <td><input type="checkbox" name="remember" id="remember" value="1" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Conectar-se</button></td>
                        </tr>
                    </table>
                </form>
                <hr />
<?php echo $text; ?>
            </div>
        </article>
