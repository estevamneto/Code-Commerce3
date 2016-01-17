<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        return "Lista de Products";
    }

    public function create()
    {
        return "Criando Products";
    }

    public function edit()
    {
        return "Editando Products";
    }

    public function update()
    {
        return "Atualizando Products";
    }

    public  function destroy()
    {
        return "Deletando Products";
    }
}
