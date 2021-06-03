<?php
/*
    ./app/controllers/postsControllers.php
*/
    function indexAction(PDO $conn){
        // 1. Je demande la liste des posts au modèle et je la mets dans $posts
            include_once '../app/models/postsModels.php';
            $posts = findAll($conn);
        // 2. Je charge la vue index dans $content
            GLOBAL $content;
            ob_start();
                include '../app/views/posts/index.php';
            $content = ob_get_clean();
    };

    function showAction(PDO $conn, int $id ) {
        // 1. Je demande le détait d'un post et je le mets dans $post
        include_once '../app/models/postsModels.php';
        $post = findOneById($conn, $id);

        // 1.1 Je demande la liste des tags de ce post au modèle et je les mets dans $tags
        include_once '../app/models/tagsModels.php';
        $tags = findAllByPostID($conn, $id); 

        // 2. Je charge la vue posts/show dans $content
        GLOBAL $content;
        ob_start();
            include '../app/views/posts/show.php';
        $content = ob_get_clean();
    };