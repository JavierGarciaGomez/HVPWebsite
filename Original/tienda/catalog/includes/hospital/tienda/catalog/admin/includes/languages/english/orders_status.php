<?php
/*
  $Id: orders_status.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Estado Pedidos');

define('TABLE_HEADING_ORDERS_STATUS', 'Estado pedidos');
define('TABLE_HEADING_PUBLIC_STATUS', 'Estado publico');
define('TABLE_HEADING_DOWNLOADS_STATUS', 'Estado downloads');
define('TABLE_HEADING_ACTION', 'Accion');

define('TEXT_INFO_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Estado pedido:');
define('TEXT_INFO_INSERT_INTRO', 'Introduzca un nombre y los datos del nuevo estado de pedido');
define('TEXT_INFO_DELETE_INTRO', 'Esta seguro que desea suprimir permanentemente este estado de pedido?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Nuevo estado pedido');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Editar estado pedido');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Eliminar estado pedido');

define('TEXT_SET_PUBLIC_STATUS', 'Mostrar al cliente este nivel de estado del pedido.');
define('TEXT_SET_DOWNLOADS_STATUS', 'Permitir la descarga de productos virtuales en este nivel de estado del pedido');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Error: El estado de pedido por defecto no se puede eliminar. Establezca otro estado de pedido predeterminado y pruebe de nuevo.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Error: Este estado de pedido esta siendo usado actualmente.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Este estado de pedido se esta usando en el historico de algun pedido.');
?>