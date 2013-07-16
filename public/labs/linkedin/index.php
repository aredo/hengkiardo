<?php
session_start();

if(!extension_loaded('oauth')) {
	echo "You should install PECL lib OAuth";
	exit;
}
	
include('includes/config.php');
require_once('linkedin/Request.php');
require_once('linkedin/Profile.php');
require_once('linkedin/Connection.php');
require_once('linkedin/Status.php');

/* Startup the autorisation precess and create an communication channel */
$linkedIn = new LinkedIn_Request();

if(isset($_POST['action']) && $_POST['action'] == 'updateStatus') 
{
    $linkedIn->publishStatus($_POST['status']);
}


$linkedIn->getNetworkUpdates();

/* Get the profile information */
$profile = $linkedIn->pullProfile($profileFields);

/* Get all connections from the profile */
$connections = $linkedIn->pullConnections();

?>
<h1>Profile</h1>
<?php echo $profile->firstname; ?>&nbsp;<?php echo $profile->lastname; ?>
<?php echo $profile->headline; ?>
<?php echo $profile->currentstatus; ?>

<?php include('forms/statusUpdate.php'); ?>
<br/>
<h1>Positions</h1>
<?php 
foreach($profile->positions as $position)
{
	// echo $position->id;
	echo $position->title;
	echo "<br/>";
	echo $position->{'start-date'}->year;
	echo " till ";
	echo $position->{'end-date'}->year;
	echo "<br/>";
	echo $position->{'is-current'};
	echo "<br/>";
	echo $position->company->name;
	echo "<br/>";
	echo "<hr>";      
}
?>
<h1>Eduction</h1>
<?php 
foreach($profile->educations as $education)
{
	echo "Name of School:" . $education->{'school-name'};
	echo "<br/>";
	//echo $education->id;
	echo $education->notes;
	echo "<br/>";
	echo "Activities: " . $education->activities;
	echo "<br/>";
	echo "Degree: " . $education->degree;
	echo "<br/>";
	echo $education->{'field-of-study'};
	echo "<br/>";
	echo $education->{'start-date'}->year;
	echo " till ";
	echo $education->{'end-date'}->year;
}

?>
<h1>Connections ( <?php echo $profile->connections['total'];?> )</h1>
<?php
foreach($connections As $connection)
{
	echo $connection->id;
	
	if($connection->pictureurl != "") {
		echo "<img src='". $connection->pictureurl . "' border='0'>";
	}	
	echo $connection->firstname . ' ' . $connection->lastname;
	echo "<br/>";
	echo $connection->headline;
	echo "<hr>";
}
?>