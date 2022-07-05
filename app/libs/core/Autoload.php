<?php
function cargarControolador($nombreClase)
{
    include 'app/controllers/' . ucwords($nombreClase) . '.php';
}

spl_autoload_register('cargarControolador');
