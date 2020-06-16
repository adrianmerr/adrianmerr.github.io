<?php
get_header(); 
pageBanner(array(
'title' => 'Portfolio',
'subtitle' => 'Explore BCA’s recent projects'
	
));

?>

  <div class="container container--narrow page-section">
<?php
	while(have_posts()) {
		the_post(); ?>
		<div class="post-item">
	  	<h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="metabox">
			<p>Building Type:<!-- <p>Posted by ?php the_author_posts_link(); ? --> <!-- on ?php the_time('n.j.y'); ?> in --> <?php echo get_the_category_list(', ') ?></p>
			
				<p><?php echo get_the_tag_list('<p>Services: ',', ','</p>');
?></p>
				
			</div>
			
			
			<div class="container container--narrow page-section"> 	
		<div class="generic-content"> 
			<div class="one-fourth">
				<?php the_post_thumbnail('projectImage'); ?>
				</div>
			<div class="three-fourths">
				<div class="generic-content">
			<?php the_excerpt(); ?>
			<p><a class="btn btn--blue" href="<?php the_permalink(); ?>">continue reading &raquo;</a></p>
	  </div>
				</div>
			
		</div>
			
		
	  </div>
	<?php }
	echo paginate_links();
	?>

</div>

<?php get_footer();

?>