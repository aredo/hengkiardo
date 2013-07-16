<?php
//Facebook Application Configuration.
$facebook_appid='139078612843743';
$facebook_app_secret='554050bc39e2795184e4cd7b9d3d387f';

$facebook = new Facebook(array(
'appId'  => $facebook_appid,
'secret' => $facebook_app_secret,
'cookie' => true,	
));


?>