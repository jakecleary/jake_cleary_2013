<?php

/**
*
*	@package JC.MIN.2K13
*
*/

get_header();

?>

<div class="primary-content" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<article class="article-<?php the_ID(); echo $wp_query->current_post == 0 ? ' first' : '' ; ?>">
			<header>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
				<time>
					<?php 

					the_time( d );
					echo ' // ';
					the_time( m );
					echo ' // '; 
					the_time( y ); 

					?>
				</time>
			</header>
			<div class="content">
				<?php grab_excerpt( 25 ); ?>
			</div>
			<p><a href="'. get_permalink() .'">Read More &rarr;</a></p>
		</article>

	<?php endwhile; else : ?>
		<h1>Hold it there!</h1>
		<p>Sorry, I couldn't find any posts! Some blog ey?!</p>
	<?php endif; ?>
	
</div>

<?php

get_footer(); 

?>