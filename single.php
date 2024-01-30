<?php get_header(); ?>

<div class="main">

<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="s-content">	

  <div class="s-thum">
    <?php the_post_thumbnail(); ?>
  </div>
    <h1 class="pagetitle"><?php the_title(); ?></h1>
    <?php echo get_post_meta($post->ID , 'athletename' ,true); ?>
    <?php echo get_post_meta($post->ID , 'genre' ,true); ?>
    <?php echo get_post_meta($post->ID , 'location' ,true); ?>
    <?php echo get_post_meta($post->ID , 'activity' ,true); ?>
    <?php echo get_post_meta($post->ID , 'enagementinstagram' ,true); ?>
    <?php echo get_post_meta($post->ID , 'engagement' ,true); ?>
    <?php echo get_post_meta($post->ID , 'followerinstagram' ,true); ?>
    <?php echo get_post_meta($post->ID , 'nationality' ,true); ?>
    <?php echo get_post_meta($post->ID , 'packagecampaign' ,true); ?>
    <?php echo get_post_meta($post->ID , 'star' ,true); ?>
    <?php the_content(); ?>
	</div>
<?php endwhile; ?>
 </section>
 
 <section>
  <div>
    <span class="previous"><?php previous_post_link( '%link', '前へ', true ); ?></span>
    <span class="next"><?php next_post_link( '%link', '次へ', true ); ?></span>
  </div>
 </section>

<?php get_footer(); ?>