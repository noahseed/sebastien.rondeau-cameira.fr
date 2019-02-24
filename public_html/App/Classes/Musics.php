<?php

class Musics extends Db
{
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
        FROM `music`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }
}
