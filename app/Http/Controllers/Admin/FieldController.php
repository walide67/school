<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\Field;
use App\Traits\UploadTrait;

class FieldController extends Controller
{
    use UploadTrait;

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
        Validator::make($request->all(),$this->addFieldRules())->validate();

        $file_path = 'uploads/admin/fields/';
        $file_name = 'avatar.png';

        if($request->hasFile('field_photo') && $request->field_photo->isValid()){
           $file_name = $this->uploadfile($request->field_photo, $file_path);
        }

        Field::create([
            'field_name' => $request->field_name,
            "field_photo"=> $file_path.$file_name
        ]);

        return redirect()->back()->with('success', 'Field Added with success');
    }

    private function addFieldRules(){
        return            [
            "field_name" => 'required',
            "field_photo"=> 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

}