<?php /* Template Name: Hyperapp Page */ ?>

<?php get_header(); ?>

<?php get_template_part('builder/builder'); ?>

<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <a href="https://hyper-restaurant.tre-marshall.com/" target="_blank">
            <div class="img" style="background: url('<?php bloginfo('template_directory') ?>/img/project-pages/hyper-restaurant-screenshot.jpg');"></div>
          </a>    
        </div>
        <h1>Single Page Restaurant Site <p style="font-size: 2rem;">(WIP)</p></h1>
        <div class="info">
          <div class="buttons">
            <a href="https://hyper-restaurant.tre-marshall.com/" target="_blank"><i class="fas fa-desktop"></i> View Project</a>
            <a href="https://github.com/soraphoenix/hyper-restaurant/" target="_blank"><i class="fas fa-code"></i> View Code</a>
          </div>
        </div>
        <p><b>Challenge: </b>Sometimes all a business needs is a single page app to get their message out and attract customers.</p>
        <p><b>Solution: </b>Hyperapp is a lightweight frontend framework that is useful for single page apps.</p>
        <p><b>Result: </b>This project is a great example of a single page restaurant app that can be built quickly.</p>
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/nodejs-1.svg" alt="">
            </div>
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/html5.svg" alt="">
            </div>
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/css-3.svg" alt="">
            </div>
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/javascript-1.svg" alt="">
            </div>
          </div>
        </div>
        <!-- <div class="video">
          <h3>Video Walkthrough</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Hy5SThZC19A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div> -->
      </div>

    </section>

<?php get_footer(); ?>