<?php include ("include/header.php"); ?>		

	<div data-role="header" data-position="fixed">
			<h1><?php echo $my_profile->name; ?></h1>
			<a href="index.php" data-icon="arrow-l">Back</a>
	</div><!-- /header -->	
	
	<div data-role="content">
	<?php 
		if($login)
		{
			echo $login;
		}
		else
		{	
	?>  <div class="content-data">
			<div class="head-profile">
				<span class="picture_profile fl">
					<img src="<?php echo $user_info->profile_image_url ?>" />				
				</span>
				<span class"fl">
					<?php echo $user_info->screen_name ?><br />
					<?php echo $user_info->name ?>
				</span>
				<div class="clear"></div>
				<p><?php echo $user_info->status->text; ?><br /></p>				
				<span class="via"><span>via </span><?php echo $user_info->status->source ?></span>
			</div>			
		</div>
  <?php } ?>
	</div>
<?php include ("include/footer.php"); ?>
