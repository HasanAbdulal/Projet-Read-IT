<?php
/*
    ./app/models/authorsModels.php
*/
namespace App\Models\AuthorsModels;

/**
 * Retourne l'auteur correspondant à l'ID
 *
 * @param PDO $conn
 * @param integer $id
 * @return array
 */
function findOneByID(\PDO $conn, int $id) :array {
    $sql = 'SELECT *
            FROM authors
            WHERE id = :id;
            ';
        $rs = $conn->prepare($sql);
        $rs->bindValue(':id', $id, \PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetch(\PDO::FETCH_ASSOC);
}