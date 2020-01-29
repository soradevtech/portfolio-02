<?php get_header(); ?>

<?php get_template_part('builder/builder'); ?>

<section id="top">
  <div class="container">
    <div class="info">
      <div class="blue-square">

      </div>
      <h1>Tracy Marshall</h1>
      <p>Developer</p>
      <a href="#portfolio-section">Latest Projects</a>
    </div>
    <div class="img">
      <div class="background-img">

      </div>
    </div>
  </div>
</section>
<section id="testimonials-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>About Me</h1>
    </div>
    <div class="testimonials-container">
      
      <div class="test-center">
        <div class="header">
          <div class="user-img" style="background: url('<?php bloginfo('template_directory') ?>/img/profpic.png')">
          </div>
          <div class="info">
            <h4>Tracy Marshall</h4>
            <span>Developer</span>
          </div>
        </div>
        <p>Hi, I’m a self-taught web developer. Over time I’ve learned PHP, HTML, CSS, JavaScript, ReactJS, and Laravel among other things, including my professional experience from working on a website for secret shoppers. Some of the other tools that I use are HyperappJS, AJAX, jQuery, and WordPress.</p>

        <p>When I’m not building awesome projects I like to spend time with family and friends, exercise and watch streams on Twitch.tv. This website is my portfolio and includes some of the projects I’ve created, with more being posted as they are completed. Currently looking for new projects and job opportunities so feel free to contact me about your needs.</p>
      </div>
      
    </div>
  </div>
</section>
<section id="portfolio-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>Portfolio</h1>
    </div>

    <div class="portfolio-container">
      <a href="/swatchframe/" class="box image1">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Design Inspiration Collector</div>
            </div>
        </div>
        </div>
      </a>
      <a href="/real-estate/" class="box image2">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Real Estate App</div>
            </div>
        </div>
        </div>
      </a>
      <a href="/the-airport/" class="box image3">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Burger Restaurant</div>
            </div>
        </div>
        </div>
      </a>
      <a href="/rps-game/" class="box image4">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Pokemon RPS</div>
            </div>
        </div>
        </div>
      </a>
      <a href="/html-email/" class="box image5">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">HTML Email</div>
            </div>
        </div>
        </div>
      </a>
      <!-- <a href="https://book-list.tre-marshall.com/" target="_blank" class="box image6">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Book List</div>
            </div>
        </div>
        </div>
      </a> -->
      <a href="/hyperapp-restaurant/" class="box image6">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Single Page Restaurant</div>
            </div>
        </div>
        </div>
      </a>
      <a href="/jquery-pokedex/" class="box image7">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Pokedex</div>
            </div>
        </div>
        </div>
      </a>
    </div>
  </div>
</section>
    
    <!-- Area for Experience section -->
    
    <!-- Area for Blog section -->

<section id="services-section">
  <div class="container">
    <div class="title">
      <div class="circle"></div>
      <h1>Contact</h1>
    </div>
      <!-- Possible copy to be placed for this section: Currently looking for new projects. If you have any questions, please don’t hesitate to contact me!
        Please only use the phone contact for urgent inquiries, preferably by text initially. Otherwise, Twitter and email are the best way to reach me. -->
    <div class="services-container">
      <div class="box blue">
      <i class="fas fa-envelope-open-text"></i>
        <h5>Email</h5>
        <p><a href="mailto:tracythedev@gmail.com" target="_blank">tracythedev@gmail.com</a></p>
      </div>
      <div class="box red">
      <i class="fab fa-twitter"></i>
        <h5>Twitter</h5>
        <p><a href="https://twitter.com/soradev" target="_blank">https://twitter.com/soradev</a></p>
      </div>
      <div class="box yellow">
      <i class="fas fa-mobile-alt"></i>
        <h5>Phone</h5>
        <p><a href="tel:510-866-0987" target="_blank">510-866-0987</a></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>