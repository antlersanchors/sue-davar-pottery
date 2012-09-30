<?php /* Template Name: Where_to_Buy */ ?>
<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
<div>
	<p>Where to find my work:</p>
	<h4><a href="http://theoldchurch.ca" title="Old Church Pottery & Gift">Old Church Pottery & Gift</a></h4>
	<p>Minnedosa, MB</p>
	<h4><a href="http://poormichaelsbooks.ca" title="Poor Michael's Bookshop & Cafe">Poor Michael's Bookshop & Cafe</a></h4>
	<p>Onanole, MB</p>
	<h4><a href="http://fishflygallery.com" title="Fishfly Gallery">Fishfly Gallery</a></h4>
	<p>Winnipeg Beach, MB</p>
	<h4><a href="http://elkhornresort.mb.ca" title="Solstice Spa Giftshop at the Elkhorn Resort">Solstice Spa Giftshop</a></h4>
	<p>Wasagaming, MB</p>
</div>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>