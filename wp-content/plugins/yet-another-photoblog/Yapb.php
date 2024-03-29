<?php

	/*	Plugin Name: Yet Another PhotoBlog
		Plugin URI: http://johannes.jarolim.com/yapb
		Version: 1.10.12
		Description: Convert your WordPress Blog into a full featured photoblog in virtually no time. More informations may be found on the <a href="http://johannes.jarolim.com/yapb">plugin pages</a>.
		Author: J.P.Jarolim
		Author URI: http://johannes.jarolim.com
	*/

	/*  Copyright 2008 by J.P.Jarolim (email : yapb@johannes.jarolim.com)

		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation; either version 2 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
	*/

	/*	Special Thanks:

		James Heinrich:       Shortly after finding phpThumb.sourceforge.net i threw away
		                      my own on-request-thumbnailer. Same idea - But his project
		                      is much more advanced and has much more features.
		Paul M. Jones:        Savant helps me alot seperating code and layout. This super-
		                      lightweight templating engine is a very very fine thing.
		VinayRas Infotech:    Thanks alot for providing such a fine small exif-toolbox
		                      to the community!
		ALL DOWNLOADERS AND   Thank you all for the given feedback! Only thanks to the  
		FELLOW FORUM MEMBERS: provided feedback i were able to get this plugin that far.

	*/


	require_once realpath(dirname(__file__) . '/lib/Yapb.class.php');
	$yapb = new Yapb();

?>