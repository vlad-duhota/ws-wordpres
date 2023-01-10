<?php
	$this_id='ws_b0_'.$args['wmns_flax_counter'];
?>

<section id="<?php echo $this_id?>" class="hero" style="background-image: url(<?php echo wp_get_attachment_url( get_sub_field('ws_b0_img'), 'full' )?>)">
    <div class="container">
            <?php the_sub_field('ws_b0_title'); ?>
            <p class="hero__subtitle"><?php the_sub_field('ws_b0_subtitle'); ?></p>        
        </div>
        <a href="#about" class="hero__scroll anchor">
            <span>Scroll down</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/img/home/scroll-down.svg" class="hero__scroll-img">
        </a>          
</section>