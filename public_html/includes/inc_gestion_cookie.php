<?php // Si cookie
    if(isset($_COOKIE['remember']) && !isset($_SESSION['auth'])) {
        $remember_token = $_COOKIE['remember'];
        $parts = explode('==', $remember_token);
        $user_id = $parts[0];

        $user = $users->find($user_id);

        if($user) {
            $expected = $user_id . '==' . $user['remember_token'] . sha1($user_id . 'seb');
            if($expected == $remember_token) {
                $_SESSION['auth'] = $user;
                setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
            } else {
                setcookie('remember', null, -1);
            }
        } else {
            setcookie('remember', null, -1);
        }
    }
