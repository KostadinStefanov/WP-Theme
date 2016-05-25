<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1> 
	<?php the_content();?>

    <?php endwhile;
endif;

get_footer();




