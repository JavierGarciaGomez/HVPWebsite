<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'El directorio de sesiones no existe: ' . tep_session_save_path() . '. Las sesiones no trabajaran hasta que este directorio sea creado.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'No soy capaz de escribir en el directorio de sesiones: ' . tep_session_save_path() . '. Las sesiones no funcionaran hasta que los permisos no se establezcan.');
?>
