<?php include ("include/header.php"); ?>
	
	<div data-role="header" data-position="fixed">
			<h1><?php echo $content->name; ?></h1>
	</div><!-- /header -->
	
	
	<div data-role="content">
	<?php 
		if($login)
		{
			echo $login;
		}
		else
		{
	?>
			<?php if (isset($status_text)) { ?>
			  <?php echo '<h3>'.$status_text.'</h3>'; ?>
			<?php } ?>
			<div class="content-data">
				<div class="head-profile">
					<a href="profile.php?u=<?php echo $my_profile->screen_name ?>">					
						<img src="<?php echo $my_profile->profile_image_url_https ?>" />
					</a><br />
					<?php echo $my_profile->status->text; ?><br />
					<span class="via"><span>via </span><?php echo $my_profile->status->source ?></span>
				</div>
				
				<div id="block-timeline">
					<h3>Timeline</h3>
					
					<div id="timeline" data-theme="c">
					<?php foreach($timeline as $i => $time ) : ?>					
							<div class="list-timeline">
								<a href="user.php?u=<?php echo $time->user->screen_name ?>">
									<img src="<?php echo $time->user->profile_image_url ?>"  />
								</a>
								<div class="tweet-text"><?php echo $time->text; ?></div>
								<span class="clear"></span>
							</div>
					<?php endforeach ?>
					</div>
				</div>
			</div>		
	<?php 
		} 
	?>
	</div>	
<?php include ("include/footer.php"); ?>
