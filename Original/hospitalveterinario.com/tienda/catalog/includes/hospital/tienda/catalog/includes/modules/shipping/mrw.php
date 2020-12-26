<?php
/*

  $osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  MRW MÓDULO ENVÍO (SHIPPING MODULE)
  
  Copyright (c) 2004 David Zarco Fernández
  
  Developed for Extremadura Productos
  http://www.extremaduraproductos.com
  
  Released under the GNU General Public License
  
  
  USO:
  Por defecto, el módulo está preestablecido para soportar una Zona de Impuestos. El número
  de zonas pueden cambiarse fácilmente editando la siguiente línea
  $this->numzones = numero_zonas
  en el constructor de la clase (función seurnacional)
  
  Nota: si el módulo está instalado y necesita aumentar el número de zonas, debe editar este fichero
  y cambiar la línea this->numzones, para que los cambios surjan efecto, debe desinstalar y volver
  a instalar el módulo desde la zona de administración. Atención, al desinstalar el módulo perderá todas
  las tarifas de envío y demás parámetros del módulo.
  
  Nota 2:El peso máximo para envíos con este módulo es de 31 Kg
  
  Puede aplicar un Tipo de Impuesto para este módulo, así como el orden de visualización del módulo.
  
  Una vez que ha determinado el número de zonas de impuestos, y el orden de visualización, deberá seleccionar
  las zonas y configurar los parámetros para cada zona, que son los siguientes:
  
  - Zona X Tabla Envíos: Permite definir la tabla de envíos Peso:Importe para la zona X. Ejemplo:
    Si utilizamos la tabla 3:13.46,10:15.55,15:17.64,20:21,31:24.54 significa que
	Envíos >=0 y <3 kg 13.46 Euros
	Envíos >=3 y <10 kg 15.55 Euros
	Envíos >=10 y <15 kg 17.64 Euros
	Envíos >=15 y <20 kg 21.20 Euros
	Envíos >=20 y <31 kg 24,54 Euros
	Envíos >=31 Kg ERROR Situación imposible. Seur europack no permite envíos mayores a 31 Kg.
      
  - Zona X Handling Fee: permite definir el importe por la manipulación del paquete para
   los envíos a la zona X

  
  El gasto Total del envío será calculado de la siguiente forma:
  Gastos Envío = Gastos Tabla Envíos + Handling Fee
*/

  class mrw {
    var $code, $title, $description, $enabled, $num_zones;

// class constructor
    function mrw() {
      $this->code = 'mrw';
      $this->title = MODULE_MRW_TEXT_TITLE;
      $this->description = MODULE_MRW_TEXT_DESCRIPTION;
      $this->sort_order = MODULE_MRW_SORT_ORDER;
      $this->icon = 'mrw.gif';
      $this->icon = DIR_WS_ICONS . 'mrw.gif';
      $this->tax_class = MODULE_MRW_TAX_CLASS;
      $this->enabled = ((MODULE_MRW_STATUS == 'True') ? true : false);

      // CONFIGURE ESTE PARÁMETRO PARA ESTABLECER EL NÚMERO DE ZONAS NECESARIAS
      $this->num_zones = 9;

	}

// class methods
    function quote($method = '') {
     global $order, $shipping_weight, $shipping_num_boxes;

     $dest_zone = 0;
     $error = false;
	 $zones_weight_cost = 0;
     //si el peso del envío es menor o igual de 31 Kg intentar realizar el envío
	 if ($shipping_weight < 31)
	 { 
      for ($i=1; $i<=$this->num_zones; $i++) {
        $countries_table = constant('MODULE_MRW_COUNTRIES_' . $i);
        if ( ($this->enabled == true) && ((int)constant('MODULE_MRW_COUNTRIES_' . $i) > 0) ) {
			$check_query = tep_db_query("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . $countries_table . "' and (zone_country_id = '" . $order->delivery['country']['id'] . "' or zone_country_id='0') order by zone_id");
			while ($check = tep_db_fetch_array($check_query)) {
			  if ( ($check['zone_id'] < 1) || ($check['zone_id'] == $order->delivery['zone_id']) ) {
			    $dest_zone = $i;
				break;
			  }
			}
	        if ($dest_zone > 0) {
				$shipping = -1;
				$zones_cost = constant('MODULE_MRW_COST_' . $dest_zone);
				$zones_cost_table = split("[:,]" , $zones_cost);
				$size = sizeof($zones_cost_table);
				/*
				 Forma 1:
				 Formato  cadena pesos:coste=> 0:13.46,3:15.55,10:17.64,15:21,20:24.54,31:30
				 	Envíos >=0 y <3 kg 13.46 Euros
					Envíos >=3 y <10 kg 15.55 Euros
					Envíos >=10 y <15 kg 17.64 Euros
					Envíos >=15 y <20 kg 21.20 Euros
					Envíos >=20 y <31 kg 24,54 Euros
					Envíos >=31 Kg ERROR Situación imposible. Seur europack no permite envíos mayores a 31 Kg
				*/
				/* 
				for ($j=0; $j<$size; $j+=2) {				  
				  if (($shipping_weight >= $zones_cost_table[$j]) && ($shipping_weight < $zones_cost_table[$j+2]))
				  {
					$shipping = 1;					
					//obtener el precio de envío por kg para esa zona
					$zones_weight_cost = $zones_cost_table[$j+1];
					$shipping_method = MODULE_MRW_TEXT_WAY . ' ' . $order->delivery['country']['title'] . ' : ' . ($shipping_num_boxes > 1 ? $shipping_num_boxes . " x " : '') . $shipping_weight . ' ' . MODULE_MRW_TEXT_UNITS;
					break;
				  }
				}
				//Fin Forma1
				*/
				/*
				Forma 2:
				 Formato cadena pesos:coste=> 3:13.46,10:15.55,15:17.64,20:21,31:24.54
				 	Envíos >=0 y <3 kg 13.46 Euros
					Envíos >=3 y <10 kg 15.55 Euros
					Envíos >=10 y <15 kg 17.64 Euros
					Envíos >=15 y <20 kg 21.20 Euros
					Envíos >=20 y <31 kg 24,54 Euros
					Envíos >=31 Kg ERROR Situación imposible. Seur europack no permite envíos mayores a 31 Kg							
				*/
				for ($j=0;$j<$size; $j+=2) {				  
				  if ($shipping_weight < $zones_cost_table[$j])
				  {
					$shipping = 1;					
					//obtener el precio de envío por kg para esa zona
					$zones_weight_cost = $zones_cost_table[$j+1];
					$shipping_method = MODULE_MRW_TEXT_WAY . ' ' . $order->delivery['']['title'] . ' : ' . ($shipping_num_boxes > 1 ? $shipping_num_boxes . " x " : '') . $shipping_weight . ' ' . MODULE_MRW_TEXT_UNITS;
					break;
				  }
				}
				//Fin Forma 2
				if ($shipping == -1) {
				  $shipping_cost = 0;
				  $shipping_method = MODULE_MRW_UNDEFINED_RATE;
				} else {
				  $shipping_cost = $zones_weight_cost + constant('MODULE_MRW_HANDLING_' . $dest_zone);
			      break;
				}

            }
		}
       }

       if ($dest_zone == 0) {
        $error = true;
       }

       $this->quotes = array('id' => $this->code,
                            'module' => MODULE_MRW_TEXT_TITLE,
                            'methods' => array(array('id' => $this->code,
                                                     'title' => $shipping_method,
                                                     'cost' => $shipping_cost)));

       if ($this->tax_class > 0) {
        $this->quotes['tax'] = tep_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
       }

       if (tep_not_null($this->icon)) $this->quotes['icon'] = tep_image($this->icon, $this->title);
	   
	   if ($error == true) $this->quotes['error'] = MODULE_MRW_INVALID_ZONE;
      }
	  else //el peso es mayor de 31 Kg
	  {
	   $error = true;
	   $this->quotes['module'] = MODULE_MRW_TEXT_TITLE;
	   $this->quotes['error'] = MODULE_MRW_OVER_WEIGHT;
	  }      

      return $this->quotes;
    }

    function check() {
      if (!isset($this->_check)) {
        $check_query = tep_db_query("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_MRW_STATUS'");
        $this->_check = tep_db_num_rows($check_query);
      }
      return $this->_check;
    }

    function install() {
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('Activar MRW €Pack', 'MODULE_MRW_STATUS', 'True', '&iquest;Quiere activar el m&oacute;dulo de env&iacute;os MRW EuroPack?', '6', '0', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Tipo Impuesto', 'MODULE_MRW_TAX_CLASS', '0', 'Utilizar el siguiente tipo de impuesto para aplicar al env&iacute;o..', '6', '0', 'tep_get_tax_class_title', 'tep_cfg_pull_down_tax_classes(', now())");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Orden Visualizaci&oacute;n', 'MODULE_MRW_SORT_ORDER', '0', 'El menor se visualiza primero.', '6', '0', now())");
      for ($i = 1; $i <= $this->num_zones; $i++) {
        tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Zona " . $i ."', 'MODULE_MRW_COUNTRIES_" . $i ."', '0', 'Debe seleccionar una Zona de Impuestos para activar el m&eacute;todo de env&iacute;o sobre esta zona" . $i . ".', '6', '0', 'tep_get_zone_class_title', 'tep_cfg_pull_down_zone_classes(', now())");
        tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Zona " . $i ." Tabla Env&iacute;os', 'MODULE_MRW_COST_" . $i ."', '3:13.46,10:15.55,15:17.64,20:21.09,31:24.54', 'Tarifas Env&iacute;o para la zona " . $i . ". Precios basados por grupos de peso. Ejemplo: 3:13.46,10:15.55,... Pedidos con Peso < 3 tienen 13.46 Euros de gastos de env&iacute;o. Pedidos con Peso >= 3 y < 10 tienen 15.55 euros de gastos de env&iacute; para la Zona " . $i . ".', '6', '0', now())");
        tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Zona " . $i ." Handling Fee', 'MODULE_MRW_HANDLING_" . $i."', '0', 'Handling Fee para esta zona', '6', '0', now())");
      }
    }

    function remove() {
      tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      $keys = array('MODULE_MRW_STATUS', 'MODULE_MRW_TAX_CLASS', 'MODULE_MRW_SORT_ORDER');

      for ($i=1; $i<=$this->num_zones; $i++) {
        $keys[] = 'MODULE_MRW_COUNTRIES_' . $i;
        $keys[] = 'MODULE_MRW_COST_' . $i;
        $keys[] = 'MODULE_MRW_HANDLING_' . $i;
      }

      return $keys;
    }
  }
?>
