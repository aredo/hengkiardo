<!--
id: 25839324367
link: http://blog.hengkiardo.com/post/25839324367/wp-remove-link
slug: wp-remove-link
date: Mon Jun 25 2012 13:37:00 GMT+0700 (WIT)
publish: 2012-06-025
tags: worpdress
title: How to Automatically Remove Links from WordPress Images
-->


    add_filter( 'the_content', 'attachment_image_link_remove_filter' ); 
    function attachment_image_link_remove_filter( $content ) { 
       $content = preg_replace( array('{<a(.*?)(wp-att|wp-content\/uploads)[^>]*>}'), array(''), $content ); 
       return $content; 
    }
     

