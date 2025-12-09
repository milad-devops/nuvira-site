<?php
/**
 * Template Name: Resume
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section id="resume" class="resume">
            <div class="container">
                <h2 class="section-title">Resume</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>Senior DevOps Engineer</h3>
                            <span class="timeline-date">2020 - Present</span>
                            <p>Company A</p>
                            <p>Implemented CI/CD pipelines, automated infrastructure with Terraform, and managed Kubernetes clusters.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>DevOps Engineer</h3>
                            <span class="timeline-date">2018 - 2020</span>
                            <p>Company B</p>
                            <p>Managed cloud infrastructure on AWS, automated deployments with Ansible, and monitored systems with Prometheus and Grafana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
