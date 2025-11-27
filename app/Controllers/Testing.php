<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Testing extends BaseController
{
    public function index()
    {
        $sent_data = [
            "nama" => "PT.Bionic Natura",
            "alamat" => "Jl. Gatot Subroto No.8, RT.001/RW.005, Jatake, Kec. Jatiuwung, Kota Tangerang, Banten 15810"
        ];
        return view('vw_custom', $sent_data);
    }
}
