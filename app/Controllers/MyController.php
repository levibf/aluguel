<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MyController extends BaseController
{
    public function render($view, $data)
    {
        return view('Layout/header');
        return view($view, $data);
        return view('Layout/footer');
    }
}
