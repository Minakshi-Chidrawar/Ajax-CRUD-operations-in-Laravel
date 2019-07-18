<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResourceCollection;
use App\Http\Resources\PersonResource;
use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::Paginate());
    }

    public function store(Request $request): PersonResource
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'required',
            'email'      => 'required',
            'city'       => 'required',
        ]);

        $person = Person::create($request->all());
        
        return new PersonResource($person);
    }

    public function update(Person $person, Request $request): PersonResource
    {
        $person->update($request->all());

        return new PersonResource($person);
    }
}
