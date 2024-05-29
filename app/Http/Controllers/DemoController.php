<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Application\ProductoManager;


class DemoController extends Controller
{
    public function saludo()
    {
        $data = DB::select("select * from articulo");

        foreach($data as $obj){
            echo $obj->nombre;
        }


        var_dump($data);
        exit();
        // $productoManager = new ProductoManager();
        // $productos = $productoManager->getAll();

        // return view('demo.lista-productos', [
        //     'productos' => $productos,
        // ]);
    }
}
