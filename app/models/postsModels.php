<?php
/*
    ./app/models/postsModels.php
*/
namespace App\Models\PostsModels;
/**
 * Lists des 10 derniers posts
 *
 * @param PDO $conn
 * @param int $limit
 * @return array
 */
function findAll(\PDO $conn, int $limit = 9) :array{
    $sql =" SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT :limit;
        ";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * Retourne un post selon son ID
 *
 * @param PDO $conn
 * @return array
 */
function findOneById(\PDO $conn, int $id = 1) :array {
    $sql =" SELECT *
            FROM posts
            WHERE id = :id;
        ";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}