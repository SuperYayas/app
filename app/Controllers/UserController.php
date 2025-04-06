<?php

namespace App\Controllers;

use App\Models\UserModel;

use \Config\Database;

class UserController extends BaseController
{
    public function index()
    {

        // Conexión a la base de datos
        $db = \Config\Database::connect();
        
        // Ejecutar la consulta
        $query = $db->query("SELECT * FROM users");
        
        // Obtener resultados como array asociativo
        $users = $query->getResultArray();

        // Cerrar conexión si quieres
        $db->close();

        // Pasar los datos a la vista
        return view('users_list', ['users' => $users]);

    }
}
