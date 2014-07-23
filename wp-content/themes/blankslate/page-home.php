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

<div class="y"><hr><h4><span style="color:#FF3366">Watson:</span>'You want to remember,Sherlock,I was a soldier,I killed people.' <span style="color:#FF3366">Sherlock:</span>'You were a doctor!' <span style="color:#FF3366">Watson:</span>'I had bad days!'</h4><hr>
    <br>
    <p>It's a site about famous detective serial Sherlock.Sherlock is a British television crime drama that presents a contemporary update of Sir Arthur Conan Doyle's Sherlock Holmes detective stories. Created by Steven Moffat and Mark Gatiss, it stars Benedict Cumberbatch as Sherlock Holmes and Martin Freeman as Doctor John Watson. Six episodes have been produced, the first three of which aired in 2010. Series two aired in 2012, and a third series began production in March 2013.</p><br>
    
     <div id="e"><hr>
    <h3>1 season</h3><hr>
    <img src="<?=get_template_directory_uri();?>/images/1season/series0.jpg"><p>Unaired Pilot  2010 </p>
    <img src="<?=get_template_directory_uri();?>/images/1season/series1.jpg"><p>Study in Pink  2010 </p>
    <img src="<?=get_template_directory_uri();?>/images/1season/series2.jpg"><p>The Blind Banker  2010 </p>
    <img src="<?=get_template_directory_uri();?>/images/1season/series3.jpg"><p>The Great Game  2011 </p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr><h3>2 season</h3><hr>
    <img src="<?=get_template_directory_uri();?>/images/2season/series1.jpg"><p>The Scandal In Belgravia  2011 </p>
    <img src="<?=get_template_directory_uri();?>/images/2season/series2.jpg"><p>The Hound of Baskerville  2012 </p>
    <img src="<?=get_template_directory_uri();?>/images/2season/series3.jpg"><br><p>Reichenbach Fall  2012 </p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr><h3>3 season</h3><hr>
    <img src="<?=get_template_directory_uri();?>/images/3season/series1.jpg"><p>The Empty Hearse  2014 January 19 </p>
    <img src="<?=get_template_directory_uri();?>/images/3season/series2.jpg"><p>The Sign of Three  2014 January 26 </p>
    <img src="<?=get_template_directory_uri();?>/images/3season/series3.jpg"><p>His Last Vow   Febraury 2 2014 </p><br></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    
    <hr><h4><span style="color:#FF3366">Sherlock:</span>'Mrs Hudson take away the skull'</h4><hr>
    </div>
    <!--<audio autoplay="true" src="http://www.vorbis.com/music/Epoq-Lepidoptera.ogg">-->

