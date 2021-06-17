<?php
/*
    ./app/models/tagsModels.php
*/
namespace App\Models\TagsModels;
/**
 * Liste des tags d'un post selon son ID
 *
 * @param PDO $conn
 * @param integer $id
 * @return array
 */
function findAllByPostID(\PDO $conn, int $id) :array{
    $sql =' SELECT *
            FROM tags t
            JOIN posts_has_tags pht ON pht.tag_id = t.id
            WHERE pht.post_id = :id
            ORDER BY t.name ASC;
        ';
        $rs = $conn->prepare($sql);
        $rs->bindValue(':id', $id, \PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * Lists des tags Cloud
 *
 * @param \PDO $conn
 * @param integer $name
 * @return array
 */
function findAll(\PDO $conn) :array{
    $sql =' SELECT *
            FROM tags
            ORDER BY name ASC;
            ';
    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}