<?php
/*
    ./app/router.php
*/
use \App\Controllers\PostsControllers;
// Route par défaut d'un posts
// Pattern: /?postID=x
// CTRL: postsControllers
// Action: show
    if (isset($_GET['postID'])):
        include_once '../app/controllers/postsControllers.php';
        PostsControllers\showAction($conn, $_GET['postID']);


// Route par défaut: Liste des 10 derniers posts
// Pattern:
// CTRL: postsControllers
// Action: index
    else:
        include_once '../app/controllers/postsControllers.php';
        PostsControllers\indexAction($conn);
    endif;