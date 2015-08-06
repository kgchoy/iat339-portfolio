<?php snippet('header') ?>

    <div id="page-container">

        <div class="grid">
            <div class="col-3of3">
                <article id="first-article" class="article-container">
                    <h1><?php echo $page->title()->html() ?></h1>
                </article>
            </div>
        </div>

        <div class="grid">
            <div class="col-1of3Main" id="work-sidebar">
                <h4>Categories</h4>
                <p>
                    <?php echo $page->categories() ?>
                </p>

                <h4>Roles</h4>
                <p>
                    <?php echo $page->roles() ?>
                </p>

                <h4>Year / Time Taken</h4>
                <p>
                    <?php echo $page->time_taken() ?>
                </p>

                <h4>Relevant Programs and Tools</h4>
                <p>
                    <?php echo $page->tools() ?>
                </p>

                <h4>Collaborators</h4>
                <p>
                    <?php echo $page->collaborators() ?>
                </p>
            </div> <!-- ./col-1of3Main -->


            <div class="col-2of3">
                <article class="article-container" id="about-section">
                    <?php echo $page->about_section()->kirbytext() ?>
                </article>

                <article class="article-container" id="process-section">
                    <?php echo $page->process_section()->kirbytext() ?>
                </article>

                <article class="article-container" id="outcomes-section">
                    <?php echo $page->outcomes_section()->kirbytext() ?>
                </article>

                <!-- navigation buttons for end of a work page -->
                <div class="grid work-page-bottom-buttons">
                    <div class="body-gridCol-1of2">
                        <a class="button-nav full-width-button" href="<?php echo page('home') . '#featured-work' ?>">Return to Work Gallery</a>
                    </div>

                    <div class="body-gridCol-2of2">
                        <a class="button-nav full-width-button right-align-button" href="<?php echo page('notif') ?>">Next Work: Notif</a>
                    </div>
                </div> <!-- ./work-page-bottom-buttons -->

            </div> <!-- ./col-2of3 -->

        </div> <!-- ./grid -->

    </div> <!-- ./page-container -->

<?php snippet('footer') ?>