<?php get_header(); ?>

<?php 
  $my_pod = pods('front_page', 'default-front-page'); // Loading front page pod post
?>

<section id="top">
  <div class="container">
    <div class="splash">
      <div class="info">

        <h1>Tracy Marshall</h1>
        <p>Developer</p>
        <span class="arrow">&#8594;</span> <a href="#portfolio-section">Latest Projects</a>
      </div>
      <div class="background-img">
        <!-- I had to write in all of the background image-specific properties directly
          to the page in order to display the image dynamically with Pods. -->
        <style>
          #top .container .splash .background-img {
            background: url("<?php echo $my_pod->display('splash_image');?>");
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
          }
        </style>
      </div>
    </div>
    <!-- <div class="img">
    </div> -->
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
      <style>
        #portfolio-section .portfolio-container .box .image {
          
          height: 100%;
          width: 100%;
          background-size: cover;
          background-position: center center;
          background-repeat: no-repeat;
        }
      </style>
      <?php 
        // Capturing fields for every portfolio project pod page
        $params = array(
          'limit' => 0
        );
        $pf_pod = pods('pf_project', $params);

        // Loop through the items returned. Output as square button that links to
        // further project info.
        while ( $pf_pod->fetch() ) { ?>
          <a href="<?php echo $pf_pod->display('permalink') ?>" class="box">
            <!-- Background-related CSS must be in the HTML to insert the Pods image field -->
            <div class="image" style="
              background: url('<?php echo $pf_pod->display('project_thumb'); ?>');
              height: 100%;
              width: 100%;
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
            ">
              <div class="hover-bg">
                <div class="title">
                  <div class="text"><?php echo $pf_pod->display('front_page_title'); ?></div>
                </div>
            </div>
            </div>
          </a>
          
      <?php }; ?>
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
      <!-- Adding the contact info fields -->
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