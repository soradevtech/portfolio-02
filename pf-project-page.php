<?php /* 
Template Name: Project Page 
Template Post Type: pf_project
*/ ?>

<?php get_header(); ?>

<?php 
  // Grabbing the page slug to reference
  global $post;
  $slug = $post->post_name;

  // Creating a pod reference including the slug
  $my_pod = pods('pf_project', $slug);
?>

<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <?php echo '<a href="' . $my_pod->display('project_link') . '" target="_blank">'; ?>
            <div class="img" style="background: url('<?php echo $my_pod->display('splash_image'); ?>');"></div>
          </a>    
        </div>
<h1><?php echo $my_pod->display('post_title'); ?> <?php if($my_pod->display('wip_indicator')) { ?><p style="font-size: 2rem;">(WIP)</p><?php }; ?></h1>
        <div class="info">
          <div class="buttons">
            <?php echo '<a href="' . $my_pod->display('project_link') . '" target="_blank">'; ?><i class="fas fa-desktop"></i> View Project</a>
            <?php if($my_pod->display('source_code_link')) { ?>
              <?php echo '<a href="' . $my_pod->display('source_code_link') . '" target="_blank">'; ?><i class="fas fa-code"></i> View Code</a>
            <?php } else { ?>
              <a href="#"><i class="fas fa-code"></i> Code Repo Coming Soon</a>
            <?php }; ?>
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