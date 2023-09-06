<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Climbers;
use App\Http\Requests\ClimbersRequest;
use Illuminate\Support\Facades\Hash;
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

    // public function store(ClimbersRequest $request)
    // {

    //     $data = $request->all();
        
    //             // I-hash ang password bago ito ilagay sa $data array
    //     $data['password'] = Hash::make($data['password']);
        
    //         Climbers::create($data);
        
    //     return redirect()->route('climbers.index');
    // }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "phone_number" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "age" => "required|integer|min:18|max:65",
            "gender" => "required",
            "address" => "required",
            'email' => 'required|email|unique:climbers', // Pinalitan natin ang "users" ng "climbers" dito
            "status" => "string|in:pending",
            "citizenship" => "required",
            "password" => "required|min:8",
        ]);
    
        // I-hash ang password gamit ang bcrypt
        $hashedPassword = Hash::make($request->input('password'));
    
        // Lumikha ng bagong Climbers record
        $climber = new Climbers([
            "phone_number" => $validatedData["phone_number"],
            "first_name" => $validatedData["first_name"],
            "last_name" => $validatedData["last_name"],
            "age" => $validatedData["age"],
            "gender" => $validatedData["gender"],
            "address" => $validatedData["address"],
            'email' => $validatedData['email'],
            "status" => 'Pending',
            "citizenship" => $validatedData["citizenship"],
            "password" => $hashedPassword,
        ]);
    
        $climber->save();
    
        return redirect()->route('climbers.index');
    }

    public function destroy(Climbers $climber)
    {
     Climbers::destroy($climber->id);
     return redirect()->route('climbers.index');
    }
}