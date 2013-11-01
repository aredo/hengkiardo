<!--
id: 13961838819
link: http://blog.hengkiardo.com/post/13961838819/wordpress-query-a-custom-taxonomy
slug: wordpress-query-a-custom-taxonomy
date: Fri Dec 09 2011 15:26:00 GMT+0700 (WIT)
publish: 2011-12-09
tags: wordpress
title: Wordpress: Query a custom taxonomy
-->


// Example query to select all posts belonging to a custom taxonomy.
\$args = array( ‘tax\_query’ = —\>

   array(

       array(

          ‘taxonomy’ =\> ‘TAXONOMY\_NAME’,

          ‘field’ =\> ‘slug’,

          ‘terms’ =\> ‘TAXONOMY\_SLUG’

        )

   )

);

\$the\_query = new WP\_Query( \$args ); // The Loop

while ( \$the\_query-\>have\_posts() ) : \$the\_query-\>the\_post();

echo ‘ ’; the\_title(); echo ‘ ’;

endwhile;

// Reset Post Data wp\_reset\_postdata();

?\>

