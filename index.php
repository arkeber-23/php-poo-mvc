<?php
require_once './app/libs/core/Autoload.php';

if (isset($_GET['controlador'])) {
    $nombreControlador = $_GET['c'] . 'Controller';
} elseif (!isset($_GET['c']) && !isset($_GET['m'])) {
    $nombreControlador =''; #CONTROLADOR POR DEFECTOS;
} else {
    echo "La pagina no existe";
    exit;
}
if (class_exists($nombreControlador)) {
    $controlador = new $nombreControlador();

    if (isset($_GET['m']) && method_exists($controlador, $_GET['m'])) {
        $metodo = $_GET['m'];
        $controlador->$metodo();
    } elseif (!isset($_GET['c']) && !isset($_GET['m'])) {
        $metodo =''; #METODO POR DEFECTO;
        $controlador->$metodo();
    } else {
        echo "La pagina no existe";
    }
} else {
    echo "La pagina no existe";
}


?>