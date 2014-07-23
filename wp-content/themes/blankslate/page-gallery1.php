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

<div class="y"><div id="y"><hr><h4><span style="color:#FF3366">Джон:</span> О, слушай, может, наконец обойдешься без этого?<span style="color:#FF3366">Шерлок:</span> То есть?<span style="color:#FF3366">Джон:</span> Я о твоем обыкновении загадочно двигать скулами и поднимать воротник пальто. Ты и без этого крут.<span style="color:#FF3366">Шерлок:</span> Я… я, я так не делаю!<span style="color:#FF3366">Джон:</span> Делаешь.</h4><hr>
<?php
$photo_list = file('list1.txt', FILE_IGNORE_NEW_LINES);

foreach ($photo_list as $item)
{
	$tokens = explode('|',$item);
	$file = $tokens[0];
	echo "Hello World";
	
	echo "<img src='images/2season/$file' />";
}

?>
<hr><h4><span style="color:#FF3366">Ватсон:</span> Когда это мы договорились?<span style="color:#FF3366">Шерлок:</span> Вчера вечером. Стоп! Ближе.<span style="color:#FF3366">Ватсон:</span> Меня не было дома вчера. Я был в Дублине.<span style="color:#FF3366">Шерлок:</span> Не моя вина, что ты не слушал</h4><hr>
		</div></div>
	</body>
</html>

