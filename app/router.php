<?php
/*
    ./app/router.php
*/

// Route par défaut: Liste des 10 derniers posts
// Pattern:
// CTRL: readitControllers
// Action: index

include_once '../app/controllers/postsControllers.php';
indexAction($conn);