<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
        {
            return "Lista de Categories";
        }

    public function create()
       {
           return "Criando Categories";
       }

    public function edit()
        {
            return "Editando Categories";
        }

    public function update()
        {
            return "Atualizando Categories";
        }

    public  function destroy()
        {
            return "Deletando Categories";
        }
}