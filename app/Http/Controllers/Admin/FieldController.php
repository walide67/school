<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\Field;

class FieldController extends Controller
{
   public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $fields = Field::all();
        return view('admin.fields.show_fields')->with('fields', $fields);
    }

    public function addFieldForm(){
        return view('admin.fields.add_field');
    }

    public function addField(Request $request){
        Validator::make($request->all(),
            [
                "field_name" => 'required',
                "field_photo"=> 'image|required'
            ]
        )->validate();
        Field::create([
            'field_name' => $request->field_name,
            "field_photo"=> ''
        ]);

        return redirect()->back()->with('success', 'Field Added with success');
    }

}