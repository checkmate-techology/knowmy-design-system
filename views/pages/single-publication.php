<?php

use helpers\Svg;
use helpers\View;

?>

<!-- Page Headers -->
<?php View::render('layout/header', ['pageTitle' => 'UNDP - Single Publication']) ?>

<body>
<!-- Navigation -->
<?php View::render('layout/navigation/main') ?>

<div class="single-publication">
    <?php
    View::render('organisms/single-publication/modal-publication-download', [
        'image' => '/assets/images/placeholder/publication-1.png',
        'languageOptions' => [
            ['id' => 'pasto-1', 'value' => 'pasto', 'label' => 'Pasto'],
            ['id' => 'dari-1', 'value' => 'dari', 'label' => 'Dari'],
            ['id' => 'english-1', 'value' => 'en', 'label' => 'English'],
            ['id' => 'albanian-1', 'value' => 'albanian', 'label' => 'Albanian'],
            ['id' => 'arabic-1', 'value' => 'arabic', 'label' => 'Arabic'],
            ['id' => 'portuguese-1', 'value' => 'portuguese', 'label' => 'Portuguese']
        ],
        'chapters' => [
            ['title' => 'Lorem Ipsum Title Goes Here - English', 'metadata' => 'PDF (1.9 MB)', 'lang' => 'en'],
            ['title' => 'Lorem Ipsum Title Goes Here - English', 'metadata' => 'PDF (1.9 MB)', 'lang' => 'en'],
            ['title' => 'Lorem Ipsum Title Goes Here - Pasto', 'metadata' => 'PDF (1.9 MB)', 'lang' => 'pasto'],
            ['title' => 'Lorem Ipsum Title Goes Here - Dari', 'metadata' => 'PDF (1.9 MB)', 'lang' => 'dari'],
            ['title' => 'Lorem Ipsum Title Goes Here - Albanian', 'metadata' => 'PDF (1.9 MB)', 'lang' => 'albanian'],
            ['title' => 'Lorem Ipsum Title Goes Here - Arabic', 'metadata' => 'PDF (1.9 MB)', 'lang' => 'arabic'],
            ['title' => 'Lorem Ipsum Title Goes Here - Portuguese', 'metadata' => 'PDF (1.9 MB)', 'lang' => 'portuguese']
        ]
    ]);
    ?>

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-offset-1 large-4 medium-6 medium-offset-0">
                <?php
                View::render('partials/breadcrumb', [
                    'links' => [
                        ['link' => '/single-publication', 'name' => 'Publications'],
                    ]
                ]);

                View::render('molecules/cards/publication-featured-card', [
                    'image' => '/assets/images/placeholder/publication-1.png'
                ]);
                ?>
            </div>
            <div class="cell large-offset-1 medium-6">
                <?php View::render('organisms/single-publication/featured-publication-text', [
                    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt',
                    'descriptionText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum</br></br>
            
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                ]); ?>


                <div class="related-publications" data-load-step="8" data-view-more-less data-scroll-up>
                    <div class="heading h2 related-title">Related Publications</div>

                    <div class="grid-x grid-margin-x related-items-content cards-container">
                        <?php View::render('organisms/single-publication/publication-cards'); ?>
                    </div>

                    <div class="cta-button flex-container">
                        <button class="btn blue view-more" data-view-more>
                            View More
                        </button>
                    </div>

                    <div class="scroll-up show-for-large" data-scroll-btn>
                        <?php Svg::render('angle-right') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Footer -->
<?php View::render('layout/footer'); ?>
<script type="text/javascript" src="/dist/app.js"></script>
</body>
</html>
