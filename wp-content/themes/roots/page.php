<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
		<div id="mainImg" class="row">
			<div class="span4">
				<img src="../assets/teapots01.jpg">
				</div>
			</div><!-- /#mainImg -->
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>