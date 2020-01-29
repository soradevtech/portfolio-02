<?php /* Template Name: Portfolio Page */ ?>

<?php get_header(); ?>

<?php get_template_part('builder/builder'); ?>

<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <div class="img" style="background: url('<?php bloginfo('template_directory') ?>/img/inchxinch.jpg');"></div>
        </div>
        <h1>Nike Project</h1>
        <div class="info">
          <div class="buttons">
            <a href="#"><i class="fas fa-desktop"></i> View Project</a>
            <a href="#"><i class="fas fa-code"></i> View Code</a>
          </div>
        </div>
        <p><b>Challenge: </b>Lorem ipsum dolor amet tacos occupy edison bulb, seitan unicorn woke pork belly. Venmo four dollar toast migas selvage PBR&B, lumbersexual chartreuse occupy. Woke hell of crucifix PBR&B 3 wolf moon. Cornhole aesthetic stumptown twee, letterpress banh mi food truck subway tile.</p>
        <p><b>Solution: </b>Lorem ipsum dolor amet tacos occupy edison bulb, seitan unicorn woke pork belly. Venmo four dollar toast migas selvage PBR&B, lumbersexual chartreuse occupy. Woke hell of crucifix PBR&B 3 wolf moon. Cornhole aesthetic stumptown twee, letterpress banh mi food truck subway tile.</p>
        <p><b>Result: </b>Lorem ipsum dolor amet tacos occupy edison bulb, seitan unicorn woke pork belly. Venmo four dollar toast migas selvage PBR&B, lumbersexual chartreuse occupy. Woke hell of crucifix PBR&B 3 wolf moon. Cornhole aesthetic stumptown twee, letterpress banh mi food truck subway tile.</p>
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/AngularJS-Shield.svg" alt="">
            </div>
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/AngularJS-Shield.svg" alt="">
            </div>
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/AngularJS-Shield.svg" alt="">
            </div>
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/AngularJS-Shield.svg" alt="">
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