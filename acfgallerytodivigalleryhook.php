<?php
add_filter('et_pb_module_shortcode_attributes', 'acfgallerytodivigallery', 20, 3);

function acfgallerytodivigallery($props, $atts, $slug) {
	$gallery_module_slugs = array('et_pb_gallery');
	if (!in_array($slug, $gallery_module_slugs)) {
		return $props;
	}
	if ( 'name_post' == get_post_type() ) {
	$props['gallery_ids'] = get_field('acfgalleryname', false, false);
		return $props;
	}
	else return $props;
}
