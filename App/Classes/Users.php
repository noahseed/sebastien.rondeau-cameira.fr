<?php

class Users extends Db {

    public function find(int $user_id) {
        $sql = "SELECT
        `user_id`,
        `firstname`,
        `lastname`,
        `username`,
        `date_ajout`
        FROM `users`
        WHERE `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':user_id',
            $user_id, PDO::PARAM_INT
        );

        if($stmt->execute()) {
            $result = $stmt->fetch();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function findAll() {
        $sql = "SELECT
        `user_id`,
        `firstname`,
        `lastname`,
        `username`,
        `date_ajout`
        FROM `users`
        ORDER BY `firstname`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute()) {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function add(User $user) : int {
        $sql = "INSERT INTO `users`
            (
                `user_id`,
                `firstname`,
                `lastname`,
                `username`,
                `date_ajout`
            )
            VALUES
            (
                :user_id,
                :firstname,
                :lastname,
                :username,
                NOW()
            )";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindvalue(':user_id', $user->user_id);
        $stmt->bindvalue(':firstname', $user->firstname);
        $stmt->bindvalue(':lastname', $user->lastname);
        $stmt->bindvalue(':username', $user->username);

        $result = 0;

        if($stmt->execute()) {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function edit(User $user) {
        $sql = "UPDATE
            `users`
            SET
            `firstname` = :firstname,
            `lastname` = :lastname,
            `username` = :username
            WHERE
            `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':user_id', $user->user_id);
        $stmt->bindValue(':firstname', $user->firstname);
        $stmt->bindValue(':lastname', $user->lastname);
        $stmt->bindValue(':username', $user->username);

        if($stmt->execute()) {
            $result = $stmt->rowCount();
        }
        
        $stmt->closeCursor();

        return $result;
    }

}