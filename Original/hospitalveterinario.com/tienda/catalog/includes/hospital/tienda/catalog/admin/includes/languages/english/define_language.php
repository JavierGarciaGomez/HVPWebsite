<?php
/*
  $Id: define_language.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Editor de idiomas');

define('TABLE_HEADING_FILES', 'Archivos');
define('TABLE_HEADING_WRITABLE', 'Escribible');
define('TABLE_HEADING_LAST_MODIFIED', 'Ultima modificasion');

define('TEXT_EDIT_NOTE', '<strong>Edicion de definiciones</strong><br /><br />Cada definicion de lenguaje se ajusta con la funcion PHP <a href="http://www.php.net/define" target="_blank">define()</a> de la siguiente manera:<br /><br /><nobr>define(\'TEXT_MAIN\', \'<span style="background-color: #FFFF99;">Este texto puede ser editado. Es muy facil de hacer!</span>\');</nobr><br /><br />El texto seleccionado puede ser editado. Con esta definicion se pueden usar comillas simples para contener el texto, las comillas simples dentro de la definicion debe llevar delante una barra invertida (eg, \'TEXT_MAIN\').');

define('TEXT_FILE_DOES_NOT_EXIST', 'No existe fichero.');

define('ERROR_FILE_NOT_WRITEABLE', 'Error: No puedo escribir en este fichero. Asigne correctamente permisos a: %s');
?>
