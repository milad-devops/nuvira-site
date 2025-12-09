<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section id="about" class="about-me">
            <div class="container">
                <div class="about-me-content">
                    <div class="about-me-avatar">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar.svg'; ?>" alt="Avatar">
                    </div>
                    <div class="about-me-text">
                        <h2>About Me</h2>
                        <p>Hello! I'm a DevOps enthusiast with a passion for automating and optimizing mission-critical deployments. I have a strong background in both software development and systems administration, which allows me to bridge the gap between the two disciplines.</p>
                        <p>I'm experienced in a wide range of DevOps tools and technologies, including Docker, Kubernetes, Jenkins, Ansible, and Terraform. I'm always looking for new ways to improve my skills and stay up-to-date with the latest trends in the industry.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="skills">
            <div class="container">
                <h2 class="section-title">Skills</h2>
                <div class="skills-wrapper">
                    <div class="skill">
                        <h3>Docker</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h3>Kubernetes</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h3>Jenkins</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h3>Terraform</h3>
                        <div class="progress-bar">
                            <div class="progress" style="width: 95%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="network-animation" class="network-animation">
            <?php
            $svg_path = get_template_directory() . '/assets/images/network.svg';
            if ( file_exists( $svg_path ) ) {
                echo file_get_contents( $svg_path );
            }
            ?>
        </section>

    </main>
</div>

<?php get_footer(); ?>
