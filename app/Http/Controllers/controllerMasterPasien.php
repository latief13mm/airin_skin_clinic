<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerMasterPasien extends Controller
{
    //
	
	public function profilePasien(){
    	return view('masterPasien/profile');
    }

	public function profileUpdate(Request $request){
		// dd($request->all());
    	$input = $request->all();

    	$execute = \App\modelMaster::editProfile($input);

    	if($execute){
    		echo "Berhasil Mengubah Data Dokter";
    	}else{
    		echo "Gagal Mengubah Data Dokter";
    	}

    }

    public function cekPasienDaftar($id){
    	$execute = \App\modelMaster::getPasienPendaftaranStatusByID($id);

    	if($execute == 0){
    		echo "Pasien ini belum mendaftar hari ini.";
    	}else{
    		echo "Pasien ini sudah mendaftar sebanyak <b>".$execute." kali</b> untuk hari ini.";
    	}
    }


	public function jenis_biaya(){
    	$data['Listjenisbiaya'] = \App\modelMaster::getListJenisBiaya();
    	return view('masterPasien/jenis_biaya')->with($data);
    }

	public function jadwal_praktek(){
		$data['dataPraktek'] = \App\laporanModel::getDataJadwalPraktek();
    	return view('masterPasien/jadwal_praktek')->with($data);
    }


	public function booking_v1() {
		return view('masterPasien/booking');
	}

	public function booking(){
    	$data['Listpasien'] = \App\modelMaster::getDataPasienById();
    	return view('masterPasien/pasien')->with($data);
    }


	public function daftarkanPasienNow($id){
    	$execute = \App\modelMaster::simpanPasienTunggu($id);

    	if($execute != 'zero'){
    		$link = url('pendaftaran/cetaknoUrut').'/'.$execute;
    		echo "Berhasil Mendaftarkan Pasien ke daftar tunggu. Tentukan jadwal dokter nya di form transaksi. <br/><a class='btn btn-info btn-xs' target='_blank' href='".$link."'>Cetak No Urut</a>";
    	}else{
    		echo "Gagal Mendaftarkan Pasien ke daftar tunggu.";
    	}
    }

	public function pasienSimpanBooking(Request $request){
    	$input = $request->all();
    	
    	$execute = \App\modelMaster::simpanBooking($input);

    	if($execute){
    		echo 'Berhasil Menyimpan Data dan Mendaftarkan Pasien.';
    	}else{
    		echo 'Gagal Menyimpan Data dan Mendaftarkan Pasien.';
    	}

    }


	public function pasienSimpanDaftar(Request $request){
    	$input = $request->all();
    	
    	$execute = \App\modelMaster::simpanPasienDaftar($input);

    	if($execute){
    		echo 'Berhasil Menyimpan Data dan Mendaftarkan Pasien.';
    	}else{
    		echo 'Gagal Menyimpan Data dan Mendaftarkan Pasien.';
    	}

    }



	public function getAvailableDoctorsByDateAndDay()
    {

        $data2 =\App\modelTransaksi::getAllDokterSameAsDayAndDate();
        return response()->json($data2);
    }

}
