<?php
if (!defined('ABSPATH')) {
	exit;
}

if ( post_password_required() ) {
	return;
}		
?>

<div id="comments" class="comments-area">

<?php if (comments_open()) { ?>

<script src="https://apis.google.com/js/plusone.js"></script>

<div id="g-comments" class="g-comments"
    data-href = "<?php the_permalink(); ?>"
    data-width = "620"
    data-first_party_property = "BLOGGER"
    data-view_type = "FILTERED_POSTMOD">
</div>

<noscript>Please enable JavaScript to view the <a href="https://plus.google.com/">comments powered by Google+.</a></noscript>
	
<?php } // comments open ?>

</div>