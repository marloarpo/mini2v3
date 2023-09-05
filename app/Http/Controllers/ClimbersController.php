<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Climbers;
use App\Http\Requests\ClimbersRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;


class ClimbersController extends Controller
{
    public function index()
    {
        $data = Climbers::paginate();
        return view('climbers.index', ['climbers' => $data]);
    }

    public function show(Climbers $climber)
    {
        return view('climbers.show')->with('climbers', $climber);
    }

    public function edit(Climbers $climber)
    {
        return view('climbers.edit')->with('climbers', $climber);
    }

    public function update(ClimbersRequest $Request, Climbers $climber)
    { 
        //  $Request->validate([
        //      "first_name"  => 'required',
        //      "last_name" => "required",
        //      "email" => "required",
        //      "age" => "required|integer|min:1|max:120",
        //      "gender" => "required"
        //  ]);

         $climber->update($Request->all());
        //  return redirect()->route('climbers.show', ['climbers' => $climber->id]);
         return redirect()->route('climbers.show', ['climber' => $climber->id]);
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

    public function destroy(Climbers $climber)
    {
     Climbers::destroy($climber->id);
     return redirect()->route('climbers.index');
    }
}