<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        // Intenta ejecutar la consulta manualmente con logging activado
        $users = $userModel->findAll();

        // Debug: muestra los datos obtenidos crudos
        echo "<pre>";
        print_r($users);
        echo "</pre>";

        // También puedes habilitar el query log para inspeccionar qué se está ejecutando
        $db = \Config\Database::connect();
        $queries = $db->getLastQuery();
        echo "Última consulta ejecutada: " . $queries;

        return view('users_list', ['users' => $users]);
    }
}
