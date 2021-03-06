<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Kamil Kuzminski 2011-2012 
 * @author     Kamil Kuzminski <kamil.kuzminski@gmail.com> 
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @package    SimplePoll 
 * @license    LGPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['title']     = array('Nosaukums', 'Lūdzu, ievadi atbildes variantu.');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['votes']     = array('Balsu skaits', 'Kopīgais balsu skaits šai atbildei.');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['published'] = array('Publicēt atbildes variantu', 'Dari atbildes variantu publiski redzamu.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['title_legend']   = 'Nosaukums un balsis';
$GLOBALS['TL_LANG']['tl_simplepoll_option']['publish_legend'] = 'Publicē iestatījumus';


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['voteSingle'] = '%s balss';
$GLOBALS['TL_LANG']['tl_simplepoll_option']['votePlural'] = '%s balsis';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['new']        = array('Jauna atbilde', 'Izveido jaunu atbildes variantu');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['edit']       = array('Rediģēt atbildi', 'Rediģē atbildes variantu ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['editheader'] = array('Rediģēt aptaujas iestatījumus', 'Rediģē aptaujas ID %s iestatījumus');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['copy']       = array('Dublicēt atbildi', 'Dublicēt atbildes variantu ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['delete']     = array('Dzēst atbildi', 'Dzēst atbildes variantu ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['show']       = array('Atbildes detaļas', 'Rādīt atbildes varianta ID %s detaļas');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['toggle']     = array('Publicēt/nepublicēt atbildi', 'Publicēt/nepublicēt atbildes variantu ID %s');

?>