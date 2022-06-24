<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label>
					<input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s">
				</label>
				<button type="submit" class="search-submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
