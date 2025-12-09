<?php
/**
 * Template Name: Portfolio
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section id="portfolio" class="portfolio">
            <div class="container">
                <h2 class="section-title">Portfolio</h2>
                <div class="portfolio-grid">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/project1.svg'; ?>" alt="Project 1">
                            </div>
                            <div class="card-back">
                                <h3>Project 1</h3>
                                <p>A brief description of the project.</p>
                                <a href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/project2.svg'; ?>" alt="Project 2">
                            </div>
                            <div class="card-back">
                                <h3>Project 2</h3>
                                <p>A brief description of the project.</p>
                                <a href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/project3.svg'; ?>" alt="Project 3">
                            </div>
                            <div class="card-back">
                                <h3>Project 3</h3>
                                <p>A brief description of the project.</p>
                                <a href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/project4.svg'; ?>" alt="Project 4">
                            </div>
                            <div class="card-back">
                                <h3>Project 4</h3>
                                <p>A brief description of the project.</p>
                                <a href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/project5.svg'; ?>" alt="Project 5">
                            </div>
                            <div class="card-back">
                                <h3>Project 5</h3>
                                <p>A brief description of the project.</p>
                                <a href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/project6.svg'; ?>" alt="Project 6">
                            </div>
                            <div class="card-back">
                                <h3>Project 6</h3>
                                <p>A brief description of the project.</p>
                                <a href="#">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
