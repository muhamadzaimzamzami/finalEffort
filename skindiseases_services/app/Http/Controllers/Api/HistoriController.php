<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Histori;
use Carbon\Carbon;

class HistoriController extends Controller
{
    public function getbyId($id){
        $data = Histori::where('id_users',$id)->get();
        $check = Histori::where('id_users',$id)->get()->count();

        if($check > 0){
            return response()->json([
                'success' => true,
                'message' =>'Get Histori berhasil',
                'data'=>$data
            ],200);            
            }else {
            return response()->json([
                'success' => false,
                'message' =>'Histori kosong',
                'data'=>$data
            ],200);            
            }
    }
    public function store(Request $request)
    {
        $fileName = Carbon::now()->format('Y-m-d H:i:s').'-'.$request->name;
        $uploadedFile = $request->file('image')->storeOnCloudinaryAs('Skin',$fileName);
        $image = $uploadedFile->getSecurePath();
        $user = Histori::create(array_merge($request->all(), [
             'image' =>$image,
        ]));
        if ($user) {
            return response()->json([
                "success" => true,
                "message" => "Histori Berhasil Di simpan",
                "data" => $user 
            ]);
        }else {
            return response()->json([
                "success" => false,
                "message" => "Histori Gagal Di simpan"
            ]);
        }
    }
}
