
<?php get_header() ; ?>

<?php if ( have_posts() ) : ?>

	<div style="width: 100%; max-width: 750px; margin: 0 auto;">

		<?php if ( SDARDOURCOM_TABULAIRE_THEME_DEMO_WEBSITE() ) { ?>

			<div class="text-center">
				<span style="padding: 2.5px; background: #ffffcc; color: #666;">
					<a href="https://sdardour.com/lab/2020/tabulaire-wordpress-theme/" target="_blank">Tabulaire</a> turns WordPress into a <span style="color: #dd0000;">note-taking app</span>.
					Get it from <a href="https://github.com/sdardour/tabulaire-wordpress-theme" target="_blank">GitHub</a>.
				</span>
			</div>

		<?php } ?>

		<h2 class="text-center text-success">
			Note
		</h2>

		<hr />

		<?php while ( have_posts() ) : the_post() ; ?>

			<?php

			if ( has_post_thumbnail() ) {

				$img_idn = get_post_thumbnail_id() ;
				$img_lnk = wp_get_attachment_url( $img_idn ) ;

			?>

				<div style="width: 100%; max-width: 600px; margin: 0 auto;">
					<img src="<?php echo $img_lnk ; ?>" alt="" style="width: 100%; height: auto;" />
				</div>

				<hr />

			<?php

			}

			?>

			<h1 class="text-center">
				<a href="<?php the_permalink() ; ?>" title="<?php the_title_attribute() ; ?>"><?php the_title() ; ?></a>
			</h1>

			<div class="text-center text-muted site-info">
				<small><?php the_time( "F d, Y" ) ; ?><br /><?php the_category( ", " ) ; the_tags( ", " ) ; ?><?php edit_post_link( "✏️", "<br />" ) ; ?></small>
			</div>

			<hr />

			<div class="post-content">
				<?php the_content() ; ?>
			</div>

			<hr />

		<?php endwhile ; ?>

		<?php
			$prev_link = get_previous_post_link() ;
			$next_link = get_next_post_link() ;
		?>

		<?php if ( $prev_link || $next_link ) { ?>

			<div class="text-center text-muted" style="padding: 2rem; background: url(<?php echo get_template_directory_uri(); ?>/pattern.png);">
				<?php if ( $prev_link ) { echo "<p>" . $prev_link . "</p>" ; } ?>
				<?php if ( $next_link ) { echo "<p>" . $next_link . "</p>" ; } ?>
			</div>

			<hr />

		<?php } ?>

	</div>

<?php else : ?>

	<h5 class="text-center text-danger">
		There’s nothing to show here
	</h5>

	<hr />

<?php endif ; ?>

<?php get_footer() ; ?>
