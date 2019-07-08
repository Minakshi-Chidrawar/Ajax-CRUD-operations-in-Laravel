<?php

namespace App\Http\Controllers;

use App\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        $names = Name::all();

        return view('names.index', compact('names'));
    }

    public function create()
    {
        $name = new Name();

        return view('names.create', compact('name'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        dd($data);

        $name = Name::create($this->validateRequest());
        
        return response()->json($data);
    }  
}
