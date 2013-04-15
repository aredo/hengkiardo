<?php include('include/header.php') ?>
<div id="container" class="page booklet">
    <div id="main" role="main">
    	<div id="gallery" class="ad-gallery">
                <div class="ad-image-wrapper"></div>
                <div class="ad-controls"></div>
          <div class="ad-nav">
            <div class="ad-thumbs">
              <?php $locate = $config['booklet'][2]['dir']; ?>
              <?php $files = getFileDirectory($locate); ?>			             
              <?php asort($files); ?>
			  <ul class="ad-thumb-list">              
              <?php if($files): ?>
			   <?php $i = 1; ?>
              	<?php foreach($files as $key => $file) : ?>
                <li>
                  <a href="<?php print $locate.'/'.$file?>" title="<?php print $config['booklet'][2]['title']." ".$i++ ?>">
                  	<img src="timthumb.php?src=/<?php print $locate.'/'.$file?>&w=61&h=84&zc=1">
                  </a>
                </li>
				<?php endforeach ?>
               <? else : ?>
               <li>
                  <a href="img/default.jpg">
                  	<img src="timthumb.php?src=/img/default.jpg&w=61&h=84&zc=1">
                  </a>
                </li>
               <?php endif ?> 				                
              </ul>              
            </div><!-- end .ad-thumbs -->
            <a href="home.php" title="Back to index" class="back">back to index</a>
          </div><!-- end .ad-nav -->
        </div><!-- end #gallery -->
    </div>
 <?php include("include/footer.php") ?>
