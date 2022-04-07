<?php

namespace App\Controllers;

use App\Models\FansModel;

class Home extends BaseController
{
    private $fansModel;

    public function __construct()
    {
        $this->fansModel = new FansModel();
    }

    public function index()
    {
        $fans = $this->fansModel->findAll();
        echo view('components/header');
        echo view('index', [
            'fans' => $fans
        ]);
        echo view('components/footer');
    }
}
