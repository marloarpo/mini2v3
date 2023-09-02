<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Climbers;
use Illuminate\Http\Request;

class ClimbersController extends Controller
{
    public function index()
    {
        $data = Climbers::paginate();
        return view('climbers.index', ['climbers' => $data]);
    }
}
