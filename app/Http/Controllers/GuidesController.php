<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Guides;
use Illuminate\Http\Request;

class GuidesController extends Controller
{
    public function index()
    {
        $data = Guides::paginate();
        return view('guides.index', ['guides' => $data]);
    }
}
