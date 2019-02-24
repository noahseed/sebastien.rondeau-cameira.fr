<?php

class Pages extends Db
{
    public function find(int $id)
    {
        $sql = "SELECT
        `page_id`,
        `page_slug`,
        `page_title`,
        `page_content`
        FROM `pages_fr`
        WHERE `page_id` = :page_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':page_id',
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

    public function findEn(string $slug)
    {
        $sql = "SELECT
        `page_id`,
        `page_slug`,
        `page_title`,
        `page_content`
        FROM `pages_en`
        WHERE `page_slug` = :page_slug";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':page_slug',
            $slug
        );

        if($stmt->execute())
        {
            $result = $stmt->fetch();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function findFr(string $slug)
    {
        $sql = "SELECT
        `page_id`,
        `page_slug`,
        `page_title`,
        `page_content`
        FROM `pages_fr`
        WHERE `page_slug` = :page_slug";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':page_slug',
            $slug
        );

        if($stmt->execute())
        {
            $result = $stmt->fetch();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function findPt(string $slug)
    {
        $sql = "SELECT
        `page_id`,
        `page_slug`,
        `page_title`,
        `page_content`
        FROM `pages_pt`
        WHERE `page_slug` = :page_slug";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(
            ':page_slug',
            $slug
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
        `page_id`,
        `page_slug`,
        `page_title`,
        `page_content`
        FROM `pages_fr`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }
}
