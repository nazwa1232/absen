<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {

    $data = [
        'total_guru' => 50,
        'hadir' => 30,
        'terlambat' => 0,
    ];
    return view('dashboard', $data);
}
}
