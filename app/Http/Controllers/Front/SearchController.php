<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

        if($request->ajax()) {

            $data = Product::where('name', 'LIKE', $request->name.'%')->get();

            $output = '';

            if (count($data)>0) {

                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row){

                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
                }

                $output .= '</ul>';
            }
            else {

                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }

            return response()->json([
                'data'     => $output
            ]);

        }
    }

}
