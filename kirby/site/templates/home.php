<?php snippet('header') ?>

  <!-- <main class="main" role="main"> -->

    <div id="page-container">
        <div class="grid">
            <div class="col-3of3">
                <article id="first-article" class="article-container">
                    <div id="banner-text">
                        <h1><?php echo $page->main_banner_text() ?></h1>


                        <a class="button-nav partial-width-button" href="<?php echo page('about') ?>">About Me&nbsp;&nbsp;&rsaquo;&rsaquo;</a>

                    </div>
                </article>

                <?php snippet('mainPageProjects') ?>

            </div> <!-- ./col-3of3 -->
        </div> <!-- ./grid -->
    </div> <!-- ./page-container -->

<?php snippet('footer') ?>