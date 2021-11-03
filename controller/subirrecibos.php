<?php

var_dump($_FILES["file"]);

$directorio= "recibosempleados/";

$archivo = $directorio. basename($_FILES["file"]["name"]);

?>