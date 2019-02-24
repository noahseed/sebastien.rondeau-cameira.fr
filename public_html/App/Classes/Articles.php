<?php

class Articles extends Db
{
    public function find(int $id)
    {
        $sql = "SELECT
        `article_id`,
        `article_date`,
        `article_title`,
        `article_content`
        FROM `blog`
        WHERE `article_id` = :article_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':article_id',
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
        `article_id`,
        `article_date`,
        `article_title`,
        `article_content`
        FROM `blog`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }
}
