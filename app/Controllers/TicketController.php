<?php

namespace App\Controllers;

use App\Models\UserModel;

use \Config\Database;

class TicketController extends BaseController
{
    public function index()
    {

        // Conexión a la base de datos
        $db = \Config\Database::connect();
        
        // Ejecutar la consulta
        $query = $db->query("SELECT * FROM shopping_lists");
        
        // Obtener resultados como array asociativo
        $tickets = $query->getResultArray();

        // Cerrar conexión si quieres
        $db->close();

        // Pasar los datos a la vista
        return view('tickets', ['tickets' => $tickets]);

    }
}
