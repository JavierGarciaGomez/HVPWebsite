<?php
/*
  $Id: backup.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Copia de seguridad de la base de datos');

define('TABLE_HEADING_TITLE', 'Titulo');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tamaño');
define('TABLE_HEADING_ACTION', 'Accion');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nueva copia de seguridad');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurar localmente');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpa el proceso de copia, puede durar unos minutos.');
define('TEXT_INFO_UNPACK', '<br><br>(despues de descomprimir el archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpa el proceso de restauracion.<br><br>Cuanto mas grande sea la copia de seguridad, mas tardara este proceso!<br><br>Si es posible, use el cliente de mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de restauracion.<br><br>Cuanto mas grande sea la copia de seguridad, mas tardara este proceso!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo subido debe ser de texto.');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tamaño:');
define('TEXT_INFO_COMPRESSION', 'Compresion:');
define('TEXT_INFO_USE_GZIP', 'Usar GZIP');
define('TEXT_INFO_USE_ZIP', 'Usar ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Sin compresion (directamente SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Bajar solo (no guardar en el servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Preferiblemente con una conexion segura');
define('TEXT_DELETE_INTRO', 'Esta seguro que quiere borrar esta copia de seguridad?');
define('TEXT_NO_EXTENSION', 'Ninguna');
define('TEXT_BACKUP_DIRECTORY', 'Directorio para copias de seguridad:');
define('TEXT_LAST_RESTORATION', 'Ultima restauracion:');
define('TEXT_FORGET', '(<u>olvidar</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: No existe el directorio de copias de seguridad.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: No hay permiso de escritura en el directorio de copias de seguridad.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: No se aceptan enlaces.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Exito: La fecha de la ultima restauracion ha sido eliminada.');
define('SUCCESS_DATABASE_SAVED', 'Exito: Se ha guardado la base de datos.');
define('SUCCESS_DATABASE_RESTORED', 'Exito: Se ha restaurado la base de datos.');
define('SUCCESS_BACKUP_DELETED', 'Exito: Se ha eliminado la copia de seguridad.');
?>
