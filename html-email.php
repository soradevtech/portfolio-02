<?php /* Template Name: HTML Email Page */ ?>

<?php get_header(); ?>

<?php get_template_part('builder/builder'); ?>

<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <a href="https://email.tre-marshall.com/" target="_blank">
            <div class="img" style="background: url('<?php bloginfo('template_directory') ?>/img/pf-tiles/email.jpg');"></div>
          </a>    
        </div>
        <h1>HTML Email</h1>
        <div class="info">
          <div class="buttons">
            <a href="https://email.tre-marshall.com/" target="_blank"><i class="fas fa-desktop"></i> View Project</a>
            <a href="https://github.com/soraphoenix/html-email" target="_blank"><i class="fas fa-code"></i> View Code</a>
          </div>
        </div>
        <p><b>Challenge: </b>Businesses need to reach potential customers in an original way that stands out. Consumers receive many emails a day from various sources, making the ability to capture and keep their attention more of a challenge.</p>
        <p><b>Solution: </b>This page is an email built with tables and inline CSS, and will fully display in the vast majority of modern email clients, as tested with Litmus.com.</p>
        <p><b>Result: </b>A detailed email like this one is what captures the customer's attention more than a simple text-based marketing email, which will convert into more sales.</p>
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/html5.svg" alt="">
            </div>
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/css-3.svg" alt="">
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