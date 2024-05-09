<?php

namespace App\Http\Controllers\Api;

use App\Models\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /** GET API  */
    public function getAllData($id=null){
      if($id==""){
          $allDataGet = Api::all();
          return response()->json(['getAllData' => $allDataGet],200);
        }else{
            $allDataGet = Api::findOrFail($id);
            return response()->json(['data' => $allDataGet],200); 
      }
    }

    /** POST API CREATE WITH AUTHENTICATION */
    public function createData(Request $request){
        $request->validate([
           'title' => "required",
           'details' => "required",
        ],
        [
            'title.required' => "Title koi vai",
            'details.required' => "Details is required",
        ]
    );

       if($request->isMethod('post')){
        $incomingData = $request->all();
        $data = new Api();
        $data->title = $incomingData['title'];
        $data->details = $incomingData['details'];
        $data->save();
        $message = "new data inserted!";
         return response()->json(['success' => $message]);
       }
    }


    /** UPDATE */
    public function updateData(Request $request, $id){
      $request->validate([
        'title' => "required",
        'details' => "required",
        ],
        [
            'title.required' => "Title koi vai",
            'details.required' => "Details is required",
        ]
      );

      if($request->isMethod('put')){
        $updateData = Api::find($id);
        $updateData->title = $request->title;
        $updateData->details = $request->details;
        $updateData->save();
        $message = "update has completed!";
        return response()->json(['update' => $message],402);
      }
    }
}
