<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>  


    <div class="y"><hr><h4><span style="color:#FF3366"> Sherlock:</span>'Of course I'll humbug , that's what people do!'</h4><hr>
    <div id="aaa"><a href="<?=get_template_directory_uri();?>/page-gallery.php"><img id="aa" src="<?=get_template_directory_uri();?>/images/1season/series1.jpg"><p>1-st Season</p></a>
       <a href="<?=get_template_directory_uri();?>/page-gallery1.php"><img id="aa" src="<?=get_template_directory_uri();?>/images/2season/series1.jpg"><p>2-nd Season</p></a>
       <a href="<?=get_template_directory_uri();?>/page-gallery2.php"><img id="aa" src="<?=get_template_directory_uri();?>/images/3season/series1.jpg"><p>3-rd Season</p></a>
       <a href="<?=get_template_directory_uri();?>/page-gallery3.php"><img id="aa" src="<?=get_template_directory_uri();?>/images/Sherlockoproblems/img1.jpg"><p>Sherlockproblems</p></a>
       <a href="<?=get_template_directory_uri();?>/page-gallery4.php"><img id="aa" src="<?=get_template_directory_uri();?>/images/humour/img0.jpg"><p id="aaaa">Humour</p></a></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr><h4><span style="color:#FF3366"> Mrs Hudson:</span>'I'm your houskeeper, not a houseworker!'</h4><hr> 
    </div>
