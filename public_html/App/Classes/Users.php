<?php

class Users extends Db
{
    public function findRegistred(string $username)
    {
        $sql = "SELECT
        `user_id`,
        `user_username`,
        `user_email`,
        `user_password`,
        `user_confirmation_token`,
        `user_confirmed_at`,
        `user_reset_token`,
        `user_reset_at`,
        `user_remember_token`,
        `user_is_admin`,
        `user_is_vip`
        FROM `users`
        WHERE `user_username` = :username
        OR `user_email` = :username
        AND `confirmed_at` IS NOT NULL";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':username',
            $username
        );

        if($stmt->execute())
        {
            $result = $stmt->fetch();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function find(int $user_id)
    {
        $sql = "SELECT
        `user_id`,
        `user_username`,
        `user_email`,
        `user_password`,
        `user_confirmation_token`,
        `user_confirmed_at`,
        `user_reset_token`,
        `user_reset_at`,
        `user_remember_token`,
        `user_is_admin`,
        `user_is_vip`
        FROM `users`
        WHERE `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':user_id',
            $user_id,
            PDO::PARAM_INT
        );

        if($stmt->execute())
        {
            $result = $stmt->fetch();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function findAll()
    {
        $sql = "SELECT
        `user_id`,
        `user_username`,
        `user_email`,
        `user_password`,
        `user_confirmation_token`,
        `user_confirmed_at`,
        `user_reset_token`,
        `user_reset_at`,
        `user_remember_token`,
        `user_is_admin`,
        `user_is_vip`
        FROM `users`
        ORDER BY `user_username`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function add(User $user) : int
    {
        $sql = "INSERT INTO
        `users`
        (
            `user_username`,
            `user_email`,
            `user_password`,
            `user_confirmation_token`
        )
        VALUES
        (:username, :email, :password, :confirmation_token)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':username', strip_tags($user->user_username));
        $stmt->bindValue(':email', strip_tags($user->user_email));
        $stmt->bindValue(':password', strip_tags($user->user_password));
        $stmt->bindValue(':confirmation_token', strip_tags($user->user_confirmation_token));

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function rememberCookie(string $remember_token, int $user_id)
    {   $sql = "UPDATE
                `users`
                SET `user_remember_token` = :remember_token
                WHERE `user_id` = :user_id";
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':remember_token',
            $remember_token
        );

        $stmt->bindValue(
            ':user_id',
            $user_id
        );

        if($stmt->execute())
        {
            $result = setcookie('remember',
                $user_id . '==' . $remember_token . sha1($user_id . 'seb'),
                time() + 60 * 60 * 24 * 7);
        }

        $stmt->closeCursor();

        return $result;
    }
}
