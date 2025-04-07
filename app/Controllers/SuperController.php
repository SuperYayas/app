<?php

namespace App\Controllers;

use App\Models\UserModel;

use \Config\Database;

class SuperController extends BaseController
{
    public function index()
    {

        // Conexión a la base de datos
        $db = \Config\Database::connect();
        
        // Ejecutar la consulta
        $query = $db->query("SELECT * FROM supermarkets");
        
        // Obtener resultados como array asociativo
        $supers = $query->getResultArray();

        // Cerrar conexión si quieres
        $db->close();

        // Pasar los datos a la vista
        return view('supermarkets', ['supermarkets' => $supers]);

    }
}
