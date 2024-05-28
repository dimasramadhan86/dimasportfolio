<?php

namespace App\Controllers;

use App\Models\DimasModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new DimasModel();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}