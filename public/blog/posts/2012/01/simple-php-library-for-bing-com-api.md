<!--
id: 15285258360
link: http://blog.hengkiardo.com/post/15285258360/simple-php-library-for-bing-com-api
slug: simple-php-library-for-bing-com-api
date: Wed Jan 04 2012 13:37:23 GMT+0700 (WIT)
publish: 2012-01-04
tags: php, API, Bing
title: Simple PHP library for bing.com API
-->


    // Include the Bing API PHP Library
    require_once 'library/BingAPI.php';

    // Simply start the class with your AppID argumented
    $search = new BingAPI('YOUR APPID KEY');
    /* To use multiple resources simply do 
       ->setSources('Web+Image') , 
       it must match the source type bing.com provides */
    // Build your query easily
    $search->query('gimp')
           ->setSources('Web') 

           ->setFormat('xml')
     # Also you can try: xml, soap or json
           ->setOptions(
              array(
                    'Web.Count' => '10', 
                    'Web.Offset' => '0', 
                    'Adult' => 'Moderate', 
                    'Options' => 'EnableHighlighting')
    );
     # Check the API documentation in bing.com for more information

    # This will give you a raw output
    echo $search->getResults();

