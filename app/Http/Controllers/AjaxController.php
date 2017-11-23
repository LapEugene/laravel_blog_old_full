<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                include(app_path() . '/Functions/SimpleHtmlDom.php');
                $search_query = $request['string'];
                $search_query = urlencode( $search_query );
                $html = file_get_html( "https://www.google.com/search?q=$search_query&tbm=isch" );
                $image_count = $request['count'] + 1; //Enter the amount of images to be shown
                $i = 0;
                foreach($html->find('img') as $element){
                    if($i == $image_count) break;
                    $links[] = $element->getAttribute('src');
                    $i++;
                }

                return response()->json(array('status' => true, 'img' => $links[$request['count']]), 200);
            default:
                break;
        }

    }
}


