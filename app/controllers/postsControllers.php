<?php
/*
    ./app/controllers/postsControllers.php
*/
namespace App\Controllers\PostsControllers;
use \App\Models\PostsModels;
use \App\Models\TagsModels;
use \App\Models\AuthorsModels;
use \APP\Models\CommentsModels;

/**
 * Undocumented function
 *
 * @param PDO $conn
 * @return void
 */
    function indexAction(\PDO $conn) {
        // 1. Je demande la liste des posts au modèle et je la mets dans $posts
            include_once '../app/models/postsModels.php';
            $posts = PostsModels\findAll($conn);
        // 2. Je charge la vue index dans $content
            GLOBAL $content;
            ob_start();
                include '../app/views/posts/index.php';
            $content = ob_get_clean();
    };

    function showAction(\PDO $conn, int $id ) {
        // 1. Je demande le détait d'un post et je le mets dans $post
            include_once '../app/models/postsModels.php';
            $post = PostsModels\findOneById($conn, $id);

        // 1.bis Je demande la liste des tags de ce post au modèle et je les mets dans $tags
            include_once '../app/models/tagsModels.php';
            $tags = TagsModels\findAllByPostID($conn, $id); 

        // 1.ter Je demande les noms l'auteur du post au modèle et je le mets dans $author
            include_once '../app/models/authorsModels.php';
            $author = AuthorsModels\findOneByID($conn, $post['author_id']);

        // 1.quater  Je demande les commentaires de ce post au modèle et je les mets dans $comment
            include_once '../app/models/commentsModels.php';
            $comments = CommentsModels\findAllByPostID($conn, $post['id']);

        // 2. Je charge la vue posts/show dans $content
            GLOBAL $content;
            ob_start();
                include '../app/views/posts/show.php';
            $content = ob_get_clean();
    };