<?php
global $wpdb, $gflc;
$ops = get_option('flc_settings', array());
//$ops = array_merge($flc_settings, $ops);
?>
<div class="wrap">
	<h2><?php _e('Create XML File'); ?></h2>
	<form action="" method="post">
		<input type="hidden" name="task" value="save_flc_settings" />
		<table>
				<tr>
			<td title="<?php _e('Width of Slideshow Banner.'); ?>"><?php _e('Slideshow Width'); ?></td>
			<td><input type="text" name="settings[slideshow_width]"  value="<?php print @$ops['slideshow_width']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Height of Slideshow Banner '); ?>"><?php _e('Slideshow Height'); ?></td>
			<td><input type="text" name="settings[slideshow_height]"  value="<?php print @$ops['slideshow_height']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Enter here the background color of gallery. If no value set for bgcolor (\'\') then the slideshow galleries reflection will be transparent.'); ?>"><?php _e('Slideshow Background color'); ?></td>
			<td><input type="text" name="settings[bgcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['bgcolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Set this value to YES if you want to keep the gallery dimension as same as image size and keep images fit within that area.'); ?>"><?php _e('Slideshow Rotate'); ?></td>
			<td>
				<input type="radio" name="settings[slide_rotate]" value="YES" <?php print (@$ops['slide_rotate'] == 'YES') ? 'checked' : ''; ?>><span><?php _e('Horizontal'); ?></span>
				<input type="radio" name="settings[slide_rotate]" value="NO" <?php print (@$ops['slide_rotate'] == 'NO') ? 'checked' : ''; ?>><span><?php _e('vertical'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Slideshow Fit in Rectangle.'); ?>"><?php _e('Slideshow Fit in Rectangle'); ?></td>
			<td>
				<input type="radio" name="settings[slide_fit]" value="YES" <?php print (@$ops['slide_fit'] == 'YES') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[slide_fit]" value="NO" <?php print (@$ops['slide_fit'] == 'NO') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Number of blades of slideshow. The possible values are from 4 to 16.'); ?>"><?php _e('Number of slides show in slideshow'); ?></td>
			<td><input type="text" name="settings[slide_count]"  value="<?php print @$ops['slide_count']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Rotation speed. Possible values are from 1 to 10.'); ?>"><?php _e('Transition Speed'); ?></td>
			<td><input type="text" name="settings[slide_transition_speed]"  value="<?php print @$ops['slide_transition_speed']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('To make the gallery to rotate images automatically with a fixed delay time.'); ?>"><?php _e('Auto Play'); ?></td>
			<td>
				<input type="radio" name="settings[auto_play]" value="YES" <?php print (@$ops['auto_play'] == 'YES') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[auto_play]" value="NO" <?php print (@$ops['auto_play'] == 'NO') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Delay Time in seconds to Auto Play the gallery.'); ?>"><?php _e('Transition Delay'); ?></td>
			<td><input type="text" name="settings[slide_transition_delay]"  value="<?php print @$ops['slide_transition_delay']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Default value is blank . If you need to load the entire gallery into a Flash file and need to position it set value here.'); ?>"><?php _e('Slideshow X-Position'); ?></td>
			<td><input type="text" name="settings[slideshow_xpos]" !! value="<?php print @$ops['slideshow_xpos']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Same as above parameter. Default value is blank . If you need to load the entire gallery into a Flash file and need to position it set value here.'); ?>"><?php _e('Slideshow Y-Position'); ?></td>
			<td><input type="text" name="settings[slideshow_ypos]" !! value="<?php print @$ops['slideshow_ypos']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Width of the image in pixels. Note that if your image\'s dimension differs from this parameter the gallery will resize the image to fit-fill this size.'); ?>"><?php _e('Image Width'); ?></td>
			<td><input type="text" name="settings[image_width]"  value="<?php print @$ops['image_width']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Height of the image in pixels. Note that if your image\'s dimension differs from this parameter, the gallery will resize the image to fit-fill this size.'); ?>"><?php _e('Image Height'); ?></td>
			<td><input type="text" name="settings[image_height]"  value="<?php print @$ops['image_height']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('slideshow slides background color.'); ?>"><?php _e('Image Bgcolor'); ?></td>
			<td><input type="text" name="settings[image_bgcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['image_bgcolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('When you mouse over the Slideshow slides it will be highlighted with glow. Adjust the brightness here.'); ?>"><?php _e('Slideshow Slides Brightness'); ?></td>
			<td><input type="text" name="settings[slideshow_rollovr_bright]"  value="<?php print @$ops['slideshow_rollovr_bright']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('In case your images are too small or larger than the image width and image height values it will automatically resize the image and center it.'); ?>"><?php _e('Image Resize Fit'); ?></td>
			<td>
				<input type="radio" name="settings[img_resize_fit]" value="YES" <?php print (@$ops['img_resize_fit'] == 'YES') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[img_resize_fit]" value="NO" <?php print (@$ops['img_resize_fit'] == 'NO') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('To show the Back Arrow Button. Back button is to  navigate previous image.'); ?>"><?php _e('Show Previous Button'); ?></td>
			<td>
				<input type="radio" name="settings[show_prev_btn]" value="yes" <?php print (@$ops['show_prev_btn'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[show_prev_btn]" value="no" <?php print (@$ops['show_prev_btn'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('To show the Next Arrow Button. Next button is to  navigate Next image.'); ?>"><?php _e('Show Next Button'); ?></td>
			<td>
				<input type="radio" name="settings[show_next_btn]" value="yes" <?php print (@$ops['show_next_btn'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[show_next_btn]" value="no" <?php print (@$ops['show_next_btn'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('To show the Play Pause Button which controls AutoPlay action.'); ?>"><?php _e('Show Play/Pause Button'); ?></td>
			<td>
				<input type="radio" name="settings[show_playpause_btn]" value="yes" <?php print (@$ops['show_playpause_btn'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[show_playpause_btn]" value="no" <?php print (@$ops['show_playpause_btn'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('To align all the buttons into Right side corner of the gallery.'); ?>"><?php _e('Buttons Right Align'); ?></td>
			<td>
				<input type="radio" name="settings[btn_alignright]" value="yes" <?php print (@$ops['btn_alignright'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[btn_alignright]" value="no" <?php print (@$ops['btn_alignright'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Width and Height of all the Buttons.'); ?>"><?php _e('Width of the all buttons'); ?></td>
			<td><input type="text" name="settings[btn_size]"  value="<?php print @$ops['btn_size']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Button Color in hexadecimal value.'); ?>"><?php _e('Color of the all buttons'); ?></td>
			<td><input type="text" name="settings[btn_color]" class="color {hash:false,caps:true}" value="<?php print @$ops['btn_color']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Buttons Left Right Arrow color in hexadecimal value. If the value is blank the arrow shape will be cutout and transparent.'); ?>"><?php _e('Color of the arrow in buttons'); ?></td>
			<td><input type="text" name="settings[btn_arowcolor]" !! value="<?php print @$ops['btn_arowcolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('3 Different Styles available for Buttons. Enter 1 or 2 or 3.'); ?>"><?php _e('Buttons Style'); ?></td>
			<td>
				<input type="radio" name="settings[btn_style]" value="1" <?php print (@$ops['btn_style'] == '1') ? 'checked' : ''; ?>><span><?php _e('Type1'); ?></span>
				<input type="radio" name="settings[btn_style]" value="2" <?php print (@$ops['btn_style'] == '2') ? 'checked' : ''; ?>><span><?php _e('Type2'); ?></span>
				<input type="radio" name="settings[btn_style]" value="3" <?php print (@$ops['btn_style'] == '3') ? 'checked' : ''; ?>><span><?php _e('Type3'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Button Shape can be either Circular or Rectangular.'); ?>"><?php _e('Buttons Shape'); ?></td>
			<td>
				<input type="radio" name="settings[btn_shape]" value="no" <?php print (@$ops['btn_shape'] == 'no') ? 'checked' : ''; ?>><span><?php _e('Rectangular'); ?></span>
				<input type="radio" name="settings[btn_shape]" value="yes" <?php print (@$ops['btn_shape'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Circular'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Buttons can be moved towards the viewer by increasing this value.'); ?>"><?php _e('Button Position towards viewer'); ?></td>
			<td><input type="text" name="settings[btn_posz]"  value="<?php print @$ops['btn_posz']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Buttons can be rotated in X axis by setting Tilt to YES.'); ?>"><?php _e('Buttons rotated in X axis'); ?></td>
			<td>
				<input type="radio" name="settings[btn_tilt]" value="no" <?php print (@$ops['btn_tilt'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
				<input type="radio" name="settings[btn_tilt]" value="yes" <?php print (@$ops['btn_tilt'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Enable / Disable the mouse wheel option. Note that if you set gallery ractangle fit = YES, then Mouse Wheel is not supported.'); ?>"><?php _e('Slides wheel Rotates'); ?></td>
			<td>
				<input type="radio" name="settings[slide_wheelrotate]" value="no" <?php print (@$ops['slide_wheelrotate'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
				<input type="radio" name="settings[slide_wheelrotate]" value="yes" <?php print (@$ops['slide_wheelrotate'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Title texts  size.'); ?>"><?php _e('Title Size'); ?></td>
			<td><input type="text" name="settings[title_size]"  value="<?php print @$ops['title_size']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Description texts  size.'); ?>"><?php _e('Description Size'); ?></td>
			<td><input type="text" name="settings[desc_size]"  value="<?php print @$ops['desc_size']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Caption text alignment. Possible values are left, right, center.'); ?>"><?php _e('Title Position'); ?></td>
			<td>
				<input type="radio" name="settings[title_align]" value="left" <?php print (@$ops['title_align'] == 'left') ? 'checked' : ''; ?>><span><?php _e('Left'); ?></span>
				<input type="radio" name="settings[title_align]" value="center" <?php print (@$ops['title_align'] == 'center') ? 'checked' : ''; ?>><span><?php _e('Center'); ?></span>
				<input type="radio" name="settings[title_align]" value="right" <?php print (@$ops['title_align'] == 'right') ? 'checked' : ''; ?>><span><?php _e('Right'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Horizontal space around Caption text.'); ?>"><?php _e('Title Horizental Margin'); ?></td>
			<td><input type="text" name="settings[title_hor_margin]"  value="<?php print @$ops['title_hor_margin']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Vertical space around Caption text.'); ?>"><?php _e('Title Vertical Margin'); ?></td>
			<td><input type="text" name="settings[title_ver_margin]"  value="<?php print @$ops['title_ver_margin']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('The color of background rectangle which located behind the Caption text .'); ?>"><?php _e('Infobox Bgcolor'); ?></td>
			<td><input type="text" name="settings[infobox_bgcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['infobox_bgcolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Transparency of Caption Background rectangle.'); ?>"><?php _e('Infobox Bgcolor Alpha'); ?></td>
			<td>
				<select name="settings[infobox_bgcolor_alpha]">
					<option value="0" <?php print (@$ops['infobox_bgcolor_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="10" <?php print (@$ops['infobox_bgcolor_alpha'] == '10') ? 'selected' : ''; ?>><?php _e('10'); ?></option>
					<option value="20" <?php print (@$ops['infobox_bgcolor_alpha'] == '20') ? 'selected' : ''; ?>><?php _e('20'); ?></option>
					<option value="30" <?php print (@$ops['infobox_bgcolor_alpha'] == '30') ? 'selected' : ''; ?>><?php _e('30'); ?></option>
					<option value="40" <?php print (@$ops['infobox_bgcolor_alpha'] == '40') ? 'selected' : ''; ?>><?php _e('40'); ?></option>
					<option value="50" <?php print (@$ops['infobox_bgcolor_alpha'] == '50') ? 'selected' : ''; ?>><?php _e('50'); ?></option>
					<option value="60" <?php print (@$ops['infobox_bgcolor_alpha'] == '60') ? 'selected' : ''; ?>><?php _e('60'); ?></option>
					<option value="70" <?php print (@$ops['infobox_bgcolor_alpha'] == '70') ? 'selected' : ''; ?>><?php _e('70'); ?></option>
					<option value="80" <?php print (@$ops['infobox_bgcolor_alpha'] == '80') ? 'selected' : ''; ?>><?php _e('80'); ?></option>
					<option value="90" <?php print (@$ops['infobox_bgcolor_alpha'] == '90') ? 'selected' : ''; ?>><?php _e('90'); ?></option>
					<option value="100" <?php print (@$ops['infobox_bgcolor_alpha'] == '100') ? 'selected' : ''; ?>><?php _e('100'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Caption text can be moved towards the views by increasing this value.'); ?>"><?php _e('Caption text moved towards the views'); ?></td>
			<td><input type="text" name="settings[title_positionz]"  value="<?php print @$ops['title_positionz']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Caption can be rotated in X axis by setting Tilt to YES.'); ?>"><?php _e('Title rotated in X axis'); ?></td>
			<td>
				<input type="radio" name="settings[title_tilt]" value="no" <?php print (@$ops['title_tilt'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
				<input type="radio" name="settings[title_tilt]" value="yes" <?php print (@$ops['title_tilt'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Show / Hide Reflection.'); ?>"><?php _e('Slide Reflection'); ?></td>
			<td>
				<input type="radio" name="settings[slide_reflection]" value="yes" <?php print (@$ops['slide_reflection'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Show'); ?></span>
				<input type="radio" name="settings[slide_reflection]" value="no" <?php print (@$ops['slide_reflection'] == 'no') ? 'checked' : ''; ?>><span><?php _e('Hide'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('3 Different Styles are available for Reflection. Possible values are 1, 2, 3 and 0. If set 0, then there will be no Reflection.'); ?>"><?php _e('Reflection Type'); ?></td>
			<td>
				<input type="radio" name="settings[reflection_type]" value="0" <?php print (@$ops['reflection_type'] == '0') ? 'checked' : ''; ?>><span><?php _e('No Reflection'); ?></span>
				<input type="radio" name="settings[reflection_type]" value="1" <?php print (@$ops['reflection_type'] == '1') ? 'checked' : ''; ?>><span><?php _e('Type 1'); ?></span>
				<input type="radio" name="settings[reflection_type]" value="2" <?php print (@$ops['reflection_type'] == '2') ? 'checked' : ''; ?>><span><?php _e('Type 2'); ?></span>
				<input type="radio" name="settings[reflection_type]" value="3" <?php print (@$ops['reflection_type'] == '3') ? 'checked' : ''; ?>><span><?php _e('Type 3'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('ransparency of Reflection in percentage.'); ?>"><?php _e('Reflection Alpha'); ?></td>
			<td>
				<select name="settings[reflection_alpha]">
					<option value="0" <?php print (@$ops['reflection_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="10" <?php print (@$ops['reflection_alpha'] == '10') ? 'selected' : ''; ?>><?php _e('10'); ?></option>
					<option value="20" <?php print (@$ops['reflection_alpha'] == '20') ? 'selected' : ''; ?>><?php _e('20'); ?></option>
					<option value="30" <?php print (@$ops['reflection_alpha'] == '30') ? 'selected' : ''; ?>><?php _e('30'); ?></option>
					<option value="40" <?php print (@$ops['reflection_alpha'] == '40') ? 'selected' : ''; ?>><?php _e('40'); ?></option>
					<option value="50" <?php print (@$ops['reflection_alpha'] == '50') ? 'selected' : ''; ?>><?php _e('50'); ?></option>
					<option value="60" <?php print (@$ops['reflection_alpha'] == '60') ? 'selected' : ''; ?>><?php _e('60'); ?></option>
					<option value="70" <?php print (@$ops['reflection_alpha'] == '70') ? 'selected' : ''; ?>><?php _e('70'); ?></option>
					<option value="80" <?php print (@$ops['reflection_alpha'] == '80') ? 'selected' : ''; ?>><?php _e('80'); ?></option>
					<option value="90" <?php print (@$ops['reflection_alpha'] == '90') ? 'selected' : ''; ?>><?php _e('90'); ?></option>
					<option value="100" <?php print (@$ops['reflection_alpha'] == '100') ? 'selected' : ''; ?>><?php _e('100'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Distance between Reflection and real object.'); ?>"><?php _e('Distance Between Reflection and real object'); ?></td>
			<td><input type="text" name="settings[diss_real_reflection]"  value="<?php print @$ops['diss_real_reflection']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('To allow the camera angle to rotate with mouse movement.'); ?>"><?php _e('Enable Angle Rotate'); ?></td>
			<td>
				<input type="radio" name="settings[camera_enable]" value="yes" <?php print (@$ops['camera_enable'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[camera_enable]" value="no" <?php print (@$ops['camera_enable'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('You can set default / fixed camera angle.'); ?>"><?php _e('Slideshow Rotate Angle Default'); ?></td>
			<td><input type="text" name="settings[camera_angle_default]"  value="<?php print @$ops['camera_angle_default']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('When the mouse movement Pans / Tilts the view, this value is to limit it is angle on both the sides.'); ?>"><?php _e('Slideshow Rotate Angle Limit'); ?></td>
			<td><input type="text" name="settings[camera_angle_limit]"  value="<?php print @$ops['camera_angle_limit']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Show/Hide Title.'); ?>"><?php _e('Show Title'); ?></td>
			<td>
				<input type="radio" name="settings[show_title]" value="yes" <?php print (@$ops['show_title'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[show_title]" value="no" <?php print (@$ops['show_title'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Show/Hide Description.'); ?>"><?php _e('Show Description'); ?></td>
			<td>
				<input type="radio" name="settings[show_desc]" value="yes" <?php print (@$ops['show_desc'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[show_desc]" value="no" <?php print (@$ops['show_desc'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Enable/Disable Image Url.'); ?>"><?php _e('Enable Image Url'); ?></td>
			<td>
				<input type="radio" name="settings[use_link]" value="yes" <?php print (@$ops['use_link'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[use_link]" value="no" <?php print (@$ops['use_link'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Open Targetlink in samewindow/new window.'); ?>"><?php _e('Target Link'); ?></td>
			<td>
				<select name="settings[target]">
					<option value="_self" <?php print (@$ops['target'] == '_self') ? 'selected' : ''; ?>><?php _e('Same Window'); ?></option>
					<option value="_blank" <?php print (@$ops['target'] == '_blank') ? 'selected' : ''; ?>><?php _e('New Window'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Select the wmode of flash'); ?>"><?php _e('wmode'); ?></td>
			<td>
				<select name="settings[wmode]">
					<option value="opaque" <?php print (@$ops['wmode'] == 'opaque') ? 'selected' : ''; ?>><?php _e('opaque'); ?></option>
					<option value="transparent" <?php print (@$ops['wmode'] == 'transparent') ? 'selected' : ''; ?>><?php _e('transparent'); ?></option>
					<option value="window" <?php print (@$ops['wmode'] == 'window') ? 'selected' : ''; ?>><?php _e('window'); ?></option>
				</select>
			</td>
		</tr>
		</table>
	<p><button type="submit" class="button-primary"><?php _e('Save Config'); ?></button></p>
	</form>
</div>