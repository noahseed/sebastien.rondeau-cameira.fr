<?php

class Diaries extends Db
{
    public function add(Diary $diary) : int
    {
        $sql = "INSERT INTO
        `diary`
        (
            `diary_date`,
            `diary_slug`,
            `diary_title`,
            `diary_content`
        )
        VALUES
        (
            NOW(),
            :diary_slug,
            :diary_title,
            :diary_content
        )";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':diary_slug', $diary->diary_slug);
        $stmt->bindValue(':diary_title', $diary->diary_title);
        $stmt->bindValue(':diary_content', $diary->diary_content);

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function delete(int $diary_id)
    {
        $sql = "DELETE FROM
        `diary`
        WHERE
        `diary_id` = :diary_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':diary_id', $diary_id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function edit(Diary $diary)
    {
        $sql = "UPDATE
        `diary`
        SET
        `diary_title` = :diary_title,
        `diary_content` = :diary_content
        WHERE
        `diary_id` = :diary_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':diary_id', $diary->diary_id, PDO::PARAM_INT);
        $stmt->bindValue(':diary_title', $diary->diary_title);
        $stmt->bindValue(':diary_content', $diary->diary_content);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function find(int $diary_id)
    {
        $sql = "SELECT
        `diary_id`,
        `diary_date`,
        `diary_slug`,
        `diary_title`,
        `diary_content`
        FROM `diary`
        WHERE `diary_id` = :diary_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':diary_id',
            $diary_id,
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
        `diary_id`,
        `diary_date`,
        `diary_slug`,
        `diary_title`,
        `diary_content`
        FROM `diary`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }
}
