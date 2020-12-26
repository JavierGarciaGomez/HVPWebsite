<?php
/*
  $Id: administrators.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Administradores');

define('TABLE_HEADING_ADMINISTRATORS', 'Administradores');
define('TABLE_HEADING_HTPASSWD', 'Asegurado por htpasswd');
define('TABLE_HEADING_ACTION', 'Accion');

define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca los datos del nuevo administrador');
define('TEXT_INFO_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_INFO_DELETE_INTRO', 'Esta seguro que desea eliminar este administrador?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Nuevo administrador');
define('TEXT_INFO_USERNAME', 'Nombre de usuario:');
define('TEXT_INFO_NEW_PASSWORD', 'Nueva contraseña:');
define('TEXT_INFO_PASSWORD', 'Contraseña:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD', 'Proteger con htaccess/htpasswd');

define('ERROR_ADMINISTRATOR_EXISTS', 'Error: el administrador ya existe.');

define('HTPASSWD_INFO', '<strong>Proteccion adicional con htaccess/htpasswd</strong><p>Esta instalacion de las herramientas de administracion de osCommerce Online Merchant no esta asegurada adicionalmente a traves de htaccess/htpasswd.</p><p>Habilitando la securidad htaccess/htpasswd automaticamente se almacenara el nombre de usuario y la contraseñas de administrador en un archivo htpasswd en la actualizacion de los registros de contraseña de administrador.</p><p><strong>Atencion</strong>, si se habilita esta seguridad adicional y ya no se puede acceder a la herramienta de administracion, por favor, realice los cambios siguientes y consulte a su proveedor de hosting para permitir proteccion htaccess/htpasswd:</p><p><u><strong>1. Editar este archivo:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Eliminar las siguientes lineas si existieran:</p><p><i>%s</i></p><p><u><strong>2. Eliminar este archivo:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<strong>Proteccion adicional con htaccess/htpasswd</strong><p>Esta instalacion de las herramientas de administracion de osCommerce Online Merchant esta asegurada adicionalmente a traves de htaccess/htpasswd.</p>');
define('HTPASSWD_PERMISSIONS', '<strong>Proteccion adicional con htaccess/htpasswd</strong><p>Esta instalacion de las herramientas de administracion de osCommerce Online Merchant no esta asegurada adicionalmente a traves de htaccess/htpasswd.</p><p>Los siguientes archivos deben tener permisos de escritura en el servidor web para la seguridad htaccess/htpasswd:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Actualice esta pagina para confirmar si los permisos de archivo se han establecido correctamente.</p>');
?>