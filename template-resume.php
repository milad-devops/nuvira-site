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
                            <span class="timeline-date">2022 - Present</span>
                            <p><strong>Innovatech Solutions</strong></p>
                            <ul>
                                <li>Architected and implemented a scalable, multi-cloud Kubernetes platform, reducing deployment times by 60%.</li>
                                <li>Led the migration of monolithic applications to a microservices architecture, improving reliability and developer velocity.</li>
                                <li>Developed and maintained Infrastructure as Code (IaC) using Terraform and Ansible for AWS and Azure environments.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>DevOps Engineer</h3>
                            <span class="timeline-date">2019 - 2022</span>
                            <p><strong>CloudPioneers Inc.</strong></p>
                            <ul>
                                <li>Built and maintained CI/CD pipelines using Jenkins and GitLab CI, automating the build, test, and deployment of over 50 applications.</li>
                                <li>Managed containerized applications using Docker and Docker Swarm, ensuring high availability and performance.</li>
                                <li>Implemented a centralized logging and monitoring solution using the ELK Stack and Prometheus/Grafana.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>Junior System Administrator</h3>
                            <span class="timeline-date">2017 - 2019</span>
                            <p><strong>TechFoundry Co.</strong></p>
                            <ul>
                                <li>Provided support for Linux and Windows server environments, ensuring 99.9% uptime.</li>
                                <li>Automated routine system administration tasks using Bash and Python scripting.</li>
                                <li>Assisted in the management of network infrastructure, including firewalls and switches.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
