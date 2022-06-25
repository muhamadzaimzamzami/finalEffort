<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recomentdation;

class RecomendationController extends Controller
{
    public function index(){
        $produk = Recomentdation::all();
        return response()->json(
            [
                'success' => true,
                'message' => 'Get Produk Berhasil',
                'data' => $produk
            ], 200
            );
    }

    public function getbyId($id){
        $data = Recomentdation::where('category_id',$id)->get();
        $check = Recomentdation::where('category_id',$id)->get()->count();

        if($check > 0){
            return response()->json([
                'success' => true,
                'message' =>'Get category berhasil',
                'data'=>$data
            ],200);            
            }else {
            return response()->json([
                'success' => false,
                'message' =>'Product kosong',
                'data'=>$data
            ],200);            
            }
    }
}
