<?php

class Diaries extends Db
{
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

    public function add(Diary $diary) : int
    {
        $sql = "INSERT INTO
        `diary`
        (
            `diary_id`,
            `diary_date`,
            `diary_slug`,
            `diary_title`,
            `diary_content`
        )
        VALUES
        (:diary_id, :diary_date, :diary_slug, :diary_title, :diary_content)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':diary_id', strip_tags($diary->diary_id));
        $stmt->bindValue(':diary_date', strip_tags($diary->diary_date));
        $stmt->bindValue(':diary_slug', strip_tags($diary->diary_slug));
        $stmt->bindValue(':diary_title', strip_tags($diary->diary_title));
        $stmt->bindValue(':diary_content', strip_tags($diary->diary_content));

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }
}
