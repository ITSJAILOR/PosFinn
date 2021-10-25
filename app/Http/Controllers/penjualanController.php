<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        //
    	$nota = DB::table('penjualan')->get();
    	return view('notaPenjualan')->with(['data' => $nota]);
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
        $data['no_faktur'] = '1';
        $data['kd_pelanggan'] = '1';
        $data['tgl_pembelian'] = date('Y-m-d');
        $data['kd_barang'] = $request->KdBarang;
        $data['nm_barang'] = $request->NmBarang;
        $data['stok'] = $request->Jumlah;
        $data['harga_jual'] = $request->HargaJual;
        $data['total'] = $request->Total;
        // DB::table('penjualan')->insert($data);
        
        // $cari = $request->KdBarang;
        // $persediaan = DB::table('barang')->where('kd_barang','like','%'.$cari.'%')->value('jumlah');
        // // return view('supplierread')->with(['data' => $supplier]);
        // $pembelian = $request->Jumlah;
        // while ($persediaan >= $pembelian){
        //     $pembelian = $pembelian - $persediaan;
        //     $persediaan = DB::table('barang')
        //                                     ->where('kd_barang','like','%'.$cari.'%')
        //                                     ->first();
        //                                     // ->orderBy('id')
        //                                     // ->paginate();
        //                                     // ->value('jumlah');
        //     DB::table('barang')->where('id','like','%'.$cari.'%')->delete();
        // }
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
        $data = $request->UpdateStok;
        $affected = DB::table('barang')
        ->where('id', $id)
        ->update(['jumlah' => $data]);
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
        DB::table('barang')->where('id',$id)->delete();
    }
}
