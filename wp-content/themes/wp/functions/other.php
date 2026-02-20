<?php
/* ===============================================================================
  その他
=============================================================================== */


/*===================================
wp_head 不用な情報を消す
===================================*/
//バージョン
remove_action('wp_head', 'wp_generator');

/*
//遠隔投稿
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

//コメントフィードを削除
remove_action('wp_head', 'feed_links_extra', 3);
*/

// 「wp-block-library-css」を削除
function dequeue_plugins_style() {
	//プラグインIDを指定し解除する
	wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);

// GSAP
function add_gsap() {
  if (is_front_page()) {
    wp_enqueue_script(
      'gsap',
      'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
      array(),
      null,
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'add_gsap');