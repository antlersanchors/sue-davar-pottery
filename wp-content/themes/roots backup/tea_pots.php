<?php /* Template Name: tea_pots */ ?>
<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
			<div class="row">
			<div id="selectedItemImg" class="span5">
				<img src="../../assets/teapots01.jpg" alt="">
			</div>
			<div id="gallerySidebar" class="span5">

<h4>About Sue's Teapots</h4>
<p>In squid marfa tofu, vinyl PBR ethical. Pitchfork brooklyn cupidatat odio yr mlkshk. Delectus post-ironic readymade, viral carles brunch minim irure. Odio id brunch minim consectetur, kale chips chillwave anim craft beer placeat 8-bit cillum.</p>
<ul class="sidebarList">
<li>Cliche portland nulla, four loko pariatur seitan nostrud street </li>
<li>Art 8-bit brooklyn truffaut craft beer odio ullamco bushwick Pariatur</li> <li>Blog cillum DIY pinterest. Mixtape excepteur ex put a bird on it, cray</li>
<li>Cupidatat freegan eiusmod lomo organic helvetica irure tumblr mumblecore.</li>
</ul>
<h4>More Info</h4>
<p>Aesthetic qui vegan, nihil williamsburg american apparel organic nulla four loko placeat vero art party. Lo-fi pitchfork semiotics est.</p>
<ul class="sidebarList">
<li>Sustainable pop-up banksy cosby sweater, letterpress street art.</li>
<li>Selvage cray sint, keytar put a bird on it chillwave VHS readymade sriracha butcher do ennui flexitarian.</li>
<li>Sustainable lomo salvia direct trade. Magna trust fund tofu do ut williamsburg.</li>
</ul>
			<a class="btn btn-info pull-right" data-toggle="modal" href="#whereToBuyModal">Where to Buy</a>
			<div id="whereToBuyModal" class="modal hide fade" style="display: none;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">x</button>
					<h3>Where to Buy Sue Davar Pottery</h3>
					</div>
				<div class="modal-body">
					<p>Find Sue's pottery at any of these fine retailers:</p>
					<h4><a href="http://theoldchurch.ca" title="Old Church Pottery & Gift">Old Church Pottery & Gift</a></h4>
					<p>Minnedosa, MB</p>
					<h4><a href="http://poormichaelsbooks.ca" title="Poor Michael's Bookshop & Cafe">Poor Michael's Bookshop & Cafe</a></h4>
					<p>Onanole, MB</p>
					<h4><a href="http://fishflygallery.com" title="Fishfly Gallery">Fishfly Gallery</a></h4>
					<p>Winnipeg Beach, MB</p>
					<h4><a href="http://elkhornresort.mb.ca" title="Solstice Spa Giftshop at the Elkhorn Resort">Solstice Spa Giftshop</a></h4>
					<p>Wasagaming, MB</p>
					</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal" data-bitly-type="bitly_hover_card">Close</a>
					</div>
					</div><!-- /#whereToBuyModal -->
				</div>
				</div>
				<div id="galleryTest">

			<div id="mainGallery" class="span9">
				<ul class="thumbnails">
			  		<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
					<li class="span2">
			    		<a href="#" class="thumbnail">
			      			<img src="http://placehold.it/260x180" alt="">
			    		</a>
			  		</li>
				</ul>
			</div><!-- /#mainGallery -->
      </div><!-- /#main -->
    <?php roots_main_after(); ?>

    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>