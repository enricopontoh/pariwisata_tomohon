<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZonasiWisataModel;
use App\Models\daerah;
use App\Models\wisata;
use Validator,DB;
class ZonasiWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
                        ->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
                        ->select('table_zonasi.*','wisatas.nama_wisata as wisata','daerahs.nama_daerah as daerah')
                        ->paginate(15);
        return view('layouts.admin.zonasi.index',compact('data'));
    }
    public function getWisata($idDaerah){
        $wisata = wisata::where('daerah_wisata',$idDaerah)->get();
        return response()->json(['status'=>'success','data'=>$wisata],200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daerah = daerah::get();
        $wisata = wisata::get();
        return view('layouts.admin.zonasi.create',compact('daerah','wisata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'id_daerah'=>'required',
            'id_wisata'=>'required',
            'zone_collections'=>'required'
        ]);
        if($validate->fails()){
            return redirect('admin/zonasi/create')->with('error','Data tidak lengkap!')->withInput($request->all());
        }
        try{
            $newData = ZonasiWisataModel::create([
                'id_daerah'=>$request->id_daerah,
                'id_wisata'=>$request->id_wisata,
                'zone_collections'=>$request->zone_collections
            ]);
            return redirect('admin/zonasi')->with('success','Data berhasil di tambahkan!');
        }catch(\Exception $e){
            return redirect('admin/zonasi/create')->with('error','Terjadi kesalahan : '.$e->getMessage())->withInput($request->all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
                        ->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
                        ->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.longitude','wisatas.latitude','wisatas.warna_zonasi as warna','daerahs.nama_daerah as daerah')
                        ->where('table_zonasi.id',$id)->first();
        if($data){
            return view('layouts.admin.zonasi.detail',compact("data"));
        }
        return redirect('admin/zonasi')->with('error','Data tidak di temukan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
                        ->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
                        ->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.longitude','wisatas.latitude','wisatas.warna_zonasi as warna','daerahs.nama_daerah as daerah')
                        ->where('table_zonasi.id',$id)->first();
        if($data){
            $daerah = daerah::get();
            $wisata = wisata::get();
            return view('layouts.admin.zonasi.edit',compact('data','daerah','wisata'));
        }
        return redirect('admin/zonasi')->with('error','Data tidak di temukan!');
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
        $validate = Validator::make($request->all(),[
            'id_daerah'=>'required',
            'id_wisata'=>'required',
            'zone_collections'=>'required'
        ]);
        if($validate->fails()){
            return redirect('admin/zonasi/'.$id.'/edit')->with('error','Data tidak lengkap!')->withInput($request->all());
        }
        try{
            DB::beginTransaction();
            $newData = ZonasiWisataModel::where('id',$id)->update([
                'id_daerah'=>$request->id_daerah,
                'id_wisata'=>$request->id_wisata,
                'zone_collections'=>$request->zone_collections
            ]);
            DB::commit();
            return redirect('admin/zonasi')->with('success','Data berhasil di ubahkan!');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect('admin/zonasi/'.$id.'/edit')->with('error','Terjadi kesalahan : '.$e->getMessage())->withInput($request->all());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            DB::beginTransaction();
            $delete = ZonasiWisataModel::where('id',$id)->delete();
            DB::commit();
            return redirect('admin/zonasi')->with('success','Data berhasil di hapus!');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect('admin/zonasi')->with('error','Data gagal di hapus ! : '.$e->getMessage());
        }
    }
}
