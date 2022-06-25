<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SkinCare;

class SkinCareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SkinCare::all();
        $count = $data->count();
        if($count > 0){
            return response()->json([
                'success' => true,
                'message' =>'Get Product berhasil',
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
    public function getbyId($id){
        $data = SkinCare::where('category_id',$id)->get();
        $check = SkinCare::where('category_id',$id)->get()->count();

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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
