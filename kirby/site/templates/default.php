<?php snippet('header') ?>

<div id="page-container">

    <div class="grid">
        <div class="col-3of3">
            <article id="first-article" class="article-container">
                <h1><?php echo $page->title()->html() ?></h1>

                <?php echo $page->text()->kirbytext() ?>
            </article>
        </div>
    </div> <!-- ./grid -->

</div> <!-- ./page-container -->

<?php snippet('footer') ?>