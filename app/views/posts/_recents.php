<?php
/*
    ./app/views/posts/_recents.php
    Variables disponibles:
        - $posts ARRAY(ARRAY(id, title, content, ...))
*/
?>

<h3>Recent Blog</h3>
<?php foreach($posts as $post):?>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/<?php echo $post['image'];?>);"></a>
            <div class="text">
                <h3 class="heading"><a href="#"><?php echo $post['title'];?></a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo \Core\Functions\formater_date($post['created_at'], 'F d, Y');?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
<?php endforeach;?>