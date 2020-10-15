
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

			<?php edit_post_link( "✏️", "<div class=\"text-center text-muted site-info\"><small>", "</small></div>" ) ; ?>

			<hr />

			<div class="post-content">
				<?php the_content() ; ?>
			</div>

			<hr />

		<?php endwhile ; ?>

	</div>

<?php else : ?>

	<h5 class="text-center text-danger">
		There’s nothing to show here
	</h5>

	<hr />

<?php endif ; ?>

<?php get_footer() ; ?>
