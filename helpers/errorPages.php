<?php
/**
* @about:This file will display the an error when required. 404/401/403
* 
* PHP version 5.4
*
* @version          2.0 - 30/01/2017
* @package          This file is part of QDP - QUICK DEVELOPMENT PACKAGE - THE DATABASE FREE CMS
* @copyright        (C) 2017 Gyula Soós
* @license          This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* See LICENSE.txt for copyright notices and details.
*/

defined('QDP') or die('Restricted access');

function displayError($errorType){
$str_lang_data = file_get_contents(rootFolder.DS.'content'.DS.siteLanguage.DS.'langSettings.json');
$langSettings = json_decode($str_lang_data, true);

echo '<div class="article">';
	echo '<div class="title"><h1>';
		echo $errorType;
	echo '</h1></div>';

	echo '<div class="articleText">';
		echo $langSettings[$errorType];
	echo '</div>';
echo '</div>';
}

?>