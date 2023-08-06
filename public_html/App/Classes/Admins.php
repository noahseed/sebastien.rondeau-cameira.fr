<?php

class Admins extends Db {

    public function find(int $user_id) {
        $sql = "SELECT
        `user_id`,
        `firstname`,
        `lastname`,
        `username`,
        `is_admin`,
        `last_msg`
        FROM `admins`
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
        `is_superadmin`
        FROM `admins`
        ORDER BY `firstname`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute()) {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function findAllSuperAdmins() {
        $sql = "SELECT
        `user_id`,
        `firstname`,
        `lastname`,
        `username`,
        `is_superadmin`,
        `last_msg`
        FROM `admins`
        WHERE `is_superadmin` = 1";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute()) {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function add(Modo $user) : int {
        $sql = "INSERT INTO `admins`
            (
                `user_id`,
                `firstname`,
                `lastname`,
                `username`,
                `is_admin`,
                `last_msg`
            )
            VALUES
            (
                :user_id,
                :firstname,
                :lastname,
                :username,
                0,
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

    public function edit(int $user_id) {
        $sql = "UPDATE
            `admins`
            SET
            `last_msg` = NOW()
            WHERE
            `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':user_id', $user_id);

        if($stmt->execute()) {
            $result = $stmt->rowCount();
        }
        
        $stmt->closeCursor();

        return $result;
    }

    public function editName(Modo $user) {
        $sql = "UPDATE
            `admins`
            SET
            `firstname` = :firstname,
            `lastname` = :lastname,
            `username` = :username,
            `last_msg` = NOW()
            WHERE
            `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindvalue(':user_id', $user->user_id);
        $stmt->bindvalue(':firstname', $user->firstname);
        $stmt->bindvalue(':lastname', $user->lastname);
        $stmt->bindvalue(':username', $user->username);

        if($stmt->execute()) {
            $result = $stmt->rowCount();
        }
        
        $stmt->closeCursor();

        return $result;
    }

    public function setAdmin(int $user_id) {
        $sql = "UPDATE
            `admins`
            SET
            `is_admin` = 1
            WHERE
            `user_id` = :user_id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':user_id', $user_id);

        if($stmt->execute()) {
            $result = $stmt->rowCount();
        }
        
        $stmt->closeCursor();

        return $result;
    }

}
