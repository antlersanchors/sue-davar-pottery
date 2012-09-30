<?php /* Template Name: About_Sue */ ?>
<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
<div>
	<p>I live and work in the Parkland area of the Province of Manitoba, Canada, adjacent to Riding Mountain National Park.</p>
	<p>The subtle beauty of this landscape is an unending source of creative inspiration and expression.</p>
	<p>The tactile experience of creating with clay, fabric and paper motivates my creative spirit. Working with clay invites carving of rims and incising patterns in the flow of the form. Choosing and matching patterns and textures of papers to evoke a desired tone is equally motivating.</p>
	</div>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
   
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>