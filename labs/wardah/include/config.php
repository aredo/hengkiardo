<?php 
	$config = array();
	
	$config['site'] = array(
							'url' => "http://www.wardahbeauty.com",
							'title' =>'',
						);
	
	$config['fb'] = array(
							"id"=>'',
							"title" => '',
						);
	
	$config['twitter'] = array(
							'username'=>'wardahbeauty',
							'title'=>'Follow us on Twitter',
						);
	$config['booklet'] = array(
							'1' => array(
									'title' => 'Travel in Style Complete',
									'dir' => 'booklet/Travel in Style Complete'
								),
							'2' => array(
									'title' => 'Dian Pelangi London',
									'dir' => 'booklet/Dian Pelangi London',
								),
							'3' => array(
									'title' => 'Hijabscarf',
									'dir' => 'booklet/Hijabscarf',
								)
						);
	#print_r($config);
	#print_r(json_encode($config));
	
	/* FUNCTION */
	function getFileDirectory($dir)
	{
		$rv = array();
		$open_dir = opendir($dir);
		while ($file = readdir($open_dir))
		{
		  if ($file != "." && $file != "..") 
		  {
			$rv[] = $file;
		  }
		}
		closedir($open_dir);
		return $rv;
	}						
?>