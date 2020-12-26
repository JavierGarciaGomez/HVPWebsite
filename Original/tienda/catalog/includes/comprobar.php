<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php     

         //Defino en una variable que archivo voy a leer
        $url="id.xml"; 

        //Defino una variable donde estará todo el contenido
        $contenido_xml="";

        //Abro el archivo licencia.xml   "r"=Modo de solo lectura
	if ($d = @fopen($url,"r")){

           //Se obtienen 1024 caracteres por linea y se introducen
           //en la variable contenido

	    while($aux=fgets($d,1024)){
		$contenido_xml .= $aux;
	    }

           //Ya que tengo todo el documento en una variable 
           //Lo cierro, no se usará mas
		@fclose($d);

                //El ultimo paso:
                //Guardare el objeto XML todos los objetos marcados en XML

		$xml = simplexml_load_string($contenido_xml);

                //Accedo al objeto XML que fue marcado como:
                //5
                //Imprimo
                $id=$xml->id_nuevo;
          }
echo$id;
?>


</body>
</html>