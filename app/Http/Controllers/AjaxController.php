<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\User;
use App\Articles;
use App\Comments;
use App\Subscribe;
use App\Contact;
use Hash;
use Response;
use Auth;
use Session;
use Image;


class AjaxController extends Controller
{
    public function __construct()
    {
    }

    public function parseAction(Request $request)
    {
        $request = $request->all();

        switch ($request['action']) {

            case 'upload_photo':

                $validator = Validator::make($request, [
                    'photo' => 'required',
                    'action' => 'required',
                ]);
                if ($validator->fails()) {
                    $error = $validator->errors();

                    return response()->json(array('status' => false, 'error' => $error));
                } else {
                    $user = Auth::user();
                    $str = md5(microtime());
                    $time_path = '/' . date('Y-m-dHis') . $str . '.jpg';
                    if (Image::make($request['photo'])->save('photos' . $time_path)) {
                        return response()->json(array('status' => true, 'msg' => 'Photo has changed', 'photo' => '/photos/' . $time_path), 200);
                    } else {
                        return false;
                    }
                }


            default:
                break;
        }

    }
}


