<?php get_header(); ?>
<main id="main" class="columns large-12 small-12">

	<h1 class="page-title"><?php _e( 'Portfolio', 'galacticblum' ); ?></h1>

	<?php $terms = get_terms([
		'taxonomy' => 'tipo_de_proyecto'
	]); ?>

	<ul class="tipos-filter">
		<?php foreach ( $terms as $term ): ?>
			<li>
				<a href="<?php echo esc_url( get_term_link( $term->term_id ) ); ?>" class="button small"><?php echo $term->name ?></a>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php get_template_part( 'template-parts/loop' ); ?>

</main>
<?php get_footer(); ?>
