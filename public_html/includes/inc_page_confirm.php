<?php
    // On récupère les variables
    $user_id = $_GET['id'];
    $token = $_GET['token'];

    $users = new Users();

    $user = $users->find($user_id);

    if($user && $user['user_confirmation_token'] == $token){
        $users->confirmationToken($user_id);

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
