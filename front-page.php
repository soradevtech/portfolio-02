<?php get_header(); ?>

<?php 
  $my_pod = pods('front_page', 'default-front-page'); // Loading front page pod post
?>

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
        <!-- I had to write in all of the background image-specific properties directly
          to the page in order to display the image dynamically with pods. -->
        <style>
          #top .img .background-img {
            background: url("<?php echo $my_pod->display('splash_image');?>");
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
          }
        </style>
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
          <div class="user-img" style="background: url('<?php
            echo $my_pod->display('about_me_picture'); // Pod to display profile picture
          ?>)">
          </div>
          <div class="info">
            <h4>Tracy Marshall</h4>
            <span>Developer</span>
          </div>
        </div>
          <?php
              echo $my_pod->display('about_me'); // About Me section text pod
          ?>
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
              <div class="text">RPS Game</div>
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
        <p><a href="mailto:<?php 
          echo $my_pod->display('email');
          ?>" target="_blank"><?php 
          echo $my_pod->display('email');
          ?></a></p>
      </div>
      <div class="box red">
      <i class="fab fa-twitter"></i>
        <h5>Twitter</h5>
        <p><?php echo $my_pod->display('twitter_link');?></p>
      </div>
      <div class="box yellow">
      <i class="fas fa-mobile-alt"></i>
        <h5>Phone</h5>
        <p><a href="tel:<?php echo $my_pod->display('phone');?>" target="_blank"><?php echo $my_pod->display('phone');?></a></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>