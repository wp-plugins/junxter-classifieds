<?php

/*
Plugin Name: JunxterAds
Plugin URI: http://demo.junxter.com/wordpress/2.1
Description:Use this component to run Junxter Classifieds on your website. Your website will be able to display and post classified listings, allowing you to sell classified ad space on your website.  Users can find and post classified ads right from your website. 
Author: Junxter Media
Version: 0.1
Author URI: http://www.junxter.com
*/
    

function Junxter_main()
{
	$Pub_id ="";
	$Style ="5";
	
	
	if(!empty($Pub_id) && !empty($Style))
	{
		$key=$Pub_id ."x". $Style;
    	}
	
	echo <<<emo
<div class="pn-adminformrow">
<SCRIPT LANGUAGE="javascript" TYPE="text/javascript"
	SRC="http://zone.junxter.com/$key">
</SCRIPT>
</div>
emo;
    

}



?>
