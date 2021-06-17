<?php 
/*
    ./app/views/template/partials/_aside.php 
 */
?>
<!-- .col-md-8 -->
<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
        <div class="sidebar-box">
            <form action="#" class="search-form">
                <div class="form-group">
                    <span class="icon icon-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
            </form>
    </div>
    <!-- Start Categories -->
        <?php
        // Methode 1
            include_once '../app/models/categoriesModels.php';
            $categories = \App\Models\Categories\findAll($conn);
            include '../app/views/categories/_index.php';
        ?>
    <!-- End Categories -->

    <!-- Recent Blog -->
    <div class="sidebar-box ftco-animate">
        <?php 
            include_once '../app/models/postsModels.php';
            $posts = \App\Models\PostsModels\findAll($conn, 3);
            include '../app/views/posts/_recents.php';
        ?>
    </div><!-- Recent Blog -->

    <!-- Tag Cloud -->
    <div class="sidebar-box ftco-animate">
        <?php
            include_once '../app/models/tagsModels.php';
            $tags = \App\Models\TagsModels\findAll($conn);
            include '../app/views/tags/_index.php';
        ?>
    </div><!-- Tag Cloud -->
</div>