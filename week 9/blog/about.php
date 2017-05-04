<?php require "./includes/partials/header.inc"; ?>
<?php require "./includes/partials/navMenu.inc"; ?>
<?php

    $text = "Cras et orci sed nisl porta pretium mattis nec nibh. Nam fringilla, turpis at fermentum tristique, tortor neque suscipit ex, eu efficitur nisl libero non erat. Pellentesque convallis, nibh a fermentum tincidunt, mauris sapien dictum justo, ac pellentesque tortor nibh sit amet tellus. Maecenas ornare velit non erat auctor, id euismod orci rutrum. Phasellus feugiat nisi ut est scelerisque, quis sagittis mi ultrices. Nam est mi, tincidunt et fringilla eu, ornare vel lorem. Nam euismod pellentesque elit, eu tempus arcu porta nec. Cras posuere ligula eu semper tempus. Quisque nec sapien ullamcorper, sodales turpis ut, ultrices nunc.

    Sed eu sagittis arcu, et tincidunt leo. Ut dictum accumsan elit nec dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed consectetur, augue nec maximus pretium, purus sapien mollis lectus, eu volutpat dui neque vel ipsum. Praesent sem libero, pulvinar in ornare ac, hendrerit congue orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc venenatis mi nec tempor rutrum. Integer eu est id sem dignissim blandit quis ut lacus. Maecenas ullamcorper sollicitudin metus id suscipit. Donec consequat a massa quis lacinia. In cursus mi eu dui ultrices luctus. Suspendisse pretium, odio eu congue pharetra, dolor dui gravida sapien, ac dictum nibh leo sit amet velit.";

?>
<section id="aboutSection">
    <div class="header-wrapper">
        <h2>About</h2>
        <a id="editAbout" onclick="toggleForm();" class="action-trigger">
            Edit
        </a>
    </div>
    <div id="aboutContent">
        <p id="aboutDescription"><?= nl2br(htmlspecialchars($text)); ?></p>
        <form id="aboutForm">
            <div class="form-group">
                <label>Blog Description</label>
                <textarea name="about" class="form-control" rows="10" maxlength="10000"></textarea>
            </div>
            <div class="form-group button-container">
                <input class="btn" type="reset" value="cancel" />
                <input class="btn btn-info" type="submit" value="save" />
            </div>
        </form>
    </div>
</section>

<?php require "./includes/partials/footer.inc"; ?>
