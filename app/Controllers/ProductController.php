<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function index(): string
    {
        // Conexión a la base de datos
        $db = \Config\Database::connect();

        // Ejecutar la consulta
        $query = $db->query("SELECT * FROM `products`");

        // Obtener resultados como array asociativo
        $products = $query->getResultArray();

        // Cerrar conexión si quieres
        $db->close();


        return view('products', ['products' => $products]);
    }
}
