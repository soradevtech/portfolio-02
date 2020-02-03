<?php /* Template Name: Pokedex Page */ ?>

<?php get_header(); ?>

<?php get_template_part('builder/builder'); ?>

<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <a href="https://pokedex.tre-marshall.com/" target="_blank">
            <div class="img" style="background: url('<?php bloginfo('template_directory') ?>/img/project-pages/pokedex-screenshot.png');"></div>
          </a>    
        </div>
        <h1>Pokedex <p style="font-size: 2rem;">(WIP)</p></h1>
        <div class="info">
          <div class="buttons">
            <a href="https://pokedex.tre-marshall.com/" target="_blank"><i class="fas fa-desktop"></i> View Project</a>
            <a href="https://github.com/soraphoenix/jQuery-Pokedex" target="_blank"><i class="fas fa-code"></i> View Code</a>
          </div>
        </div>
        <p><b>Description: </b>A Pokedex application to look up various Pokemon using the PokeAPI, jQuery, and AJAX.</p>
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <div class="icon">
              <img src="<?php bloginfo('template_directory') ?>/img/jquery-1.svg" alt="">
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