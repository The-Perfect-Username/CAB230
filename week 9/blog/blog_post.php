<?php require "./includes/partials/header.inc"; ?>
<?php require "./includes/partials/navMenu.inc"; ?>
<section class="post-header">
    <h2>The post title</h2>
    <p>
        <span class="username">Username</span> <span class="date-time">Oct 24th, 2016</span>
    </p>
</section>
<section id="post">
    <p><?= nl2br("Hello \n world"); ?></p>
</section>

<?php require "./includes/partials/footer.inc"; ?>
