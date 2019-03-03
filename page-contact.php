<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="g g-2up">
			<div class="gi">
				<?php $image = get_field('featured_img'); ?>
				<?php $imgClass = get_field('featured_img_flush'); ?>
				<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" <?php if($imgClass=="Flush") { echo 'class="flush"'; } ?>>
			</div>
			<div class="gi">
				<h1><?php the_field('page_title'); ?></h1>
				<div class="text">
				<?php the_field('page_content'); ?>
				</div>
				<a href="#custom-order" class="btn">Request A Custom Order</a>
			</div>
		</div>
		
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
