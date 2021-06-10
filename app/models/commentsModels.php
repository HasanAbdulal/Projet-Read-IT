<?php
/*
    ./app/models/commentsModels.php
*/
namespace App\Models\CommentsModels;
/**
 * Les commantaires du post
 *
 * @param \PDO $conn
 * @param integer $id
 * @return array
 */
function findAllByPostID(\PDO $conn, int $id) :array {
    $sql =' SELECT *
            FROM comments 
            WHERE post_id = :id
            ORDER BY created_at DESC;
        ';
        $rs = $conn->prepare($sql);
        $rs->bindValue(':id', $id, \PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
}