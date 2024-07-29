<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ItemModel;

class Dashboard extends BaseController
{
    var $model;
    function __construct()
    {
        $this->model = new ItemModel();
    }
    public function index()
    {
        // Menghitung jumlah data di tabel items
        $itemCount = $this->model->countAllResults();

        // Mengirimkan data jumlah item ke view
        $data = [
            'itemCount' => $itemCount,
        ];

        return view('web/dashboard', $data);
    }
}
