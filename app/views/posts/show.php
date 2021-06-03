<?php
/*
    ./app/views/posts/show.php
    Variables disponibles :
        - $post ARRAY(id, title, content, created_at, image, ...)
        - $tags ARRAY(ARRAY(id, name))
        - $author ARRAY (id, firstname, lastname, biography, image)
*/
?>
<p class="mb-5">
    <img src="images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<?php echo $post['content']; ?>

<div class="tag-widget post-tag-container mb-5 mt-5">
    <div class="tagcloud">
    <?php foreach($tags as $tag): ?>
    <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?></a>
    <?php endforeach; ?>
    </div>
</div>

<div class="about-author d-flex p-4 bg-light">
    <div class="bio mr-5">
    <img src="images/<?php echo $author['image']; ?>" alt="Image placeholder" class="img-fluid mb-4">
    </div>
    <div class="desc">
    <h3>
        <?php echo $author['firstname']; ?>
        <?php echo $author['lastname']; ?>
    </h3>
    <p>
    <?php echo $author['biography']; ?>
    </p>
    </div>
</div>


<div class="pt-5 mt-5">
    <h3 class="mb-5">3 Comments</h3>
    <ul class="comment-list">
    <li class="comment">
        <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
        </div>
    </li>

    <li class="comment">
        <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
        </div>
    </li>

    <li class="comment">
        <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
        </div>
    </li>
    </ul>
    <!-- END comment-list -->

    <div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="#" class="p-5 bg-light" method="post">
        <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
        <label for="message">Message</label>
        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
        <input type="hidden" name="postId" value="4" />
        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
        </div>

    </form>
    </div>
</div>