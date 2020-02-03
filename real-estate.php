<?php /* Template Name: Real Estate Page */ ?>

<?php get_header(); ?>

<?php get_template_part('builder/builder'); ?>

<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <a href="https://real-estate.tre-marshall.com/" target="_blank">
            <div class="img" style="background: url('<?php bloginfo('template_directory') ?>/img/project-pages/real-estate-screenshot.png');"></div>
          </a>    
        </div>
        <h1>Real Estate App <p style="font-size: 2rem;">(WIP)</p></h1>
        <div class="info">
          <div class="buttons">
            <a href="https://real-estate.tre-marshall.com/" target="_blank"><i class="fas fa-desktop"></i> View Project</a>
            <a href="https://github.com/soraphoenix/react-real-estate" target="_blank"><i class="fas fa-code"></i> View Code</a>
          </div>
        </div>
        <p><b>Challenge: </b>Create a sortable single page listing app with a frontend framework.</p>
        <p><b>Solution: </b>This real estate single page app has fictional listings that are sortable and will be paged through without browser reloading. It is a demonstration of the possibilities with JSX and React components.</p>
        <p><b>Result: </b>This app shows users a sample of how dynamic and functional a single page app can be with only frontend code.</p>
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/react.svg" alt="">
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