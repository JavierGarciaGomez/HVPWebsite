<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2011 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'es_ES'
// on FreeBSD 4.0 I use 'es_ES.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'es_ES.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', ''); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'mm/dd/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="es"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'Herramienta de administracion');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administracion');
define('HEADER_TITLE_SUPPORT_SITE', 'Soporte');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogo');
define('HEADER_TITLE_ADMINISTRATION', 'Administracion');

// text for gender
define('MALE', 'Hombre');
define('FEMALE', 'Mujer');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuracion');
define('BOX_CONFIGURATION_MYSTORE', 'Mi tienda');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administradores');
define('BOX_CONFIGURATION_STORE_LOGO', 'Logo de la tienda');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modulos');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Catalogo');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorias/Productos');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Atributos');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Comentarios');
define('BOX_CATALOG_SPECIALS', 'Ofertas');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Proximamente');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Pedidos');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Zonas/Impuestos');
define('BOX_TAXES_COUNTRIES', 'Paises');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Zonas de impuestos');
define('BOX_TAXES_TAX_CLASSES', 'Tipos de impuestos');
define('BOX_TAXES_TAX_RATES', 'Impuestos');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Los mas vistos');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Los mas comprados');
define('BOX_REPORTS_ORDERS_TOTAL', 'Total por cliente');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Herramientas');
define('BOX_TOOLS_ACTION_RECORDER', 'Grabadora de acciones');
define('BOX_TOOLS_BACKUP', 'Copia de seguridad');
define('BOX_TOOLS_BANNER_MANAGER', 'Banners');
define('BOX_TOOLS_CACHE', 'Control de cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definir idiomas');
define('BOX_TOOLS_MAIL', 'Enviar email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Nuevo boletin');
define('BOX_TOOLS_SEC_DIR_PERMISSIONS', 'Permisos de seguridad en directorios');
define('BOX_TOOLS_SERVER_INFO', 'Informacion');
define('BOX_TOOLS_VERSION_CHECK', 'Comprobar version');
define('BOX_TOOLS_WHOS_ONLINE', 'Usuarios conectados');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localizacion');
define('BOX_LOCALIZATION_CURRENCIES', 'Monedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estado pedidos');

// javascript messages
define('JS_ERROR', 'Ha habido errores procesando su formulario!\nPor favor, haga las siguientes correcciones:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* El atributo necesita un precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El atributo necesita un prefijo para el precio\n');

define('JS_PRODUCTS_NAME', '* El producto necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El producto necesita una descripcion\n');
define('JS_PRODUCTS_PRICE', '* El producto necesita un precio\n');
define('JS_PRODUCTS_WEIGHT', '* Debe especificar el peso del producto\n');
define('JS_PRODUCTS_QUANTITY', '* Debe especificar la cantidad\n');
define('JS_PRODUCTS_MODEL', '* Debe especificar el modelo\n');
define('JS_PRODUCTS_IMAGE', '* Debe suministrar una imagen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Debe establecer el precio\n');

define('JS_GENDER', '* Debe elegir un \'sexo\'.\n');
define('JS_FIRST_NAME', '* El \'nombre\' debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* El \'apellido\' debe tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* La \'fecha de nacimiento\' debe tener el formato: xx/xx/xxxx (dia/mes/a&ntilde;o).\n');
define('JS_EMAIL_ADDRESS', '* El \'email\' debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* El \'domicilio\' debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El \'codigo postal\' debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* La \'ciudad\' debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* Debe indicar la \'provincia\'.\n');
define('JS_STATE_SELECT', '-- Seleccione --');
define('JS_ZONE', '* La \'provincia\' se debe seleccionar de la lista.');
define('JS_COUNTRY', '* Debe seleccionar un \'pais\'.\n');
define('JS_TELEPHONE', '* El \'telefono\' debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* La \'contrase&ntilde;a\' y \'confirmacion\' deben ser iguales y tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'El numero de pedido %s no existe!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Domicilio');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Opciones');

