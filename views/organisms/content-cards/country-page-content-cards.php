<?php use helpers\View; ?>

<div class="country-page-content-cards">
    <div class="grid-x">
        <div class="cell">
            <div class="grid-x grid-padding-x flex-container align-center">
                <div class="cell medium-6 large-3">
                    <?php
                    View::render('molecules/cards/single-content-card-image', [
                        'tag' => 'Content tag',
                        'link' => $_SERVER['REQUEST_URI'],
                        'title' => 'A vineyard with a storied past receives an injection of new life.',
                        'image' => '/assets/images/placeholder/cards/single-content-card-image-2.png',
                        'cta' => 'Read More'
                    ])
                    ?>
                </div>
                <div class="cell medium-6 large-3" data-content-type="publications">
                    <?php
                    View::render('molecules/cards/single-content-card-accent-color', [
                        'tag' => 'Publication',
                        'link' => $_SERVER['REQUEST_URI'],
                        'title' => 'UN calls for comprehensive debt standstill in all developing countries.',
                        'cta' => 'Read More'
                    ])
                    ?>
                </div>
                <div class="cell medium-6 large-3">
                    <?php
                    View::render('molecules/cards/single-content-card-body', [
                        'tag' => 'Content tag',
                        'link' => $_SERVER['REQUEST_URI'],
                        'title' => 'UNDP at the Paris Peace Forum 2020.',
                        'description' => 'Three UNDP projects are among the one hundred “Solutions for Peace” selected, to be featured in the ‘Space for Solutions’.',
                        'cta' => 'Read More'
                    ])
                    ?>
                </div>
                <div class="cell medium-6 large-3">
                    <?php
                    View::render('molecules/cards/single-content-card-image', [
                        'tag' => 'Content tag',
                        'link' => $_SERVER['REQUEST_URI'],
                        'title' => 'A vineyard with a storied past receives an injection of new life.',
                        'image' => '/assets/images/placeholder/cards/single-content-card-image.png',
                        'cta' => 'Read More'
                    ])
                    ?>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <div class="cta-container">
                        <?php View::render('molecules/buttons/cta-no-arrow', [
                            'cta' => 'View More',
                            'data' => 'data-sdg-load'
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>