<?php

class Tutos extends Db
{
    public function add(Tuto $tuto)
    {
        $sql = "INSERT INTO
        `tutos`
        (
            `tuto_date`,
            `tuto_title`,
            `tuto_content`
        )
        VALUES
        (
            NOW(),
            :tuto_title,
            :tuto_content
        )";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':tuto_title', $tuto->tuto_title);
        $stmt->bindValue(':tuto_content', $tuto->tuto_content);

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function delete(int $tuto_id)
    {
        $sql = "DELETE FROM
        `tutos`
        WHERE
        `tuto_id` = :tuto_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':tuto_id', $tuto_id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function edit(Tuto $tuto)
    {
        $sql = "UPDATE
        `tutos`
        SET
        `tuto_title` = :tuto_title,
        `tuto_content` = :tuto_content
        WHERE
        `tuto_id` = :tuto_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':tuto_id', $tuto->tuto_id, PDO::PARAM_INT);
        $stmt->bindValue(':tuto_title', $tuto->tuto_title);
        $stmt->bindValue(':tuto_content', $tuto->tuto_content);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function find(int $tuto_id)
    {
        $sql = "SELECT
        `tuto_id`,
        `tuto_date`,
        `tuto_title`,
        `tuto_content`
        FROM `tutos`
        WHERE `tuto_id` = :tuto_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':tuto_id',
            $tuto_id,
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
        `tuto_id`,
        `tuto_date`,
        `tuto_title`,
        `tuto_content`
        FROM `tutos`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }
}
