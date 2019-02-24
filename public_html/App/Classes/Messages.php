<?php

class Messages extends Db
{
    public function find(int $id)
    {
        $sql = "SELECT
        `message_firstname`,
        `message_lastname`,
        `message_email`,
        `message_date`,
        `message_subject`,
        `message_content`
        FROM `messages`
        WHERE `message_id` = :message_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':message_id',
            $id,
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
        `message_firstname`,
        `message_lastname`,
        `message_email`,
        `message_date`,
        `message_subject`,
        `message_content`
        FROM `messages`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function add(Message $message) : int
    {
        $sql = "INSERT INTO
        `messages`
        (
            `message_firstname`,
            `message_lastname`,
            `message_email`,
            `message_subject`,
            `message_content`
        )
        VALUES
        (:firstname, :lastname, :email, :subject, :content)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':firstname', strip_tags($message->message_firstname));
        $stmt->bindValue(':lastname', strip_tags($message->message_lastname));
        $stmt->bindValue(':email', strip_tags($message->message_email));
        $stmt->bindValue(':subject', strip_tags($message->message_subject));
        $stmt->bindValue(':content', strip_tags($message->message_content));

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }
}
