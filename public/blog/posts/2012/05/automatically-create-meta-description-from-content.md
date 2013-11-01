<!--
id: 22827177736
link: http://blog.hengkiardo.com/post/22827177736/automatically-create-meta-description-from-content
slug: automatically-create-meta-description-from-content
date: Fri May 11 2012 11:46:00 GMT+0700 (WIT)
publish: 2012-05-011
tags: 
title: Automatically Create Meta Description From Content
-->


    function create_meta_desc() {
       global $post;
       if (!is_single()) {
         return;
       }

      $meta = strip_tags($post->post_content);
      $meta = strip_shortcodes($post->post_content);
      $meta = str_replace(array("\n", "\r", "\t"), ' ', $meta);
      $meta = substr($meta, 0, 125); echo ""; 
    }
    add_action('wp_head', 'create_meta_desc');

