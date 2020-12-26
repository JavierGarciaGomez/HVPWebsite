<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2011 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Crear una cuenta');

define('HEADING_TITLE', 'Datos de mi cuenta');

define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>NOTA:</b></font></small> Si ya ha pasado por este proceso y tiene una cuenta, por favor <a href="%s"><u>entre</u></a> en ella.');

define('EMAIL_SUBJECT', 'Bienvenido a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Estimado ' . stripslashes($HTTP_POST_VARS['firstname']) . "\n\n");
define('EMAIL_GREET_MS', 'Estimada ' . stripslashes($HTTP_POST_VARS['firstname']) . "\n\n");
define('EMAIL_GREET_NONE', 'Estimado ' . stripslashes($HTTP_POST_VARS['firstname']) . "\n\n");
define('EMAIL_WELCOME', 'Le damos la bienvenida a <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Ahora puede disfrutar de los <b>servicios</b> que le ofrecemos. Algunos de estos servicios son:' . "\n\n" . '<li><b>Cesta permanente</b> - Cualquier producto añadido a su carro permanecera en el hasta que lo elimine, o hasta que realice la compra.' . "\n" . '<li><b>Libro de direcciones</b> - Podemos enviar sus productos a otras direcciones aparte de la suya! Esto es perfecto para enviar regalos de cumpleaños directamente a la persona que cumple años.' . "\n" . '<li><b>Historia de pedidos</b> - Vea la relación de compras que ha realizado con nosotros.' . "\n" . '<li><b>Comentarios</b> - Comparta su opinión sobre los productos con otros clientes.' . "\n\n");
define('EMAIL_CONTACT', 'Para cualquier consulta sobre nuestros servicios, por favor escriba a: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Nota:</b> Esta dirección fue suministrada por uno de nuestros clientes. Si usted no se ha suscrito como socio, por favor comuníquelo a ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
?>
