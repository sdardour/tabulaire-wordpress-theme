
<?php get_header() ; ?>

<?php if ( have_posts() ) : $searchMode = isset( $_GET[ "s" ] ) && !empty( $_GET[ "s" ] ) ; ?>

	<?php if ( SDARDOURCOM_TABULAIRE_THEME_DEMO_WEBSITE() ) { ?>

		<div class="text-center">
			<span style="padding: 2.5px; background: #ffffcc; color: #666;">
				<a href="https://sdardour.com/lab/2020/tabulaire-wordpress-theme/" target="_blank">Tabulaire</a> turns WordPress into a <span style="color: #dd0000;">note-taking app</span>.
				Get it from <a href="https://github.com/sdardour/tabulaire-wordpress-theme" target="_blank">GitHub</a>.
			</span>
		</div>

	<?php } ?>

	<?php if ( $searchMode ) { ?>

		<h2 class="text-center text-muted">
			<?php echo "Search Results: " . $_GET[ "s" ] ; ?>
		</h2>

	<?php } else { ?>

		<h2 class="text-center text-muted">
			Latest Notes
		</h2>

	<?php } ?>

	<div class="form-group" style="width: 100%; max-width: 600px; margin: 0 auto;">
		<input type="search" class="form-control" id="tabulaire-f" placeholder="Quick Search" />
	</div>

	<?php if ( SDARDOURCOM_TABULAIRE_THEME_DEMO_WEBSITE() ) { ?>

		<div class="vspace1"></div>

		<div class="text-center">
			<span style="padding: 2.5px; background: #ffffcc; color: #666;">
				<img src="<?php echo get_template_directory_uri(); ?>/arrow.png" width="20" height="20" class="d-inline-block align-top" alt="" />
				Perform a <span style="color: #dd0000;">quick</span> search
			</span>
		</div>

	<?php } ?>

	<hr />

	<table class="table table-hover">

		<thead>

			<tr class="d-flex">
				<th class="col-sm-2" style="font-weight: normal;">Date</th>
				<th class="col-sm-7" style="font-weight: normal;">Title</th>
				<th class="col-sm-3" style="font-weight: normal;">Categories, Tags</th>
			</tr>

		</thead>

		<tbody id="tabulaire-l">

		<?php while ( have_posts() ) : the_post() ; ?>

			<tr class="d-flex">
				<td class="col-sm-2 text-muted"><?php the_time( "F jS, Y" ) ; ?></td>
				<td class="col-sm-7">
					<a href="<?php the_permalink() ; ?>" title="<?php the_title_attribute() ; ?>"><?php the_title() ; ?></a>
					<span class="hideme"><?php wp_strip_all_tags( the_content() , $remove_breaks = true ) ; ?></span>
				</td>
				<td class="col-sm-3 text-muted site-info"><?php the_category( ", " ) ; the_tags( ", " ) ; ?></td>
			</tr>

		<?php endwhile ; ?>

		</tbody>

	</table>

	<hr />

	<?php
		$prev_link = get_previous_posts_link() ;
		$next_link = get_next_posts_link() ;
	?>

	<?php if ( $prev_link || $next_link ) { ?>

		<div class="text-center text-muted" style="padding: 2rem; background: url(<?php echo get_template_directory_uri(); ?>/pattern.png);">
			<?php if ( $prev_link ) { echo "<p>" . $prev_link . "</p>" ; } ?>
			<?php if ( $next_link ) { echo "<p>" . $next_link . "</p>" ; } ?>
		</div>

		<hr />

	<?php } ?>

<?php else : ?>

	<h5 class="text-center text-danger">
		There’s nothing to show here
	</h5>

	<hr />

<?php endif ; ?>

<?php get_footer() ; ?>
