<?php
    // On récupère les variables
    $user_id = $_GET['id'];
    $token = $_GET['token'];

    $req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute([$user_id]);

    $user = $req->fetch();

    if($user && $user->confirmation_token == $token){
        $req = $pdo->prepare('UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ?');
        $req->execute([$user_id]);

        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Votre compte a bien été validé.";
        header('Location: /?page=account');
        exit();
    } else {
        $_SESSION['flash']['error'] = "Ce token n'est plus valide.";
        header('Location: /?page=login');
        exit();
    }
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php echo $text; ?>
            </div>
        </article>
