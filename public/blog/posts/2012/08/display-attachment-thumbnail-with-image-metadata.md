<!--
id: 29402353528
link: http://blog.hengkiardo.com/post/29402353528/display-attachment-thumbnail-with-image-metadata
slug: display-attachment-thumbnail-with-image-metadata
date: Tue Aug 14 2012 17:49:00 GMT+0700 (WIT)
publish: 2012-08-014
tags: wordpress, metadata, images
title: Display attachment thumbnail with image metadata
-->


Adding this snippet within the loop of your index.php template file will
display a list of all post attachments with the following metadata
(Credit, Camera, Focal Length, Aperture, ISO, Shutter Speed, Time Stamp,
Copyright).

~~~~ {.prettyprint}
<?phpif($images =& get_children( 'post_type=attachment' )){   foreach($images as $id => $attachment ){           echo '<div>';           echo wp_get_attachment_image( $id, 'thumb' )."<br />";           $meta = wp_get_attachment_metadata($id);           echo "Credit:  ".$meta[image_meta][credit]."<br /> ";           echo "Camera:  ".$meta[image_meta][camera]."<br />";           echo "Focal length:  ".$meta[image_meta][focal_length]."<br />";           echo "Aperture:  ".$meta[image_meta][aperture]."<br />";           echo "ISO:  ".$meta[image_meta][iso]."<br />";           echo "Shutter speed:  ".$meta[image_meta][shutter_speed]."<br />";           echo "Time Stamp:  ".$meta[image_meta][created_timestamp]."<br />";           echo "Copyright:  ".$meta[image_meta][copyright];           echo '</div>';   }}?>
~~~~

