<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\Matter;
use App\Traits\UploadTrait;

class MatterController extends Controller
{

    use UploadTrait;

   public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $matters = Matter::all();
        return view('admin.matters.show_matters')->with('matters', $matters);
    }

    public function addMatterForm(){
        return view('admin.matters.add_matter');
    }

    public function addMatter(Request $request){
         Validator::make($request->all(),$this->addMatterRules())->validate();

        $file_path = 'uploads/admin/matters/';
        $file_name = 'avatar.png';

        if($request->hasFile('matter_photo') && $request->matter_photo->isValid()){
           $file_name = $this->uploadfile($request->matter_photo, $file_path);
        }

        Matter::create([
            'matter_name' => $request->matter_name,
            'matter_level' => $request->matter_lvl,
            'matter_photo' => $file_path.$file_name,
        ]);
        
        return redirect()->back()->with('success', 'Matter Added with Success');
    }

    private function addMatterRules(){
        return [
            'matter_name' => 'required',
            'matter_lvl' => 'required|numeric',
            'matter_photo' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

}