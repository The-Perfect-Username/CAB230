<?php require "./includes/partials/header.inc"; ?>
<?php require "./includes/partials/navMenu.inc"; ?>
<?php require "./includes/scripts/post.inc"; ?>

<h2>Create a new blog post</h2>
<form action="post.php" method="post">
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" type="text" name="title" maxlength="100" value="<?= $_POST['title'] ?? ''; ?>"/>
    </div>
    <div class="form-group">
        <label>Post</label>
        <textarea class="form-control" name="post" rows="10" maxlength="1000"><?= $_POST['post'] ?? ''; ?></textarea>
    </div>
    <div class="form-group button-container">
        <input class="btn btn-info" name="submit" type="submit" value="submit" />
    </div>
</form>

<?php require "./includes/partials/footer.inc"; ?>
