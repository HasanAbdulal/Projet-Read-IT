<?php
/*
    ./app/router.php
*/
// Route par défaut d'un posts
// Pattern: /?postID=x
// CTRL: postsControllers
// Action: show
if (isset($_GET['postID'])):
    include_once '../app/controllers/postsControllers.php';
    showAction($conn, $_GET['postID']);


// Route par défaut: Liste des 10 derniers posts
// Pattern:
// CTRL: postsControllers
// Action: index
else:
    include_once '../app/controllers/postsControllers.php';
    indexAction($conn);
endif;