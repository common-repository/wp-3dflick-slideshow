<?php
function flc_get_def_settings()
{
	$flc_settings = array('slideshow_width' => '650',
			'slideshow_height' => '500',
			'bgcolor' => '000000',
			'slide_rotate' => 'NO',
			'slide_fit' => 'NO',
			'slide_count' => '8',
			'slide_transition_speed' => '8',
			'auto_play' => 'YES',
			'slide_transition_delay' => '4',
			'slideshow_xpos' => '',
			'slideshow_ypos' => '',
			'image_width' => '600',
			'image_height' => '450',
			'image_bgcolor' => '333333',
			'slideshow_rollovr_bright' => '40',
			'img_resize_fit' => 'NO',
			'show_prev_btn' => 'yes',
			'show_next_btn' => 'yes',
			'show_playpause_btn' => 'yes',
			'btn_alignright' => 'no',
			'btn_size' => '20',
			'btn_color' => 'FFFFFF',
			'btn_arowcolor' => '',
			'btn_style' => '1',
			'btn_shape' => 'no',
			'btn_posz' => '25',
			'btn_tilt' => 'no',
			'slide_wheelrotate' => 'yes',
			'title_size' => '14',
			'desc_size' => '12',
			'title_align' => 'center',
			'title_hor_margin' => '24',
			'title_ver_margin' => '12',
			'infobox_bgcolor' => '000000',
			'infobox_bgcolor_alpha' => '50',
			'title_positionz' => '50',
			'title_tilt' => 'no',
			'slide_reflection' => 'yes',
			'reflection_type' => '1',
			'reflection_alpha' => '30',
			'diss_real_reflection' => '0',
			'camera_enable' => 'yes',
			'camera_angle_default' => '0',
			'camera_angle_limit' => '30',
			'show_title' => 'yes',
			'show_desc' => 'yes',
			'use_link' => 'no',
			'target' => '_self',
			'wmode' => 'window'
			);
	return $flc_settings;
}
function __get_flc_xml_settings()
{
	$ops = get_option('flc_settings', array());
	
	$xml_settings = '<GALLERY 
  
  WIDTH = "'.$ops['slideshow_width'].'" HEIGHT = "'.$ops['slideshow_height'].'"
		
		gallery_BGCOLOR 		= "'.$ops['bgcolor'].'"
		gallery_HORIZONTAL 		= "'.$ops['slide_rotate'].'"
		gallery_RECTANGLE_Fit 	= "'.$ops['slide_fit'].'"		
		gallery_BLADE_Count		= "'.$ops['slide_count'].'"
		gallery_SPEED			= "'.$ops['slide_transition_speed'].'"
		gallery_AUTOPLAY		= "'.$ops['auto_play'].'"
		gallery_DELAYTIME		= "'.$ops['slide_transition_delay'].'"
		
		gallery_POSITION_X		= "'.$ops['slideshow_xpos'].'"
		gallery_POSITION_Y		= "'.$ops['slideshow_ypos'].'"
		
		image_WIDTH 			= "'.$ops['image_width'].'"
		image_HEIGHT 			= "'.$ops['image_height'].'"
		image_BGCOLOR			= "'.$ops['image_bgcolor'].'"
		image_PRELOAD_Count		= "1"
		image_ROLLOVER_Bright	= "'.$ops['slideshow_rollovr_bright'].'"	
		image_RESIZE_Fit		= "'.$ops['img_resize_fit'].'"

		button_SHOW_Back		= "'.$ops['show_prev_btn'].'"
		button_SHOW_Next		= "'.$ops['show_next_btn'].'"
		button_SHOW_PlayPause	= "'.$ops['show_playpause_btn'].'"
		button_ALIGN_Right		= "'.$ops['btn_alignright'].'"
		button_SIZE				= "'.$ops['btn_size'].'"
		button_COLOR 			= "'.$ops['btn_color'].'"
		button_ARROW_Color 		= "'.$ops['btn_arowcolor'].'"		
		button_STYLE			= "'.$ops['btn_style'].'"
		button_SHAPE_Circular	= "'.$ops['btn_shape'].'"
		button_POSITION_Z		= "'.$ops['btn_posz'].'"
		button_TILT				= "'.$ops['btn_tilt'].'"

		mouse_CLICK_Toggle		= "'.$ops['img_toggle'].'"	
		mouse_WHEEL_Toggle		= "'.$ops['slide_wheelrotate'].'"			
		
		caption_SIZE_Title		= "'.$ops['title_size'].'"
		caption_SIZE_Desc		= "'.$ops['desc_size'].'"
		caption_ALIGN			= "'.$ops['title_align'].'"
		caption_MARGIN_Hor  	= "'.$ops['title_hor_margin'].'"
		caption_MARGIN_Ver  	= "'.$ops['title_ver_margin'].'"
		caption_BG_Color 		= "'.$ops['infobox_bgcolor'].'"
		caption_BG_Alpha 		= "'.$ops['infobox_bgcolor_alpha'].'"
		caption_POSITION_Z		= "'.$ops['title_positionz'].'"
		caption_TILT			= "'.$ops['title_tilt'].'"
		
		reflection_SHOW 		= "'.$ops['slide_reflection'].'"
		reflection_STYLE 		= "'.$ops['reflection_type'].'"
		reflection_ALPHA 		= "'.$ops['reflection_alpha'].'"
		reflection_HEIGHT		= "70"
		reflection_DISTANCE 	= "'.$ops['diss_real_reflection'].'"
		
		camera_ENABLED			= "'.$ops['camera_enable'].'"
		camera_ANGLE_Default	= "'.$ops['camera_angle_default'].'"
		camera_ANGLE_Limit		= "'.$ops['camera_angle_limit'].'"
		
		FlickrFeed_LINK				= ""
		FlickrFeed_SHOW_Title		= "'.$ops['flicker_showtitle'].'"
		FlickrFeed_SHOW_Description	= "'.$ops['flicker_showdesc'].'"
		>';
	return $xml_settings;
}
function flc_get_album_dir($album_id)
{
	global $gflc;
	$album_dir = FLC_PLUGIN_UPLOADS_DIR . "/{$album_id}_uploadfolder";
	return $album_dir;
}
/**
 * Get album url
 * @param $album_id
 * @return unknown_type
 */
