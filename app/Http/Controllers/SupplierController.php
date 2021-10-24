<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        //
    	$supplier = DB::table('supplier')->get();
    	return view('supplierread')->with(['data' => $supplier]);
    	return view('Supplier')->with(['data' => $supplier]);
    }

    public function search(Request $request)
    {
        $cari = $request->CariData;

        $supplier = DB::table('supplier')->where('nm_supplier','like','%'.$cari.'%')->paginate();

        return view('supplierread')->with(['data' => $supplier]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         
        $data['kd_supplier'] = $request->KdSupplier;
        $data['nm_supplier'] = $request->NmSupplier;
        $data['alamat'] = $request->AlSupplier;
        DB::table('supplier')->insert($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$supplier = DB::table('supplier')->where('id', $id)->get();
    	return view('supplierrincian')->with(['data' => $supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $supplier = DB::table('supplier')->where('id', $id)->get();
    	/*$supplier = DB::table('supplier')->where('kd',$id);*/
    	return view('Supplier')->with(['data' => $supplier]);
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
        DB::table('supplier')->where('id',$id)->delete();
    }
}
