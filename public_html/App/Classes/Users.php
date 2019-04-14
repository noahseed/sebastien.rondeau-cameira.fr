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
        AND `user_confirmed_at` IS NOT NULL";

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

    public function findUser(string $username)
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
        WHERE `user_username` = :user_username
        OR `user_email` = :user_username";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':user_username',
            $username,
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

    public function add(User $user)
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

        $stmt->bindValue(':username', $user->user_username);
        $stmt->bindValue(':email', $user->user_email);
        $stmt->bindValue(':password', $user->user_password);
        $stmt->bindValue(':confirmation_token', $user->user_confirmation_token);

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function edit(string $user_password, int $user_id)
    {
        $sql = "UPDATE
        `users`
        SET
        `user_password` = :user_password
        WHERE
        `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->bindValue(':user_password', $user_password);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function resetToken(string $reset_token, int $user_id) : int
    {
        $sql = "UPDATE
        `users`
        SET 
        `user_reset_token` = :reset_token,
        `user_reset_at` = NOW()
        WHERE
        `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':reset_token', $reset_token);
        $stmt->bindValue(':user_id', $user_id);

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function confirmationToken(int $user_id) : int
    {
        $sql = "UPDATE
        `users`
        SET 
        `user_confirmation_token` = NULL,
        `user_confirmed_at` = NOW()
        WHERE
        `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':user_id', $user_id);

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
