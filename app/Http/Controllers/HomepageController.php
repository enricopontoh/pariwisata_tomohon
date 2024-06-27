<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\kategori;
use App\Models\wisata;
use App\Models\daerah;
use App\Models\fasilitas;
use App\Models\gambar;
use App\Models\ZonasiWisataModel;

class HomepageController extends Controller
{
    //
	public function index(){
		$menukategori = kategori::all();
		$countdaerah = daerah::count();
		$countwisata = wisata::count();
		$countkategori = kategori::count();
		$menudaerah = daerah::limit(5)->get();
		$datadaerah = daerah::all();
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();
		$slide = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(5)->get();
		$wisatadilihat = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('pengunjung','DESC')->limit(3)->get();
		$maps = wisata::with('foreign_daerah')->with('foreign_kategori')->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->get();
		return view('layouts.homepage.index', compact('menukategori','zonasi','countdaerah','countwisata','countkategori','menudaerah','slide','wisatadilihat','datadaerah','wisataterbaru','maps'));
		
	}
	
	public function wisata(){
		$menudaerah = daerah::limit(5)->get();
		$menukategori = kategori::all();
		$wisatadilihat = wisata::with('foreign_daerah')->with('foreign_kategori')->get();
		return view('layouts.homepage.wisata', compact('menukategori','menudaerah','wisatadilihat'));	
	}	
	
	public function daerah(){
		$menudaerah = daerah::limit(5)->get();
		$menukategori = kategori::all();
		$daerah = daerah::all();
	//	$wisatadilihat = wisata::with('foreign_daerah')->with('foreign_kategori')->get();
		return view('layouts.homepage.daerah', compact('menukategori','menudaerah','daerah'));	
	}		
	
	public function cariwisata2(Request $request){
		$datacari = $request->input('cari');
		$menukategori = kategori::all();
		$wisatadilihat = wisata::with('foreign_daerah')->with('foreign_kategori')->where('nama_wisata','like',"%".$datacari."%")->get();		
		$menudaerah = daerah::limit(5)->get();
		//$wisatadilihat = wisata::with('foreign_daerah')->with('foreign_kategori')->get();
		return view('layouts.homepage.wisata', compact('menukategori','menudaerah','wisatadilihat'));	
	}
	
	public function detailkategorimenu($id){
		$menudaerah = daerah::limit(5)->get();
		$daerah = daerah::find($id);	
		$menukategori = kategori::all();
		$datakategori = wisata::with('foreign_daerah')->with('foreign_kategori')->where('kategori',$id)->get();		
		$datanamakategori = kategori::find($id);
		return view('layouts.homepage.detailkategori', compact('datanamakategori','menukategori','menudaerah','datakategori','daerah'));
	}	

	public function maps(){
		$fasilitas = fasilitas::all();
		$menukategori = kategori::all();
		$menudaerah = daerah::limit(5)->get();
		$datadaerah = daerah::all();
		$kategori = kategori::all();
		$maps = wisata::with('foreign_daerah')->with('foreign_kategori')->get();	
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->get();	
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();		
		return view('layouts.homepage.maps', compact('menukategori','menudaerah','maps','wisataterbaru','datadaerah','kategori','fasilitas','zonasi'));
		
	}
	
	public function detaildaerahmenu($id){
		$menudaerah = daerah::limit(5)->get();
		$daerah = daerah::find($id);	
		$menukategori = kategori::all();
		$wisatadaerah = wisata::with('foreign_daerah')->with('foreign_kategori')->where('daerah_wisata',$id)->get();		
		return view('layouts.homepage.detaildaerah', compact('menukategori','menudaerah','wisatadaerah','daerah'));
	}	
	
