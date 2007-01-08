<?php
/*

 Copyright (c) 2001 - 2006 Ampache.org
 All rights reserved.

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License v2
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/
$web_path = conf('web_path'); 
?>
<?php show_box_top(_('Albums of the Moment')); ?>
<table class="tabledata">
<tr>
	<?php 
	foreach ($albums as $album_id) { 
		$album = new Album($album_id); 
		$album->format(); 
		$name = scrub_out($album->name); 
	?>
	<td>
		<a href="<?php echo $web_path; ?>/albums.php?action=show&amp;album=<?php echo $album_id; ?>">
		<img src="<?php echo $web_path; ?>/image.php?thumb=1&amp;id=<?php echo $album_id; ?>" width="75" height="75" border="0" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
		</a>
	</td>
	<?php } ?>
</tr>
</table> 
<?php show_box_bottom(); ?>
