<?php require "./includes/partials/header.inc"; ?>
    <section id="indexHeader">
        <!-- Include the navigation menu -->
        <?php require "./includes/partials/navMenu.inc"; ?>
        <div id="blogTitle">
            <h3>the</h3>
            <h1>DESIGN</h1>
            <h2>HUB</h2>
        </div>
    </section>
    <!-- Contains the feed of recently made posts -->
    <section id="postsContainer">
        <h3>Recent Blog Posts</h3>
        <?php
            // If there are any posts then display the most recent posts
            if (false) {
                require "./includes/partials/indexPost.inc";
            } else {
                echo "<p>No posts available</p>";
            }
        ?>

    </section>
<?php require "./includes/partials/footer.inc"; ?>
