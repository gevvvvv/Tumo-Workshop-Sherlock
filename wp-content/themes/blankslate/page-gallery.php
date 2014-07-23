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
    <div class="y"><div id="y"><hr><h4>Шерлок, весь в крови и с гарпуном в руке, приходит домой.<span style="color:#FF3366">Джон:</span>И ты в таком виде ехал в метро?!
 <span style="color:#FF3366">Шерлок:</span>Ни один таксист меня не брал!</h4><hr>
<?php

$photo_list = file('<?=get_template_directory_uri();?>/list.txt', FILE_IGNORE_NEW_LINES);

foreach ($photo_list as $item)
{
	$tokens = explode('|',$item);
	$file = $tokens[0];
	
	echo "<img src='<?=get_template_directory_uri();?>/images/1season/$file' />";
}

?>
			<hr><h4><span style="color:#FF3366">Мориарти:</span> Нельзя, чтобы ты жил дальше. Просто нельзя. Я бы попробовал тебя убедить, но все возможные доводы уже пришли в твою голову.
</h4><hr></div>
		</div>
	</body>
</html>