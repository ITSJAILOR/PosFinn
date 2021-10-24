<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PembelianModel;
use App\PersediaanModel;
use Illuminate\Support\Facades\DB;

class PembelianControllerr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $datapembelian = DB::table('pembelian')
                                    ->select('*' , DB::raw('SUM(total) as jmlTotal'))
                                    ->groupBy('no_faktur')
                                    ->get();
        return view('Pembelianread')->with(['data' => $datapembelian]);
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
        $InputPembelian['no_faktur']=$request->Faktur;
        $InputPembelian['kd_subjek']=$request->NoSupplier;
        $InputPembelian['tgl_pembelian']=$request->Tanggal;
        $InputPembelian['kd_barang']=$request->KdBarang;
        $InputPembelian['nm_barang']=$request->NmBarang;
        $InputPembelian['stok']=$request->Jumlah;
        $InputPembelian['harga_beli']=$request->HargaBeli;
        $InputPembelian['total']=$request->Total;

        
        $InputPersediaan['kd_barang']=$request->KdBarang;
        $InputPersediaan['nm_barang']=$request->NmBarang;
        $InputPersediaan['jumlah']=$request->Jumlah;
        $InputPersediaan['hargajual']=$request->HargaBeli;
        $InputPersediaan['hargabeli']=$request->HargaBeli;

        PembelianModel::insert($InputPembelian);
        PersediaanModel::insert($InputPersediaan);
        
        // DB::table('barang')
        // ->updateOrInsert(
        // ['kd_barang' => $request->KdBarang, 'hargabeli' => $request->HargaBeli],
        // ['hargajual' => $request->HargaBeli,'nm_barang' => $request->NmBarang,'jumlah' => $request->Jumlah]
    // );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        /* untuk data utama nota 
        return view('Pembelianread')->with(['data' => $datapembelians]);

        /* untuk isi tabel nota */
        $datapembelian = PembelianModel::where('no_faktur', $id)->firstOrfail();
        $rincipembelian = PembelianModel::where('no_faktur', $id)->get();
        return view('nota')->with(['data' => $datapembelian, 'rincian' => $rincipembelian]);
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
    //     $InputPembelian['no_faktur']=$request->Faktur;
    //     $InputPembelian['kd_subjek']=$request->NoSupplier;
    //     $InputPembelian['tgl_pembelian']=$request->Tanggal;
    //     $InputPembelian['kd_barang']=$request->KdBarang;
    //     $InputPembelian['nm_barang']=$request->NmBarang;
    //     $InputPembelian['stok']=$request->Jumlah;
    //     $InputPembelian['harga_beli']=$request->HargaBeli;
    //     $InputPembelian['total']=$request->Total;

        
    //     $InputPersediaan['kd_barang']=$request->KdBarang;
    //     $InputPersediaan['nm_barang']=$request->NmBarang;
    //     $InputPersediaan['jumlah']=$request->Jumlah;
    //     $InputPersediaan['hargajual']=$request->HargaBeli;
    //     $InputPersediaan['hargabeli']=$request->HargaBeli;

    //     PembelianModel::insert($InputPembelian);
        
    //     $data = M_Crud::findOrfail($id);
    //     $data['name'] = $request->name;
    //     $data['kd'] = $request->ads;
    //     $data->save();
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
