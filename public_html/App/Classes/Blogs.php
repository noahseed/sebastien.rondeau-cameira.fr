<?php

class Blogs extends Db
{
    public function add(Blog $blog)
    {
        $sql = "INSERT INTO
        `blog`
        (
            `article_date`,
            `article_title`,
            `article_content`
        )
        VALUES
        (
            NOW(),
            :article_title,
            :article_content
        )";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':article_title', $blog->article_title);
        $stmt->bindValue(':article_content', $blog->article_content);

        $result = 0;

        if($stmt->execute())
        {
            $result = $stmt->rowCount();
        }

        $stmt->closeCursor();

        return $result;
    }

    public function delete(int $blog_id)
    {
        $sql = "DELETE FROM
        `blog`
        WHERE
        `article_id` = :blog_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':blog_id', $blog_id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function edit(Blog $blog)
    {
        $sql = "UPDATE
        `blog`
        SET
        `article_title` = :article_title,
        `article_content` = :article_content
        WHERE
        `article_id` = :article_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':article_id', $blog->article_id, PDO::PARAM_INT);
        $stmt->bindValue(':article_title', $blog->article_title);
        $stmt->bindValue(':article_content', $blog->article_content);

        $stmt->execute();

        $stmt->closeCursor();
    }

    public function find(int $article_id)
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
            $article_id,
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
        FROM `blog`
        ORDER BY `article_date`";

        $stmt = $this->pdo->prepare($sql);

        if($stmt->execute())
        {
            $result = $stmt->fetchAll();
        }

        $stmt->closeCursor();

        return $result;
    }
}
