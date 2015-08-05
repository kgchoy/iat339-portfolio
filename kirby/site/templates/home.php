<?php snippet('header') ?>

  <!-- <main class="main" role="main"> -->

    <div id="page-container">
        <div class="grid">
            <div class="col-3of3">
                <article id="first-article" class="article-container">
                    <div id="banner-text">
                        <p>
                            <?php echo $page->main_banner_text() ?>
                        </p>

                        <a class="button-nav partial-width-button" href="about.html">About Me&nbsp;&nbsp;&rsaquo;&rsaquo;</a>

                    </div>
                </article>

                <?php snippet('mainPageProjects') ?>
            </div>
        </div>
    </div>


<!--     <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('projects') ?> -->

  <!-- </main> -->

<!-- <?php snippet('footer') ?> -->