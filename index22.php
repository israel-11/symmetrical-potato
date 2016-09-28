<?php get_header(); ?>
<div class='col-md-10'>


	<!-- Content (boxes of news) -->
	<div class='row'>

		<!-- news -->
		<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading"><h2>Noticias</h2></div>
			<div class="panel-body">
			<?php
				wp_reset_query();
				$args = array(
					'type' => 'post',
					'posts_per_page' => 3,
					'category_name' => 'noticias'
					);
				$news = new WP_Query($args);
				while($news->have_posts()) : $news -> the_post(); ?>
					<h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
					<?php 
				endwhile; 
			?>
			</div>
		</div>
		</div>

		<!-- Opportinities -->
		<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading"><h2>Oportunidades</h2></div>
			<div class="panel-body">
			<?php
				wp_reset_query();
				$args = array(
					'type' => 'post',
					'posts_per_page' => 3, 
					'category_name' => 'oportunidades' //insert category slug here
					);
				$opp = new WP_Query($args);

				while($opp->have_posts()) : $opp -> the_post(); ?>
					<h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
					<?php 
				endwhile; 						
			?>
			</div>
		</div>
		</div>

		<!-- Events -->
		<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading"><h2>Eventos</h2></div>
			<div class="panel-body">
			<?php
				wp_reset_query();
				$args = array(
					'type' => 'eventos',
					'posts_per_page' => 3,
					'category_name' => 'eventos'
					);
				$eventos = new WP_Query($args);
				while($eventos->have_posts()) : $eventos -> the_post(); ?>
					<h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a><h4>
					<?php 
				endwhile; 						
			?>
			</div>
		</div>
		</div>				
	</div>
</div>
<?php get_footer(); ?>