<?php
/*
  $Id: orders.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Pedidos');
define('HEADING_TITLE_SEARCH', 'Pedido:');
define('HEADING_TITLE_STATUS', 'Estado:');

define('TABLE_HEADING_COMMENTS', 'Comentarios');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Total pedido');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de compra');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Accion');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'Impuesto');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inc)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente notificado');
define('TABLE_HEADING_DATE_ADDED', 'Añadido el');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'Cliente:');
define('ENTRY_DELIVERY_TO', 'Enviar a:');
define('ENTRY_SHIP_TO', 'Enviar a:');
define('ENTRY_SHIPPING_ADDRESS', 'Direccion de envio:');
define('ENTRY_BILLING_ADDRESS', 'Direccion de facturacion:');
define('ENTRY_PAYMENT_METHOD', 'Forma de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo tarjeta credito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titular tarjeta credito:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Numero tarjeta credito:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Caducidad tarjeta credito:');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TAX', 'Impuestos:');
define('ENTRY_SHIPPING', 'Gastos de envio:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de compra:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_DATE_LAST_UPDATED', 'Ultima modificacion:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Añadir comentarios:');
define('ENTRY_PRINTABLE', 'Imprimir factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Eliminar pedido');
define('TEXT_INFO_DELETE_INTRO', 'Seguro que quiere eliminar este pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Añadir productos al almacen');
define('TEXT_DATE_ORDER_CREATED', 'Añadido el:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Modificado:');
define('TEXT_INFO_PAYMENT_METHOD', 'Forma de pago:');

define('TEXT_ALL_ORDERS', 'Todos');
define('TEXT_NO_ORDER_HISTORY', 'No hay historico');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualizacion del pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'Numero de pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Pedido detallado:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Su pedido ha sido actualizado al siguiente estado.' . "\n\n" . 'Nuevo estado: %s' . "\n\n" . 'Por favor responda a este email si tiene alguna pregunta que hacer.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Los comentarios sobre su pedido son' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: No existe pedido.');
define('SUCCESS_ORDER_UPDATED', 'Exito: Pedido actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: No se ha actualizado el pedido, no habia nada que actualizar.');
?>
