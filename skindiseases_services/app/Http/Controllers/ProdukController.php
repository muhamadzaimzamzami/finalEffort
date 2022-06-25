<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SkinCare;
use Cloudinary;
use Carbon\Carbon;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk ['produk'] = SkinCare::all();
        return view('produk')->with($produk);
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
        $fileName = Carbon::now()->format('Y-m-d H:i:s').'-'.$request->name;
        $uploadedFile = $request->file('image')->storeOnCloudinaryAs('Skin',$fileName);
        $image = $uploadedFile->getSecurePath();
        $public_id = $uploadedFile->getPublicId();
        $user = SkinCare::create(array_merge($request->all(), [
             'image' =>$image,
             'public_id'=>$public_id,
        ]));
        return redirect('produk');
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
    public function destroy($id)
    {
        $id = SkinCare::findOrFail($id);
        Cloudinary::destroy($id->public_id);
        $id->delete();
        return redirect()->route('produk.index')->with('success', 'Data has been deleted!');
    }
}
