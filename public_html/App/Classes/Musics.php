<?php

class Musics extends Db
{
    public function add(Music $music)
    {
        $sql = "INSERT INTO
        `music`
        (
            `music_date`,
            `music_title`,
            `music_content`
        )
        VALUES
        (
            NOW(),
            :music_title,
            :music_content
        )";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':music_title', $music->music_title);
        $stmt->bindValue(':music_content', $music->music_content);

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function delete(int $music_id)
    {
        $sql = "DELETE FROM
        `music`
        WHERE
        `music_id` = :music_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':music_id', $music_id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function edit(Music $music)
    {
        $sql = "UPDATE
        `music`
        SET
        `music_title` = :music_title,
        `music_content` = :music_content
        WHERE
        `music_id` = :music_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':music_id', $music->music_id, PDO::PARAM_INT);
        $stmt->bindValue(':music_title', $music->music_title);
        $stmt->bindValue(':music_content', $music->music_content);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function find(int $id)
    {
        $sql = "SELECT
        `music_id`,
        `music_date`,
        `music_title`,
        `music_content`
        FROM `music`
        WHERE `music_id` = :music_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':music_id',
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
        `music_id`,
        `music_date`,
        `music_title`,
        `music_content`
        FROM `music`
        ORDER BY `music_title`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }
}