function flc_get_album_url($album_id)
{
	global $gflc;
	$album_url = FLC_PLUGIN_UPLOADS_URL . "/{$album_id}_uploadfolder";
	return $album_url;
}
function flc_get_table_actions(array $tasks)
{
	?>
	<div class="bulk_actions">
		<form action="" method="post" class="bulk_form">Bulk action
			<select name="task">
				<?php foreach($tasks as $t => $label): ?>
				<option value="<?php print $t; ?>"><?php print $label; ?></option>
				<?php endforeach; ?>
			</select>
			<button class="button-secondary do_bulk_actions" type="submit">Do</button>
		</form>
	</div>
	<?php 
}
function shortcode_display_flc_gallery($atts)
{
	$vars = shortcode_atts( array(
									'cats' => '',
									'imgs' => '',
								), 
							$atts );
	//extract( $vars );
	
	$ret = display_flc_gallery($vars);
	return $ret;
}
function display_flc_gallery($vars)
{
	global $wpdb, $gflc;
	$ops = get_option('flc_settings', array());
	//print_r($ops);
	$albums = null;
	$images = null;
	$cids = trim($vars['cats']);
	if (strlen($cids) != strspn($cids, "0123456789,")) {
		$cids = '';
		$vars['cats'] = '';
	}
	$imgs = trim($vars['imgs']);
	if (strlen($imgs) != strspn($imgs, "0123456789,")) {
		$imgs = '';
		$vars['imgs'] = '';
	}
	$categories = '';
	$xml_filename = '';
	if( !empty($cids) && $cids{strlen($cids)-1} == ',')
	{
		$cids = substr($cids, 0, -1);
	}
	if( !empty($imgs) && $imgs{strlen($imgs)-1} == ',')
	{
		$imgs = substr($imgs, 0, -1);
	}
	//check for xml file
	if( !empty($vars['cats']) )
	{
		$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';	
	}
	elseif( !empty($vars['imgs']))
	{
		$xml_filename = "image_".str_replace(',', '', $imgs) . '.xml';
	}
	else
	{
		$xml_filename = "flc_all.xml";
	}
	//die(FLC_PLUGIN_XML_DIR . '/' . $xml_filename);


	
	if( !empty($vars['cats']) )
	{
		$query = "SELECT * FROM {$wpdb->prefix}flc_albums WHERE album_id IN($cids) AND status = 1 ORDER BY `order` ASC";
		//print $query;
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gflc->flc_get_album_images($album['album_id']);
			if ($images && !empty($images) && is_array($images)) {
				$album_dir = flc_get_album_url($album['album_id']);//FLC_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
				foreach($images as $key => $img)
				{
					if( $img['status'] == 0 ) continue;
					
					$categories .= '<Item 	IMAGE =		"'.$album_dir."/big/".$img['image'].'"';

					if ($ops['use_link'] == 'yes') {
						$categories .= ' LINK =		"'.trim($img['link']).'"';
					}else{
						$categories .= ' LINK =		""';
					}

					$categories .= ' TARGET =	"'.$ops['target'].'">';

					if ($ops['show_title'] == 'yes') {				
						$categories .= ' <TITLE color ="'.$ops['title_color'].'">
									<![CDATA['.trim($img['title']).']]></TITLE>';
					}else{
						$categories .= ' <TITLE color ="'.$ops['title_color'].'">
									<![CDATA[]]></TITLE>';
					}

					if ($ops['show_desc'] == 'yes') {
						$categories .= ' <DESCRIPTION color ="'.$ops['desc_color'].'"><![CDATA['.trim($img['description']).']]></DESCRIPTION>';
					} else {
						$categories .= ' <DESCRIPTION color ="'.$ops['desc_color'].'"><![CDATA[]]></DESCRIPTION>';
					}

					$categories .= ' </Item>';
				}
			}
		}
		//$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';
	}
	elseif( !empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}flc_images WHERE image_id IN($imgs) AND status = 1 ORDER BY `order` ASC";
		$images = $wpdb->get_results($query, ARRAY_A);
		if ($images && !empty($images) && is_array($images)) {
			foreach($images as $key => $img)
			{
				$album = $gflc->flc_get_album($img['category_id']);
				$album_dir = flc_get_album_url($album['album_id']);//FLC_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
				if( $img['status'] == 0 ) continue;
				
				$categories .= '<Item 	IMAGE =		"'.$album_dir."/big/".$img['image'].'"';

					if ($ops['use_link'] == 'yes') {
						$categories .= ' LINK =		"'.trim($img['link']).'"';
					}else{
						$categories .= ' LINK =		""';
					}

					$categories .= ' TARGET =	"'.$ops['target'].'">';

					if ($ops['show_title'] == 'yes') {				
						$categories .= ' <TITLE color ="'.$ops['title_color'].'">
									<![CDATA['.trim($img['title']).']]></TITLE>';
					}else{
						$categories .= ' <TITLE color ="'.$ops['title_color'].'">
									<![CDATA[]]></TITLE>';
					}

					if ($ops['show_desc'] == 'yes') {
						$categories .= ' <DESCRIPTION color ="'.$ops['desc_color'].'"><![CDATA['.trim($img['description']).']]></DESCRIPTION>';
					} else {
						$categories .= ' <DESCRIPTION color ="'.$ops['desc_color'].'"><![CDATA[]]></DESCRIPTION>';
					}

					$categories .= ' </Item>';
			}
		}
	}
	//no values paremeters setted
	else//( empty($vars['cats']) && empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}flc_albums WHERE status = 1 ORDER BY `order` ASC";
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gflc->flc_get_album_images($album['album_id']);
			$album_dir = flc_get_album_url($album['album_id']);//FLC_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			if ($images && !empty($images) && is_array($images)) {
				foreach($images as $key => $img)
				{
					if($img['status'] == 0 ) continue;
					
					$categories .= '<Item 	IMAGE =		"'.$album_dir."/big/".$img['image'].'"';

					if ($ops['use_link'] == 'yes') {
						$categories .= ' LINK =		"'.trim($img['link']).'"';
					}else{
						$categories .= ' LINK =		""';
					}

					$categories .= ' TARGET =	"'.$ops['target'].'">';

					if ($ops['show_title'] == 'yes') {				
						$categories .= ' <TITLE color ="'.$ops['title_color'].'">
									<![CDATA['.trim($img['title']).']]></TITLE>';
					}else{
						$categories .= ' <TITLE color ="'.$ops['title_color'].'">
									<![CDATA[]]></TITLE>';
					}

					if ($ops['show_desc'] == 'yes') {
						$categories .= ' <DESCRIPTION color ="'.$ops['desc_color'].'"><![CDATA['.trim($img['description']).']]></DESCRIPTION>';
					} else {
						$categories .= ' <DESCRIPTION color ="'.$ops['desc_color'].'"><![CDATA[]]></DESCRIPTION>';
					}

					$categories .= ' </Item>';
				}
			}
		}
		//$xml_filename = "flc_all.xml";
	}
	
	$xml_tpl = __get_flc_xml_template();
	$settings = __get_flc_xml_settings();
	$xml = str_replace(array('{settings}', '{categories}'), 
						array($settings, $categories), $xml_tpl);
	//write new xml file
	$fh = fopen(FLC_PLUGIN_XML_DIR . '/' . $xml_filename, 'w+');
	fwrite($fh, $xml);
	fclose($fh);
	//print "<h3>Generated filename: $xml_filename</h3>";
	//print $xml;
	if( file_exists(FLC_PLUGIN_XML_DIR . '/' . $xml_filename ) )
	{
		$fh = fopen(FLC_PLUGIN_XML_DIR . '/' . $xml_filename, 'r');
		$xml = fread($fh, filesize(FLC_PLUGIN_XML_DIR . '/' . $xml_filename));
		fclose($fh);
		//print "<h3>Getting xml file from cache: $xml_filename</h3>";
		$ret_str = "
		<script language=\"javascript\">AC_FL_RunContent = 0;</script>
<script src=\"".FLC_PLUGIN_URL."/js/AC_RunActiveContent.js\" language=\"javascript\"></script>

		<script language=\"javascript\"> 
	if (AC_FL_RunContent == 0) {
		alert(\"This page requires AC_RunActiveContent.js.\");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '".$ops['slideshow_width']."',
			'height', '".$ops['slideshow_height']."',
			'src', '".FLC_PLUGIN_URL."/js/wp_flickslideshow',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', '".$ops['wmode']."',
			'devicefont', 'false',
			'id', 'xmlswf_wpflc',
			'bgcolor', '".$ops['bgcolor']."',
			'name', 'xmlswf_wpflc',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'movie', '".FLC_PLUGIN_URL."/js/wp_flickslideshow',
			'salign', '',
			'flashVars','xmlPath=".FLC_PLUGIN_URL."/xml/$xml_filename'
			); //end AC code
	}
</script>
";
//echo FLC_PLUGIN_UPLOADS_URL."<hr>";
//		print $xml;
		return  $ret_str;
	}
	return true;
}
function __get_flc_xml_template()
{
	$xml_tpl = '<?xml version="1.0" encoding="iso-8859-1"?>
	{settings}
	{categories}
	</GALLERY>';
	return $xml_tpl;
}
?>