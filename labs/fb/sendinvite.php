<?php
    require 'lib/facebook.php';
	require 'lib/fbconfig.php';

   //Assuming the user has already authenticated the app
   $user_id = $facebook->getUser();

   //get the request ids from the query parameter
   $request_ids = explode(',', $_REQUEST['request_ids']);

   //build the full_request_id from request_id and user_id 
   function build_full_request_id($request_id, $user_id) {
      return $request_id . '_' . $user_id; 
   }
   print_r($request_ids);

   //for each request_id, build the full_request_id and delete request  
   foreach ($request_ids as $request_id)
   {
      echo ("reqeust_id=".$request_id."<br>");
      $full_request_id = build_full_request_id($request_id, $user_id);  
      /*echo ("full_request_id=".$full_request_id."<br>");
  
      try {
         $delete_success = $facebook->api("/$full_request_id",'DELETE');
         if ($delete_success) {
            echo "Successfully deleted " . $full_request_id;}
         else {
           echo "Delete failed".$full_request_id;}
        }          
      catch (FacebookApiException $e) {
      echo "error";}*/
    }
?>