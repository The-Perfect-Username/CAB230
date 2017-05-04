<?php require "./includes/partials/header.inc"; ?>
<?php require "./includes/partials/navMenu.inc"; ?>
<?php require "./includes/scripts/login.inc"; ?>
<h2>Login</h2>
<form action="login.php" method="post">
    <!-- Login form -->
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="email" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password" />
    </div>
    <div class="form-group button-container">
        <input class="btn btn-info" name="submit" type="submit" value="submit" />
    </div>
</form>

<?php require "./includes/partials/footer.inc"; ?>
