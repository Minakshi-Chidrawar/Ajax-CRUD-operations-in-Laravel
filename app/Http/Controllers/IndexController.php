<?php

namespace App\Http\Controllers;

use App\Data;
use Response;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
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
            $data = new Data();
            $data->name = $request->name;
            $data->save();

            return response()->json($data);
        }
    }
    public function index(Request $req)
    {
        $data = Data::all();

        return view('names')->withData($data);
    }

    public function show(Request $request)
    {
        $rules = array(
            'numberOfWinners' => 'required|numeric',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Response::json(array(

                'errors' => $validator->getMessageBag()->toArray(),
            ));
        } else {
            $names = Data::inRandomOrder()->take($request->numberOfWinners)->get();

            return response()->json($names);
        }
    }

    public function destroy(Request $request)
    {
        Data::find($request->id)->delete();

        return response()->json();
    }
}