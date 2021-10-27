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
        DB::table('penjualan')->insert($data);
        
        
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
    public function update(Request $request, $noFaktur)
    {
        //        
        $dataBarang = $request->kodeBarang;
        $data = $request->Jumlah;
        for ($i = 0; $i < $data; $i++){
        $persediaan = DB::table('barang')->where('kd_barang',$dataBarang)->value('jumlah');
            $affected = DB::table('barang')
        ->where('kd_barang', $dataBarang)
        ->take(1)
        ->update(['jumlah' => $persediaan - 1]);
        $deleteKosong = DB::table('barang')->where('jumlah', 0)->delete();
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($noFaktur)
    {
        //        
        DB::table('penjualan')->where('no_faktur',$noFaktur)->delete();
    }
}
