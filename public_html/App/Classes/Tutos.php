<?php

class Tutos extends Db
{
    public function find(int $id)
    {
        $sql = "SELECT
        `tuto_id`,
        `tuto_title`,
        `tuto_date`,
        `tuto_content`
        FROM `tutos`
        WHERE `tuto_id` = :tuto_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':tuto_id',
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
        `tuto_id`,
        `tuto_title`,
        `tuto_date`,
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
