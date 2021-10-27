<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersediaanModel;
use Illuminate\Support\Facades\DB;

class PersediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function read()
    {
        // $data = PersediaanModel::all();
        // return view('persediaanread')->with(['data' => $data]);
        $data = DB::table('barang')
                            ->select('*' , DB::raw('SUM(jumlah) AS totalStok'))
                            ->orderByDesc('Id')
                            ->groupBy('kd_barang')
                            ->get();
        return view('persediaanread')->with(['data' => $data]);
    }

    public function search(Request $request)
    {
        $cari = $request->CariData;
        $data = DB::table('barang')
                            ->select('*' , DB::raw('SUM(jumlah) AS totalStok'))
                            ->groupBy('kd_barang')
                            ->where('kd_barang','like',$cari)->paginate();

        return view('persediaanread')->with(['data' => $data]);
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
