<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//user
use Auth;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Redirect;

use App\Models\kategori;
use App\Models\gambar;
use App\Models\wisata;
use App\Models\daerah;
use App\Models\fasilitas;
use App\Models\ZonasiWisataModel;

class AdminController extends Controller
{
    //
	
	public function Home(){	
	//	$menukategori = kategori::all();
		$countdaerah = daerah::count();
		$countwisata = wisata::count();
		$countfasilitas = fasilitas::count();
		$countkategori = kategori::count();
		$zonasi = ZonasiWisataModel::leftJoin('daerahs','daerahs.id','table_zonasi.id_daerah')
									->leftJoin('wisatas','wisatas.id','table_zonasi.id_wisata')
									->select('table_zonasi.*','wisatas.nama_wisata as wisata','wisatas.warna_zonasi as warna','wisatas.gambar_wisata as gambar','daerahs.nama_daerah as daerah')
									->get();
		$maps = wisata::with('foreign_daerah')->with('foreign_kategori')->get();
		return view('layouts.admin.home', compact('maps','countfasilitas','countkategori','countwisata','countdaerah','zonasi'));
	}
	
	//mulai kategori
	
	public function tampilkategori(){
		$kategori_artikel = kategori::all();
		return view('layouts.admin.tampilkategori', compact('kategori_artikel'));
	}	
	
	public function tambahkategori(){
		return view('layouts.admin.tambahkategori');
	}		
	