define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">Obligatorio</span>');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(p.ej. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'email:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">El email no parece valido!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">El email ya existe!</span>');
define('ENTRY_COMPANY', 'Nombre empresa:');
define('ENTRY_STREET_ADDRESS', 'Direccion:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', '');
define('ENTRY_POST_CODE', 'Codigo postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Poblacion:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">Obligatorio</span>');
define('ENTRY_COUNTRY', 'Pais:');
define('ENTRY_COUNTRY_ERROR', 'Debe seleccionar un pais de la lista.');
define('ENTRY_TELEPHONE_NUMBER', 'Telefono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_NEWSLETTER', 'Boletin:');
define('ENTRY_NEWSLETTER_YES', 'suscrito');
define('ENTRY_NEWSLETTER_NO', 'no suscrito');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Enviando email');
define('IMAGE_BACK', 'Volver');
define('IMAGE_BACKUP', 'Copiar');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar a');
define('IMAGE_DETAILS', 'Detalle');
define('IMAGE_DELETE', 'Eliminar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EMAIL', 'email');
define('IMAGE_EXPORT', 'Exportar');
define('IMAGE_ICON_STATUS_GREEN', 'Activado');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activar');
define('IMAGE_ICON_STATUS_RED', 'Desactivado');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Desactivar');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Bloqueado');
define('IMAGE_MODULE_INSTALL', 'Instalar modulo');
define('IMAGE_MODULE_REMOVE', 'Quitar modulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nuevo banner');
define('IMAGE_NEW_CATEGORY', 'Nueva categoria');
define('IMAGE_NEW_COUNTRY', 'Nuevo pais');
define('IMAGE_NEW_CURRENCY', 'Nueva moneda');
define('IMAGE_NEW_FILE', 'Nuevo archivo');
define('IMAGE_NEW_FOLDER', 'Nueva carpeta');
define('IMAGE_NEW_LANGUAGE', 'Nuevo idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nuevo boletin');
define('IMAGE_NEW_PRODUCT', 'Nuevo producto');
define('IMAGE_NEW_TAX_CLASS', 'Nuevo tipo de impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nuevo impuesto');
define('IMAGE_NEW_TAX_ZONE', 'Nueva zona de impuestos');
define('IMAGE_NEW_ZONE', 'Nueva zona');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'Factura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Albaran');
define('IMAGE_PREVIEW', 'Ver');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Resetear');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccionar');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar email');
define('IMAGE_UNLOCK', 'Desbloqueado');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizar cambio de moneda');
define('IMAGE_UPLOAD', 'Subir');

define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Directorio actual');
define('ICON_DELETE', 'Eliminar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Archivo');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Bloqueado');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Ver');
define('ICON_STATISTICS', 'Estadisticas');
define('ICON_SUCCESS', 'Exito');
define('ICON_TICK', 'Verdadero');
define('ICON_UNLOCKED', 'Desbloqueado');
define('ICON_WARNING', 'Advertencia');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> paises)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> monedas)');
define('TEXT_DISPLAY_NUMBER_OF_ENTRIES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> entradas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> boletines)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> estado de pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> proximamente)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> comentarios)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> ofertas)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> tipos de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> nuevos impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> zonas de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'predeterminado');
define('TEXT_SET_DEFAULT', 'Establecer como predeterminado');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obligatorio</span>');

define('TEXT_CACHE_CATEGORIES', 'Categorias');
define('TEXT_CACHE_MANUFACTURERS', 'Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'Tambien han comprado');

define('TEXT_NONE', '--ninguno--');
define('TEXT_TOP', 'Principio');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: Destino no existe.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: No se puede escribir en destino.');
define('ERROR_FILE_NOT_SAVED', 'Error: El archivo subido no se ha guardado.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: Extension de archivo no permitida.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Exito: Archivo guardado con exito.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: No se ha subido ningun archivo.');
?>
