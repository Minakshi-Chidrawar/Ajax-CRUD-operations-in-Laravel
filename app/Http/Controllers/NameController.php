<?php

namespace App\Http\Controllers;

use App\Name;
use Response;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NameController extends Controller
{
    public function store(Request $request)
    {
        $rules = array(
                'name' => 'required|alpha_num',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),
            ));
        } else {
            $name = new Name();
            $name->name = $request->name;
            $name->save();

            return response()->json($name);
        }
    }
    public function index()
    {
        $name = Name::all();

        return view('welcome')->withData($name);
    }

    public function destroy(Request $req)
    {
        Name::find($req->id)->delete();

        return response()->json();
    }
}
