<?php

//echo "Hola mundo!";

//var_dump($_SERVER);

//echo $_SERVER['REQUEST_METHOD'];
$registro = [];

/* array_push($registro, array('nombre' => 'Victor', 'apellido' => 'Pinedo'));
array_push($registro, array('nombre' => 'David', 'apellido' => 'MNedina'));
array_push($registro, array('nombre' => 'Kenia', 'apellido' => 'Vázquez'));

echo json_encode($registro); */

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        break;
    case 'POST':

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        break;
    default:
        echo "El método HTTP no es reconocido";
        break;
}

array_push($registro, array('nombre' => $nombre, 'apellido' => $apellido));
echo json_encode($registro);

?>  