	public function cariwisata(Request $request){
//        $modul = modul::paginate(2);
		$menukategori = kategori::all();
		$menudaerah = daerah::limit(5)->get();
		$datanama_wisata = $request->input('nama_wisata');
		$datadaerah = $request->input('daerah');
		$datakategori = $request->input('kategori');
		$datafasilitas = $request->input('fasilitas');
		$fasilitas = fasilitas::all();
		$daerah = daerah::all();
		$kategori = kategori::all();

		if($datanama_wisata != '' && $datadaerah == '' && $datakategori == '' && $datafasilitas == '')
		{
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//wisata
			
		elseif($datanama_wisata == '' && $datadaerah != '' && $datakategori == '' && $datafasilitas == ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('daerah_wisata',$datadaerah)->get();
		$datajumlah = wisata::where('daerah_wisata',$datadaerah)->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('daerah_wisata',$datadaerah)->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('id_daerah',$datadaerah)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//daerah
		
		elseif($datanama_wisata == '' && $datadaerah == '' && $datakategori != '' && $datafasilitas == ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('kategori',$datakategori)->get();
		$datajumlah = wisata::where('kategori',$datakategori)->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('kategori',$datakategori)->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.kategori',$datakategori)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//kategori

		elseif($datanama_wisata == '' && $datadaerah == '' && $datakategori == '' && $datafasilitas != ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$datajumlah = wisata::where('fasilitas','like',"%".$datafasilitas[0]."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.fasilitas','like',"%".$datafasilitas[0]."%")
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));
		}//fasilitas
		
		elseif($datanama_wisata != '' && $datadaerah != '' && $datakategori == '' && $datafasilitas == ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('id_daerah',$datadaerah)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//wisata dan daerah (1 2)

		elseif($datanama_wisata != '' && $datadaerah == '' && $datakategori != '' && $datafasilitas == ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('wisatas.kategori',$datakategori)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//wisata dan kategori	(1 3)
		
		elseif($datanama_wisata != '' && $datadaerah == '' && $datakategori == '' && $datafasilitas != ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('fasilitas','like',"%".$datafasilitas[0]."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('wisatas.fasilitas','like',"%".$datafasilitas[0]."%")
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//wisata dan fasilitas (1 4)

		elseif($datanama_wisata != '' && $datadaerah != '' && $datakategori != '' && $datafasilitas == ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('wisatas.kategori',$datakategori)
									->where('id_daerah',$datadaerah)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//wisata, daerah dan kategori	(1 2 3)
		
		elseif($datanama_wisata != '' && $datadaerah != '' && $datakategori == '' && $datafasilitas != ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('fasilitas','like',"%".$datafasilitas."%")->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('fasilitas','like',"%".$datafasilitas."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('fasilitas','like',"%".$datafasilitas."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('wisatas.fasilitas','like',"%".$datafasilitas[0]."%")
									->where('id_daerah',$datadaerah)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//wisata, daerah dan fasilitas	(1 2 4)

		elseif($datanama_wisata != '' && $datadaerah == '' && $datakategori != '' && $datafasilitas != ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas."%")->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('wisatas.fasilitas','like',"%".$datafasilitas[0]."%")
									->where('wisatas.kategori',$datakategori)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//wisata, kategori dan fasilitas (1 3 4)
		
	

		elseif($datanama_wisata == '' && $datadaerah != '' && $datakategori != '' && $datafasilitas == ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->get();
		$datajumlah = wisata::where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.kategori',$datakategori)
									->where('id_daerah',$datadaerah)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));
		}//daerah dan kategori (2 3)

		elseif($datanama_wisata == '' && $datadaerah != '' && $datakategori == '' && $datafasilitas != ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('daerah_wisata',$datadaerah)->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$datajumlah = wisata::where('daerah_wisata',$datadaerah)->where('fasilitas','like',"%".$datafasilitas[0]."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('daerah_wisata',$datadaerah)->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.fasilitas','like',"%".$datafasilitas[0]."%")
									->where('id_daerah',$datadaerah)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//daerah dan fasilitas	(2 4)
		
		elseif($datanama_wisata == '' && $datadaerah == '' && $datakategori != '' && $datafasilitas != ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas[0]."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();	
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas[0]."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('wisatas.fasilitas','like',"%".$datafasilitas[0]."%")
									->where('wisatas.kategori',$datakategori)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));
	
		}//kategori dan wisata (3 4)	

		elseif($datanama_wisata != '' && $datadaerah != '' && $datakategori != '' && $datafasilitas != ''){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas."%")->get();
		$datajumlah = wisata::where('nama_wisata','like',"%".$datanama_wisata."%")->where('kategori',$datakategori)->where('daerah_wisata',$datadaerah)->where('fasilitas','like',"%".$datafasilitas."%")->count();				
		$wisataterbaru = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->limit(8)->get();
		$maps_hasil = wisata::with('foreign_daerah')->with('foreign_kategori')->orderBy('id','DESC')->where('nama_wisata','like',"%".$datanama_wisata."%")->where('daerah_wisata',$datadaerah)->where('kategori',$datakategori)->where('fasilitas','like',"%".$datafasilitas."%")->get();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('wisatas.nama_wisata','like',"%".$datanama_wisata."%")
									->where('wisatas.fasilitas','like',"%".$datafasilitas[0]."%")
									->where('id_daerah',$datadaerah)
									->where('wisatas.kategori',$datakategori)
									->get();
		return view('layouts.homepage.searchmaps', compact('menukategori','zonasi','menudaerah','maps_hasil','wisataterbaru','maps_hasil','daerah','kategori','fasilitas','wisata','datajumlah'));

		}//1234
		
		else{
			
		}
	
		}  		
	
	public function detailwisata($id){
		$menudaerah = daerah::limit(5)->get();	
		$menukategori = kategori::all();
		$datagallery = gambar::where('id_wisata', $id)->get();
		$datawisata = wisata::with('foreign_daerah')->with('foreign_kategori')->find($id);
		$datakategori = $datawisata->kategori;
		$wisataterkait = wisata::with('foreign_daerah')->with('foreign_kategori')->where('kategori', $datakategori)->get();		
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->where('id_wisata',$id)
									->get();
		$wisatapengunjung = $datawisata->pengunjung;
		$tambah = 1;
		$hasil = $wisatapengunjung + $tambah;

			$ubh = wisata::findorfail($id);
				$dt = [
					'pengunjung' => $hasil,
				];	
			$ubh->update($dt);	

		return view('layouts.homepage.detailwisata', compact('menukategori','menudaerah','datawisata','datagallery','zonasi'));
	}
	
}
