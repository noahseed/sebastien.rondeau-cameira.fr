<?php

class Pages extends Db {

    public function find(string $callback_data) {
        $sql = "SELECT
        `id`,
        `callback_data`,
        `description`,
        `content`,
        `active`
        FROM `pages`
        WHERE `callback_data` = :callback_data";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':callback_data',
            $callback_data, PDO::PARAM_STR
        );

        if($stmt->execute()) {
            $result = $stmt->fetch();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function findAll() {
        $sql = "SELECT
        `id`,
        `callback_data`,
        `description`,
        `content`,
        `active`
        FROM `pages`
        WHERE `active` IS TRUE";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute()) {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function add(Page $page) : int {
        $sql = "INSERT INTO `pages`
            (
                `id`,
                `callback_data`,
                `description`,
                `content`,
                `active`
            )
            VALUES
            (
                :id,
                :callback_data,
                :description,
                :content,
                0
            )";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindvalue(':id', $page->id);
        $stmt->bindvalue(':callback_data', $page->callback_data);
        $stmt->bindvalue(':description', $page->description);
        $stmt->bindvalue(':content', $page->content);

        $result = 0;

        if($stmt->execute()) {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function edit(Page $page) {
        $sql = "UPDATE
            `pages`
            SET
            `callback_data` = :callback_data,
            `description` = :description,
            `content` = :content
            WHERE
            `id` = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $page->id);
        $stmt->bindValue(':callback_data', $page->callback_data);
        $stmt->bindValue(':description', $page->description);
        $stmt->bindValue(':content', $page->content);

        if($stmt->execute()) {
            $result = $stmt->rowCount();
        }
        
        $stmt->closeCursor();

        return $result;
    }

}