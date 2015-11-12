<?php
/**
* GNU General Public License.

* This file is part of ZeusCart V4.

* ZeusCart V4 is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 4 of the License, or
* (at your option) any later version.
* 
* ZeusCart V4 is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with Foobar. If not, see <http://www.gnu.org/licenses/>.
*
*/


/**
 * file operations related  class
 *
 * @package   		Lib
 * @category    	Library
 * @author    		AJ Square Inc Dev Team
 * @link   		http://www.zeuscart.com
 * @copyright 		Copyright (c) 2008 - 2013, AjSquare, Inc.
 * @version  		Version 4.0
 */
class Bin_FileOperations
 {
 	/**
	 * Function is used to upload the file
	 * @param array $spath
	 * @param string $dpath
	 *
	 * @return void 
	 */	
 	function uploadFile($spath,$dpath)
	{
		if (file_exists($dpath))
  			echo '<br>'. $dpath ."<b> already exists.</b><br />";
		else
      		return move_uploaded_file($spath,$dpath);
	}
 }

 ?>