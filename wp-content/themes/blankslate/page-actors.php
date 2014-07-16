<?php
$items = new WP_Query(
    array(
        'post_type' => 'actors',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

wp_reset_query();

$items = $items->posts;

?>

<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
?>
    <?=$item->post_title;?></h1>
    <?=$item->meta["fieldname"];?>
<?php endforeach; ?>



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

<section id="actors">

<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
?>
<div class="actor">
	<img src="<?=$item->meta["image"]["url"];?>" />
    <h2><?=$item->post_title;?></h2>
	<div class="description"><?=$item->post_content;?></div>
    <?=$item->meta["fieldname"];?>
</div>
<?php endforeach; ?>
</section>

</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>