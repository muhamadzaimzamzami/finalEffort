<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::all();
        $count = $data->count();
        if($count > 0){
            return response()->json([
                'success' => true,
                'message' =>'Get Article Success',
                'data'=>$data
            ],200);            
            }else {
            return response()->json([
                'success' => false,
                'message' =>'Article Empty',
                'data'=>$data
            ],200);            
            }
    }

}
