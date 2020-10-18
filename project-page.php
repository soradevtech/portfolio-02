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
      <!-- Insert appropriate fields for dynamic content to show -->
      <div class="container">
        <div class="project-image">
          <!-- The img tag sometimes has to be echoed with the pod field. Sometimes the image
            address won't print otherwise. -->
          <?php echo '<a href="' . $my_pod->display('project_link') . '" target="_blank">'; ?>
            <div class="img" style="background: url('<?php echo $my_pod->display('splash_image'); ?>');"></div>
          </a>    
        </div>
        <!-- There's a conditional to check if the WIP indicator is active -->
        <h1><?php echo $my_pod->display('post_title'); ?> <?php if($my_pod->display('wip_indicator') === 'Yes') { ?><p style="font-size: 2rem;">(WIP)</p><?php }; ?></h1>
        <div class="info">
          <div class="buttons">
            <?php echo '<a href="' . $my_pod->display('project_link') . '" target="_blank">'; ?><i class="fas fa-desktop"></i> View Project</a>
            <?php if($my_pod->display('source_code_link')) { ?>
              <!-- Conditional on whether there is a code repository available -->
              <?php echo '<a href="' . $my_pod->display('source_code_link') . '" target="_blank">'; ?><i class="fas fa-code"></i> View Code</a>
            <?php } else { ?>
              <a href="#"><i class="fas fa-code"></i> Code Repo Coming Soon</a>
            <?php }; ?>
          </div>
        </div>
        <?php echo $my_pod->display('post_content'); ?>
        <div class="technologies">
          <h3>Technologies</h3>

          <div class="icons">
            <!-- Loop through each icon image in the Tech Icons field. I'll parse out how this works in the future. -->
            <?php foreach ($my_pod->get_field('tech_icons') as $photo) { ?>
                <div class="icon">
                  <img src="<?php echo $photo['guid']; ?>" alt="<?php echo $name; ?>">
                </div>
            <?php }; ?>
          </div>
        </div>
        <!-- <div class="video">
          <h3>Video Walkthrough</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Hy5SThZC19A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div> -->
      </div>

    </section>

<?php get_footer(); ?>