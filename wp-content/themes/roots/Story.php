<?php /* Template Name: Story */ ?>
<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
<div>
	<p>I work primarily with a medium-fire stoneware clay body (Cone 6) fired in an electric kiln.</p>
	<p>My functional work is made with an intent to bring artful settings to our homes and daily food presentations.</p>
	<p>The focus of my present work is an exploration of texture, line and form through one-of-a-kind or limited edition pieces with carved, slipped or sculptural details.</p>
	</div>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
 
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>