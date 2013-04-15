<?php require('include/header.php') ?>
<div id="container" class="index">
	<header>
    	<h1><a href="home.php">Wardah Travel In Style</a></h1>
    </header>
    <div id="main" role="main">
    	<div class="links">
        	<a id="site" href="<?php print $config['site']['url'] ?>" title="<?php print $config['site']['title'] ?>" target="_blank" class="link-home">Wardahbeauty.com</a>
            <a id="fb" href="http://www.facebook.com/<?php print $config['fb']['id'] ?>" title="<?php print $config['fb']['title'] ?>" target="_blank" class="link-home">Facebook Wardah</a>
            <a id="twitter" href="http://www.twitter.com/<?php print $config['twitter']['username'] ?>" title="<?php print $config['twitter']['title'] ?>" target="_blank" class="link-home">Twitter Wardah</a>
        </div>
    </div>
 <?php include("include/footer.php") ?>
