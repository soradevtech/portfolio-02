<?php /* Template Name: Airport Page */ ?>

<?php get_header(); ?>

<?php get_template_part('builder/builder'); ?>

<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <a href="https://airport.tre-marshall.com/" target="_blank">
            <div class="img" style="background: url('<?php bloginfo('template_directory') ?>/img/project-pages/airport-screenshot.png');"></div>
          </a>    
        </div>
        <h1>The Airport <p style="font-size: 2rem;">(WIP)</p></h1>
        <div class="info">
          <div class="buttons">
            <a href="https://airport.tre-marshall.com/" target="_blank"><i class="fas fa-desktop"></i> View Project</a>
            <a href="#"><i class="fas fa-code"></i> Code Repo Coming Soon</a>
          </div>
        </div>
        <p><b>Challenge: </b>Small businesses such as restaurants generally need a small website that describes their business and attracts customers.</p>
        <p><b>Solution: </b>The Airport is a custom WordPress theme that has all of the usual features of your standard restaurant website while having an attractive layout to draw customers. The restaurant operator has a dashboard to edit pages and the parts within, such as menu items or locations.</p>
        <p><b>Result: </b>The Airport is a great reference example for anyone looking to build a website and promote a restaurant to hungry customers.</p>
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/wordpress-blue.svg" alt="">
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