<h3>
    <?= "Index - Welcome to Muse."; ?>
</h3>

<ul>
    <li><a href="<?php echo route("home"); ?>">Home page</a></li>
    <li><a href="<?= route("contact-us") ?>">Contact page</a></li>
    <li><a href="<?= route("posts.index", ["id" => 123]) ?>">Product index page</a></li>
    <li><a href="<?= route("posts.show", ["title" => "healthy-diet-for-uni-students", "id" => 123]) ?>">Product show
            page</a>
    </li>
</ul>