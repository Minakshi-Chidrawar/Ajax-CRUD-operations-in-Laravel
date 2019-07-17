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
}
