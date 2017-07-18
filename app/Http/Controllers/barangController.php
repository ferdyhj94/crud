<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Redirect;
use View;
class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('product.product')->with('barang',$barang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addProduct()
    {
        return view('product.formBarang');
    }
    public function postAddProduct(Request $request)
    {
      $this->validate($request,['nama_barang'=>'required',
                                'jenis_barang'=>'required',
                                'stok'=>'required',
                                'harga_beli'=>'required',
                                'harga_jual','required']);

            /*$product = new Barang;
            $product->nama_barang = $request->input('nama_barang');
            $product->jenis_barang = $request->input('jenis_barang');
            $product->stok = $request->input('stok');
            $product->harga_beli = $request->input('harga_beli');
            $product->harga_jual = $request->input('harga_jual');

*/           Barang::create($request->only('nama_barang','jenis_barang','stok','harga_beli','harga_jual'));
            return Redirect::to('product');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editProduct($id)
    {
        $barang = Barang::find($id);
        return view('product.formUbah')->with('barang',$barang);
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function postEditProduct(Request $request)
    {
        // $id = $request->input('id');
        // $dataProduct = Barang::find($id);
        //     $product->nama_barang = $request->nama_barang;
        //     $product->jenis_barang = $request->jenis_barang;
        //     $product->stok = $request->stok;
        //     $product->harga_beli = $request->harga_beli;
        //     $product->harga_jual = $request->harga_jual;
        //     $product->save();

        $this->validate($request,['nama_barang'=>'required',
                                  'jenis_barang'=>'required',
                                   'stok'=>'required',
                                   'harga_beli'=>'required',
                                   'harga_jual'=>'required']);
        $barang = ['nama_barang'=>$request->input('nama_barang'),
                   'jenis_barang'=>$request->input('jenis_barang'),
                   'stok'=>$request->input('stok'),
                   'harga_beli'=>$request->input('harga_beli'),
                   'harga_jual'=>$request->input('harga_jual')];
                   // Barang::findOrFail($id)->update($request->only('nama_barang','jenis_barang','stok','harga_beli','harga_jual'));
          
        DB::table('barang')->where('id','=',$request->input('id'))->update($barang);        
                 return redirect()->route('listProduct');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct($id)
    {
        
        $product = Barang::find($id);
        $product->delete();
        return redirect()->route('listProduct');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