	public function prosestambahkategori(Request $request){
			$kategori = new kategori();
			$kategori->nama_kategori = $request->input('nama_kategori');
			$kategori->hastag_kategori = $request->input('hastag_kategori');
			$kategori->save();
			return redirect()->route('kategori.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editkategori($id)
   {
       $kategori_artikel = kategori::find($id);
       return view('layouts.admin.editkategori', compact('kategori_artikel'));		
   }  	
	
   public function prosesupdatekategori(Request $request, $id)
   {
       $ubh = kategori::findorfail($id);
           $dt = [
               'nama_kategori' => $request['nama_kategori'],
               'hastag_kategori' => $request['hastag_kategori'],
           ];	
           $ubh->update($dt);
           return redirect()->route('kategori.home')->with('success', 'Data Berhasil di ubah');	
   } 	
   
	public function hapuskategori($id){
		$kategori_artikel = kategori::find($id);
		$kategori_artikel->delete(); 		
		return redirect()->route('kategori.home')->with('success', 'Data Berhasil di hapus');
	}

	// Mulai Daerah
	
	public function tampildaerah(){
		$daerah = daerah::all();
		return view('layouts.admin.tampildaerah', compact('daerah'));
	}	

	public function tambahdaerah(){
		return view('layouts.admin.tambahdaerah');
	}		
	
	public function prosestambahdaerah(Request $request){
		
			$request->validate([
				'gambar' => 'mimes:jpeg,jpg,bmp,png,gif,svg,pdf|max:2048',
			]);		
			
			$nama_file = $request->gambar;			
			$filegambar = time().rand(100,999).".".$nama_file->getClientOriginalExtension();			
		
			$daerah = new daerah();
			$daerah->nama_daerah = $request->input('nama_daerah');
			$daerah->penjelasan_daerah = $request->input('penjelasan_daerah');
			$daerah->gambar = $filegambar;
			$daerah->save();
			
			$nama_file->move(public_path().'/gambardaerah/', $filegambar);
			return redirect()->route('daerah.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editdaerah($id)
   {
       $daerah = daerah::find($id);
       return view('layouts.admin.editdaerah', compact('daerah'));		
   }  	
	
   public function prosesupdatedaerah(Request $request, $id)
   {
       $ubh = daerah::findorfail($id);
	   $data_awal = $ubh->gambar;
		if ($request->hasfile('gambar'))
		{	   

			$request->validate([
				'gambar' => 'mimes:jpg,jpeg,bmp,png,gif,svg,pdf|max:2048',
			]);	

			$destination = 'gambardaerah/'.$data_awal;
			$file = $request->file('gambar');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			if (File::exists($destination))
			{
				File::delete($destination);
			}			   
		   			
           $dt = [
               'nama_daerah' => $request['nama_daerah'],
               'penjelasan_daerah' => $request['penjelasan_daerah'],
               'gambar' => $filename,
           ];	
		   $file->move(public_path().'/gambardaerah/', $filename);
           $ubh->update($dt);

           return redirect()->route('daerah.home')->with('success', 'Data Berhasil di ubah');	

		}
		else {		

			$dt = [
				'nama_daerah' => $request['nama_daerah'],
				'penjelasan_daerah' => $request['penjelasan_daerah'],
			];	
			$ubh->update($dt);
			return redirect()->route('daerah.home')->with('success', 'Data Berhasil di ubah');				
		}
   } 	
   
	public function hapusdaerah($id){
		$daerah = daerah::find($id);
		$daerah->delete(); 		
		return redirect()->route('daerah.home')->with('success', 'Data Berhasil di hapus');
	}	
	
	// Mulai Fasilitas
	
	public function tampilfasilitas(){
		$fasilitas = fasilitas::all();
		return view('layouts.admin.tampilfasilitas', compact('fasilitas'));
	}	
	
	public function tambahfasilitas(){
		return view('layouts.admin.tambahfasilitas');
	}		
	
	public function prosestambahfasilitas(Request $request){
			$fasilitas = new fasilitas();
			$fasilitas->fasilitas = $request->input('fasilitas');
			$fasilitas->save();
			return redirect()->route('fasilitas.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editfasilitas($id)
   {
       $fasilitas = fasilitas::find($id);
       return view('layouts.admin.editfasilitas', compact('fasilitas'));		
   }  	
	
   public function prosesupdatefasilitas(Request $request, $id)
   {
       $ubh = fasilitas::findorfail($id);
           $dt = [
               'fasilitas' => $request['fasilitas'],
           ];	
           $ubh->update($dt);
           return redirect()->route('fasilitas.home')->with('success', 'Data Berhasil di ubah');	
   } 	
   
	public function hapusfasilitas($id){
		$fasilitas = fasilitas::find($id);
		$fasilitas->delete(); 		
		return redirect()->route('fasilitas.home')->with('success', 'Data Berhasil di hapus');
	}	
	
	//Mulai Wisata
	
	public function tampilwisata(){
		$wisata = wisata::with('foreign_daerah')->with('foreign_kategori')->get();
		return view('layouts.admin.tampilwisata', compact('wisata'));
	}	

	public function tambahwisata(){
		$fasilitas = fasilitas::all();
		$kategori = kategori::all();
		$daerah = daerah::all();
		$datawisata = wisata::latest()->first();
		$datafix = $datawisata->id + 1;
		return view('layouts.admin.tambahwisata', compact('fasilitas','kategori','daerah','datafix'));
	}		
	
	public function prosestambahwisata(Request $request){
		
			$request->validate([
				'gambar_wisata' => 'mimes:jpg,jpeg,bmp,png,gif,svg,pdf|max:2048',
			]);		
			
			$impfasilitas = implode(', ', $request->input('fasilitas'));			
			
			$nama_file = $request->gambar_wisata;			
			$filegambar = time().rand(100,999).".".$nama_file->getClientOriginalExtension();				
		
			$wisata = new wisata();
			$wisata->nama_wisata = $request->input('nama_wisata');
			$wisata->alamat_wisata = $request->input('alamat_wisata');
			$wisata->kecamatan_wisata = $request->input('kecamatan_wisata');
			$wisata->daerah_wisata = $request->input('daerah_wisata');
			$wisata->deskripsi_tempat = $request->input('deskripsi_tempat');
			$wisata->biaya_tiket = $request->input('biaya_tiket');
			$wisata->jam_buka = $request->input('jam_buka');
			$wisata->kategori = $request->input('kategori');
			$wisata->longitude = $request->input('longitude');
			$wisata->pengunjung = '1';
			$wisata->latitude = $request->input('latitude');
			$wisata->gambar_wisata = $filegambar;
			$wisata->warna_zonasi = $request->input('warna_zonasi')??'#FFFFFF';
			$wisata->fasilitas = $impfasilitas;
			$wisata->link_traveloka = $request->input('link_traveloka');			
			$wisata->save();
			
			$nama_file->move(public_path().'/gambarwisata/', $filegambar);
			return redirect()->route('wisata.home')->with('success', 'Berhasil Menambah Data');
	}
	
	public function prosestambahgambar(Request $request){
		
		$dataidterakhir = $request->input('idterakhir');
		
        $image = $request->file('file');
        $imageName = time().rand(1,99).'.'.$image->extension();
        $image->move(public_path('gambarwisata'),$imageName);
		$gambar = new gambar();
		$gambar->id_wisata = $dataidterakhir;
		$gambar->nama_file = $imageName;
		$gambar->save();		
        return response()->json(['success'=>$imageName]);
		
	}	
	
   public function editwisata($id)
   {
    //   $daerah = daerah::find($id);
       $wisata = wisata::find($id);
	   $fasilitas = fasilitas::all();
	   $kategori = kategori::all();
	   $daerah = daerah::all();	   
	   $images = gambar::where('id_wisata', $id)->get();
       return view('layouts.admin.editwisata', compact('images','fasilitas','kategori','daerah','wisata'));		
   }  	
	
   public function prosesupdatewisata(Request $request, $id)
   {
       $ubh = wisata::findorfail($id);
	   $impfasilitas = implode(', ', $request->input('fasilitas'));	
	   $data_awal = $ubh->gambar_wisata;
	//    dd($request['warna_zonasi'])	  ;
	   if ($request->hasfile('gambar_wisata'))
	   {	   
		   $destination = 'gambarwisata/'.$data_awal;
		   $file = $request->file('gambar_wisata');
		   $extension = $file->getClientOriginalExtension();
		   $filename = time().'.'.$extension;
		   if (File::exists($destination))
		   {
			   File::delete($destination);
		   }			   
			
		  $dt = [
				'nama_wisata' => $request['nama_wisata'],
				'alamat_wisata' => $request['alamat_wisata'],
				'kecamatan_wisata' => $request['kecamatan_wisata'],
				'daerah_wisata' => $request['daerah_wisata'],
				'deskripsi_tempat' => $request['deskripsi_tempat'],
				'biaya_tiket' => $request['biaya_tiket'],
				'jam_buka' => $request['jam_buka'],
				'kategori' => $request['kategori'],
				'warna_zonasi'=>$request['warna_zonasi'],
				'longitude' => $request['longitude'],
				'latitude' => $request['latitude'],
				'fasilitas' => $impfasilitas,
				'link_traveloka' => $request['link_traveloka'],
				'gambar_wisata' => $filename,
			];	
		  $file->move(public_path().'/gambarwisata/', $filename);
		  $ubh->update($dt);

		  return redirect()->route('wisata.home')->with('success', 'Data Berhasil di ubah');	

	   }
	   else {		

           $dt = [
               'nama_wisata' => $request['nama_wisata'],
               'alamat_wisata' => $request['alamat_wisata'],
               'kecamatan_wisata' => $request['kecamatan_wisata'],
               'daerah_wisata' => $request['daerah_wisata'],
               'deskripsi_tempat' => $request['deskripsi_tempat'],
               'biaya_tiket' => $request['biaya_tiket'],
               'jam_buka' => $request['jam_buka'],
               'kategori' => $request['kategori'],
               'longitude' => $request['longitude'],
			   'warna_zonasi'=>$request['warna_zonasi'],
               'latitude' => $request['latitude'],
               'fasilitas' => $impfasilitas,
               'link_traveloka' => $request['link_traveloka'],
           ];		
		   $ubh->update($dt);
		   return redirect()->route('wisata.home')->with('success', 'Data Berhasil di ubah');				
	   }
   } 	
   
   
  	public function uploadgambar(Request $request){
		
		//
		
		$id = $request['idwisata'];
		$image = $request->file('file');
		$imageName = $image->getClientOriginalName();
		$destinationPath = public_path('/gambarwisata/');
		$image->move($destinationPath,$imageName);

		$gambar = new gambar();
		$gambar->id_wisata = $id;
		$gambar->nama_file = $imageName;
		$gambar->save();
		return response()->json(['success'=>$imageName,
			'message' => 'Images Saved Successfully..']);
	}
	
	public function tampildatagambar(){
		$images = gambar::all();
		$output = '<div class="row">';
		foreach($images as $image)
		{
			$output .= '
	  <div class="col-md-2" style="margin-bottom:16px;" align="center">
				<img src="'.asset('public/gambarwisata/' . $image->nama_file).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
				<button type="button" class="btn btn-link remove_image" id="'.$image->image.'">Remove</button>
			</div>
	  ';
		}
		$output .= '</div>';
		echo $output;
	}
		
	public function hapusgambar($id){
			$user = gambar::where('id', $id)->firstorfail()->delete();
			return redirect::back()->with('success', 'Data Berhasil di ubah');
	}	
   
   
	public function hapuswisata($id){
		$wisata = wisata::find($id);
		$wisata->delete(); 		
		return redirect()->route('wisata.home')->with('success', 'Data Berhasil di hapus');
	}		
	
}
