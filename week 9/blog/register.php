<?php require "./includes/partials/header.inc"; ?>
<?php require "./includes/partials/navMenu.inc"; ?>
<?php require "./includes/scripts/register.inc"; ?>
<h2>Create an account</h2>
<form action="register.php" method="post">
    <!-- Registration form -->
    <div class="form-group">
        <label>First name</label>
        <input class="form-control" type="text" name="first_name" value="<?= $_POST['first_name'] ?? ''; ?>" />
    </div>
    <div class="form-group">
        <label>Last name</label>
        <input class="form-control" type="text" name="last_name" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="text" name="email" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password" /><br>
    </div>
    <div class="form-group button-container">
        <input class="btn btn-info" name="submit" type="submit" value="submit" />
    </div>
</form>

<?php require "./includes/partials/footer.inc"; ?>
