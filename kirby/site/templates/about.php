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
        <div class="col-2of3">
            <article class="article-container" id="about-summary">
                <?php echo $page->about_section()->kirbytext() ?>
            </article>

            <a class="button-nav partial-width-button" href="content/1-about/resume.pdf">View My Resume&nbsp;&nbsp;&rsaquo;&rsaquo;</a>

        </div> <!-- ./col-2of3 -->

        <div class="col-1of3Main">
            <?php echo $page->profile_image()->kirbytext() ?>
        </div> <!-- ./col-1of3 -->

<!--         <div class="col-2of3">
            <article class="article-container" id="about-section">
                <?php echo $page->about_section()->kirbytext() ?>
            </article>

            <article class="article-container" id="process-section">
                <?php echo $page->process_section()->kirbytext() ?>
            </article>

            <article class="article-container" id="outcomes-section">
                <?php echo $page->outcomes_section()->kirbytext() ?>
            </article>

        </div> -->

    </div> <!-- ./grid -->

</div> <!-- ./page-container -->

<?php snippet('footer') ?>