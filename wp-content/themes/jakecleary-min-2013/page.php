<?php

/**
*
*	@package JC.MIN.2K13
*
*/

get_header();
the_post();

?>

<div class="primary-content" role="main">			
		<article class="article-<?php the_ID(); ?> single">
						
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
			<div class="content">			
				<?php the_content(); ?>
			</div>

		</article>	
</div>

<?php

get_footer(); 

?>