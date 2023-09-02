<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Climbers;
use App\Http\Requests\ClimbersRequest;
use Illuminate\Http\Request;


class ClimbersController extends Controller
{
    public function index()
    {
        $data = Climbers::paginate();
        return view('climbers.index', ['climbers' => $data]);
    }

    public function create()
    {
        return view("climbers.create");

    }

    public function store(ClimbersRequest $request)
    {
  
     Climbers::create($request->all());
     return redirect()->route('climbers.index');
    }
}