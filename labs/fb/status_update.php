<h1>Facebook Status Update</h1>
 <?php 
 var_dump($access_token);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$status=$_POST['status'];
$facebook_id=$userdata['id'];
$params = array('access_token'=>$access_token, 'message'=>$status);
$url = "https://graph.facebook.com/$facebook_id/feed";
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_POSTFIELDS => $params,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_VERBOSE => true
));
$result = curl_exec($ch);
// End
echo "<span style='color:#cc0000'>Message Updated</span>";
}
?>

<form method="post" action="">
<textarea name="status"></textarea> <br/>
<input type="submit" value=" Update "/>
</form>
 