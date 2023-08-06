<?php

class Groups extends Db {

    public function find(int $chat_id) {
        $sql = "SELECT
        `chat_id`,
        `chat_name`,
        `group_type`,
        `group_url`
        FROM `groups`
        WHERE `chat_id` = :chat_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':chat_id',
            $chat_id, PDO::PARAM_STR
        );

        if($stmt->execute()) {
            $result = $stmt->fetch();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function findAll() {
        $sql = "SELECT
        `chat_id`,
        `chat_name`,
        `group_type`,
        `group_url`
        FROM `groups`
        ORDER BY `group_type`, `chat_name`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute()) {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function add(Group $group) : int {
        $sql = "INSERT INTO `groups`
            (
                `chat_id`,
                `chat_name`,
                `group_type`,
                `group_url`
            )
            VALUES
            (
                :chat_id,
                :chat_name,
                :group_type,
                :group_url
            )";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindvalue(':chat_id', $group->chat_id);
        $stmt->bindvalue(':chat_name', $group->chat_name);
        $stmt->bindvalue(':group_type', $group->group_type);
        $stmt->bindvalue(':group_url', $group->group_url);

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