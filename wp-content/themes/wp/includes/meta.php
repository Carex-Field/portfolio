<?php
  global $post, $pageid;
?>

<?php
/* <body class="p-<?php echo $pageid ?>"> */
if ( empty( $GLOBALS['pageid'] ) ) {
	if ( is_front_page() || is_home() ) {
		$pageid = 'top';
	} else if ( is_page() ) {
		$pageid = $post->post_name;
	} else if ( is_single() ) {
		$pageid = $post->post_type . 'detail';
	} else {
		$pageid = '';
	}
}
?>

<?php
// Always set initial value, same as TOP.
$title = "";
$description = "";
// Set to true on the page where the script is loaded.
$scripts = false;

// if ( is_front_page() || is_home() ) {
// 	$title       = "";
// 	$description = "";
// 	$scripts     = true;
// } else if ( is_page() ) {
// 	$title       = $post->post_title . " | ○○";
// 	$description = "";
// } else if ( is_single() ) {
// 	$title       = $post->post_title . " | ○○";
// 	$description = "";
// }

// meta follow $pageid
if ( $pageid === 'top' ) {
	$title       = "Carex Field Portfolio";
	$description = "";
	$scripts = true;
}
if ( $pageid === '2ot' ) {
	$title       = "2OT -Double Over Time-";
	$description = "";
	$scripts = true;
}
if ( $pageid === 'abc-school' ) {
	$title       = "ABC School Kids Programming";
	$description = "";
	$scripts = true;
}
// if ( $pageid === 'news' ) {
// 	$title       = "お知らせ | ○○";
// 	$description = "";
// }
// if ( $pageid === 'news-detail' ) {
// 	$title       = esc_attr( get_the_title() ) . " | ○○";
// 	$description = "";
// }
?>